<?php

namespace App\Http\Controllers;

use App\Mail\ContactUSMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact.index');

    }

    public function store(Request $request){

        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        $correo = new ContactUSMailable($request->all());
        Mail::to('jeison.a.r.2013@gmail.com')->send($correo);
            return redirect()->route('contact.index')->with('info', 'Mensaje enviado');

    }
}
