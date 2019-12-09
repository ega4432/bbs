<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request) {
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|max:2000',
        ]);
        $post = Post::findOrFail($params['post_id']);
        $post->comments()->route('post.show', ['post' => $post]);
    }
}
