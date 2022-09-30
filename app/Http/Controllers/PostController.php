<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{

    public function index()
    {
        return Inertia::render('Post/Index',[

        ]);
    }

    public function store(Request $request)
    {
        //Validamos los Datos
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'body' => 'required|string|max:255'
        ]);

        $request->user()->posts()->create($validated);

        return redirect(route('posts.index'));
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
