<?php

namespace App\Http\Controllers;

use App\Models\Javascript;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JavascriptController extends Controller
{
    //
    public function index(): View
    {
        //get posts
        $javascripts = Javascript::latest()->paginate(5);

        //render view with posts
        return view('javascript.index', compact('javascripts'));
    }
    public function create(): View
    {
        return view('javascript.create');
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
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/javascript', $image->hashName());

        //create post
        Javascript::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'deskripsi'   => $request->deskripsi,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('javascript.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
       $javascripts = Javascript::findOrFail($id);

        //render view with post
        return view('javascript.edit', compact('javascripts'));
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
       $javascripts = Javascript::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/javascript', $image->hashName());

            //delete old image
            Storage::delete('public/javascript/'.$javascripts->image);

            //update post with new image
           $javascripts->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
           $javascripts->update([
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('javascript.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
       $javascripts = Javascript::findOrFail($id);

        //delete image
        Storage::delete('public/javascript/'. $javascripts->image);

        //delete post
       $javascripts->delete();

        //redirect to index
        return redirect()->route('javascript.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
