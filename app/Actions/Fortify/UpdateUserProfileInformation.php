<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use App\Models\Profile;
use App\Models\User;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /*public function updateprofile($profile, array $input)
    {

        Validator::make($input,[
            'title' => ['required', 'string', 'max:255'],
            'biography' => ['required', 'string', 'max:255'],          
            'website' => ['required', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'max:255'],
            'linkedin' => ['required', 'string', 'max:255'],
            'youtobe' => ['required', 'string', 'max:255'],            
        ]);

        $profile->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'title' => $input['title'],
            'biography' => $input['biography'],
            'website' => $input['website'],
            'facebook' => $input['facebook'],
            'linkedin' => $input['linkedin'],
            'youtobe' => $input['youtobe'],
        ])->save();
    }*/

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
