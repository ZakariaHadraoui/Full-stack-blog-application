<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
        return view('blog.index')->with('posts', Post::get());
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required | mimes:jpg,jpeg,png,max:5000'
        ]);
        $slug = Str::slug($request->title, '-');

        $newimagename = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newimagename);
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => $slug,
            'imgpath' => $newimagename,
            'userid' => auth()->user()->id

        ]);
        return redirect('/blog');
    }

    public function show(string $slug)
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }


    public function edit(string $slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());;
    }

    public function update(Request $request, string $slug)
    {
        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'slug' => $slug,
                'userid' => auth()->user()->id
            ]);
        return redirect('/blog/' . $slug)->with('msg', 'edit done successfully');
    }

    public function destroy(string $slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('/blog/' )->with('msg', 'your post has been deleted ');

    }
}
