<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContact extends Controller
{
    public function index()
    {
        $contactData = Contact::all();
        return view('admin.contact', compact('contactData'));
    }
}
