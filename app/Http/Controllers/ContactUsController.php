<?php

namespace App\Http\Controllers;

use App\Mail\ContactUSMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    //visualisar los mensajes
    public function message(Contact $contact)
    {
        return view('contact.message', compact('contact'));
    }

    //responder los mensajes
    public function answer(Request $request, Contact $contact)
    {

        $request->validate([
            'body' => 'required'
        ]);

        $contact->send()->create($request->all());

        $contact->status = 2;
        $contact->save();

        //Envio de correos
        $mail = new ContactUSMailable($contact);
        Mail::to($contact->email)->send($mail);

        return redirect()->route('admin.contacts.index');
    }
}
