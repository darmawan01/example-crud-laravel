<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Kategori;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::all(); --> untuk menampilkan semua data
        // $posts = Post::latest()->paginate(5); --> membatasi tampil data langsung sebanyak 5
        $posts = Post::latest()->paginate(env('PER_PAGE')); // membatasi tampil data langsung sebanyak 5

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Kategori::all();

        return view('post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required|min:10',
        ]);

        Post::create([
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'kategori_id' => request('kategori_id'),
        ]);

        return redirect()->route('post.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category = Kategori::all();

        return view('post.edit', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $post->update([
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'kategori_id' => request('kategori_id'),
        ]);

        return redirect()->route('post.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->withDanger('Data Di Tambahkan !!!');
    }
}
