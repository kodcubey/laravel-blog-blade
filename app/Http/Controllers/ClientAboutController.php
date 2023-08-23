<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class ClientAboutController extends Controller
{
    public function index()
    {
        $aboutData = About::all();
        return view('client.about', compact('aboutData'));
    }
}
