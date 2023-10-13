<?php

namespace App\Http\Controllers;
//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //
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

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'foto' =>'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10',
            'tanggal'   => 'required|min:10'
           
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        $foto = $request->file('foto');
        $foto ->storeAs('public/posts',$foto->hashName());

        //create post
        Post::create([
            'image'     => $image->hashName(),
            'foto'      => $foto->hashName(),
            'title'     => $request->title,
            'deskripsi'   => $request->deskripsi,
            'content'   => $request->content,
            'tanggal'   => $request->tanggal
            
 
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'foto' =>'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            $foto = $request->file('foto');
            $foto ->storeAs('public/posts',$foto->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);
            Storage::delete('public/posts/'.$post->foto);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'foto'     => $foto->hashName(),
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal,
            ]);

        } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal

            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
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
    
}
