<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);
        //render view with posts
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', 
            'nama' => 'required|min:5',
            'jurusan' => 'required|min:3',
            'nomor' => 'required|min:5',
            'email' => 'required|min:5',
            'alamat' => 'required|min:10'
        ]);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        //create post 
        Post::create([
            'image' => $image->hashName(), 
            'nama' => $request->nama, 
            'jurusan' => $request->jurusan,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data 
        Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    public function destroy($id): RedirectResponse
    {

    //get post by ID
    $post = Post::findOrFail($id);

    //delete image
    Storage::delete('public/posts/'. $post->image);

    //delete post
    $post->delete();

    //redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048', 
            'nama' => 'required|min:5',
            'jurusan' => 'required|min:3',
            'nomor' => 'required|min:5',
            'email' => 'required|min:5',
            'alamat' => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image 
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'image' => $image->hashName(), 
                'nama' => $request->nama, 
                'jurusan' => $request->jurusan,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'alamat' => $request->alamat
            ]);

        } else {
            //update post without image
            $post->update([
                'nama' => $request->nama, 
                'jurusan' => $request->jurusan,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'alamat' => $request->alamat
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}