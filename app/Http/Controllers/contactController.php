<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function home() {
        return view('contact');
    }

    public function saveContact(Request $request) {

        $formFields = $request->validate([
            'name' => "Required",
            "email" => ['Required', "email"],
            "message" => "required"
        ]);

        contact::create($formFields);
        return redirect('/')->with('message', 'Message sent successfully');
    }
}

