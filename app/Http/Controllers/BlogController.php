<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $allPosts = Blog::all();
        return view('admin.blog', compact('allPosts'));
    }

    public function deletePost($id)
    {
        Blog::destroy('id', $id);
        return redirect('/admin-blog-yaz')->with('status', 'Post deleted!');
    }

    public function editPostPage($id)
    {
        $blogItems = Blog::where('id', $id)->get();
        return view('admin.editblog', compact('blogItems'));
    }

    public function editPostAction(Request $request)
    {
        Blog::where('id', $request->input('id'))
            ->update(['title' => $request->input('title'), 'subtitle' => $request->input('subtitle'), 'content' => $request->input('editor')]);

        return redirect('/admin-edit-post' . '/' . $request->input('id'))->with('status', 'Post Edited!');
    }

    public function addPostAction(Request $request)
    {
        Blog::firstOrCreate([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'content'   => $request->input('editor')
        ]);

        return redirect('/admin-blog-yaz')->with('status', 'Post Add!');
    }
}
