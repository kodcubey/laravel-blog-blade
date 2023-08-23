<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutData = About::all();
        return view('admin.about', compact('aboutData'));
    }

    public function aboutUpdate(Request $request)
    {
        $about = About::find(1);
        $about->content = $request->input('editor');
        $about->save();

        return redirect('/admin-hakkimda')->with('status', 'About Updated!');
    }
}
