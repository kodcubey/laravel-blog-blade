<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('client.home', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blogdetail = Blog::find((int) $id);
        return view('client.post', compact('blogdetail'));
    }
}
