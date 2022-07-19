<?php

namespace App\Http\Controllers;

// memanggil model Post
use App\Models\Post;

class PostController extends Controller
{
    public function tampil()
    {
        // menampilkan semua data dari model Post
        // model Post mewakili data dari table 'posts'
        // atau sama dengan query -> select * from posts
        $post = Post::all();
        // dd($post);
        return view('post.index', compact('post'));
    }

    public function search($id)
    {
        // mencari data dari model Post berdasarkan id
        // query -> select * from posts where id = $id
        $post = Post::findOrFail($id);
        return $post;
    }

    public function search_title($title)
    {
        // mencari data dari model Post berdasarkan id
        //query -> select * from posts where title like %title%
        $post = Post::where('title', 'like', '%' . $title . '%')->get();
        return $post;
    }

    public function edit($id, $a, $b)
    {
        // mengedit data Post berdasarkan id
        $post = Post::find($id);
        $post->title = $a;
        $post->content = $b;
        $post->save();
        return $post;
    }

    public function tambah($a, $b)
    {
        // menambah data baru di model Post
        $post = new Post();
        $post->title = $a;
        $post->content = $b;
        $post->save();
        return $post;
    }

    public function hapus($id)
    {
        // menghapus data di model Post berdasarkan id
        $post = Post::find($id);
        $post->delete();
        // return $post;
        return redirect('post');
    }
}


