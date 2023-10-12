<?php

namespace App\Http\Controllers;

use App\Models\Laravel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaravelController extends Controller
{
    //
    public function index(): View
    {
        //get posts
        $laravels = Laravel::latest()->paginate(5);

        //render view with posts
        return view('laravel.index', compact('laravels'));
    }
    public function create(): View
    {
        return view('laravel.create');
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
        $image->storeAs('public/laravel', $image->hashName());

        //create post
        Laravel::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'deskripsi'   => $request->deskripsi,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('laravel.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
        $laravels = Laravel::findOrFail($id);

        //render view with post
        return view('laravel.edit', compact('laravels'));
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
        $laravels = Laravel::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/laravel', $image->hashName());

            //delete old image
            Storage::delete('public/laravel/'.$laravels->image);

            //update post with new image
            $laravels->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
            $laravels->update([
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('laravel.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $laravels = Laravel::findOrFail($id);

        //delete image
        Storage::delete('public/laravel/'. $laravels->image);

        //delete post
        $laravels->delete();

        //redirect to index
        return redirect()->route('laravel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
