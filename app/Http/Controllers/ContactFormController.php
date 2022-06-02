<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ]);

        $inputs = $request->all();

        return view('confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/complete');
    }

    public function complete()
    {
        return view('complete');
    }
}
