<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::latest()->get();
        return view('admin.pages.films.index', compact('films'));
    }

    public function create()
    {
        return view('admin.pages.films.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'video_path' => 'nullable|string',
        ]);

        

        $film = new Film();
        $film->title = $request->title;
        $film->description = $request->description;
        $film->video_path = $request->video_path;

        if ($request->hasFile('thumbnail')) {
            $film->thumbnail = UploadHelper::uploadPublicFile($request->file('thumbnail'), 'films');
        }

       

        $film->save();

        return redirect()->route('films.index')->with('success', 'Film created successfully.');
    }

    public function edit(Film $film)
    {
        return view('admin.pages.films.form', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video_path' => 'nullable|string',
        ]);

        $film->title = $request->title;
        $film->description = $request->description;
        $film->video_path = $request->video_path;


        if ($request->hasFile('thumbnail')) {
            // Delete old file manually from public/
            if ($film->thumbnail && file_exists(public_path($film->thumbnail))) {
                unlink(public_path($film->thumbnail));
            }
        
            // Upload new file to public/films/thumbnails
            $film->thumbnail = UploadHelper::uploadPublicFile($request->file('thumbnail'), 'films');
        }        


        $film->save();

        return redirect()->route('films.index')->with('success', 'Film updated successfully.');
    }

    public function destroy(Film $film)
    {
        if ($film->thumbnail && file_exists(public_path($film->thumbnail))) {
            unlink(public_path($film->thumbnail));
        }
       
        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film deleted successfully.');
    }
}
