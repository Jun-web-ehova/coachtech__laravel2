<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function post(Request $request)
    {
        $contact = new contact;
        $form = $request->all();
        unset($form['_token_']);
        $contact->fill($form)->save();
        return view('test.thanks');
    }
}
