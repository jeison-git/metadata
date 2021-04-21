<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="flex-1 flex flex-col mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-36 w-36 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="flex-1 flex flex-col mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-36 h-36"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif
          
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

       {{-- <!-- title -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>

        <!-- biography -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="biography" value="{{ __('Biography') }}" />
            <x-jet-input id="biography" type="text" class="mt-1 block w-full" wire:model.defer="state.biography" />
            <x-jet-input-error for="biography" class="mt-2" />
        </div>

        <!-- website -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="website" value="{{ __('Website') }}" />
            <x-jet-input id="website" type="text" class="mt-1 block w-full" wire:model.defer="state.website" />
            <x-jet-input-error for="website" class="mt-2" />
        </div>

        <!-- facebook -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="facebook" value="{{ __('Facebook') }}" />
            <x-jet-input id="facebook" type="text" class="mt-1 block w-full" wire:model.defer="state.facebook" />
            <x-jet-input-error for="facebook" class="mt-2" />
        </div>

        <!-- linkedin -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="linkedin" value="{{ __('LinkedIn') }}" />
            <x-jet-input id="linkedin" type="text" class="mt-1 block w-full" wire:model.defer="state.linkedin" />
            <x-jet-input-error for="linkedin" class="mt-2" />
        </div>

        <!-- youtobe -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="youtobe" value="{{ __('YouTube') }}" />
            <x-jet-input id="youtobe" type="text" class="mt-1 block w-full" wire:model.defer="state.youtobe" />
            <x-jet-input-error for="youtobe" class="mt-2" />
        </div>--}}

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
