<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('contactus.ContactUs');
    }

    public function postContactUs(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'comments' => 'required',
        ]);

        Contact::create($formFields);
        return redirect('/membership')->with('message', 'Thank you for your message. I\'ll be in touch shortly!');
    }
}