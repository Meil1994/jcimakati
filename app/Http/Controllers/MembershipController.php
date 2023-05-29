<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function memberships(){
        return view('membership.Membership');
    }

    public function postMembership(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'reason' => 'required',
        ]);

        Membership::create($formFields);
        return redirect('/membership')->with('message', 'Thank you for your message. I\'ll be in touch shortly!');
    }
}
