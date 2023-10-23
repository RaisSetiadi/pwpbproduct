<?php

namespace App\Http\Controllers;

use App\Models\Ruby;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RubyController extends Controller
{
    //
    public function index(): View
    {
        //get posts
        $rubys = Ruby::latest()->paginate(5);

        //render view with posts
        return view('ruby.index', compact('rubys'));
    }
    public function create(): View
    {
        return view('ruby.create');
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
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10',
            'tanggal'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/ruby', $image->hashName());

        //create post
        Ruby::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'deskripsi'   => $request->deskripsi,
            'content'   => $request->content,
            'tanggal'   => $request->tanggal
        ]);

        //redirect to index
        return redirect()->route('ruby.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
       $rubys = Ruby::findOrFail($id);

        //render view with post
        return view('ruby.edit', compact('rubys$rubys'));
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
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
       $rubys = Ruby::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ruby', $image->hashName());

            //delete old image
            Storage::delete('public/ruby/'.$rubys->image);

            //update post with new image
           $rubys->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
           $rubys->update([
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('ruby.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
       $rubys = Ruby::findOrFail($id);

        //delete image
        Storage::delete('public/ruby/'. $rubys->image);

        //delete post
       $rubys->delete();

        //redirect to index
        return redirect()->route('ruby.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}

