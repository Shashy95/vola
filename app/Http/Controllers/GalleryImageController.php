<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $images = GalleryImage::latest()->get();
        return view('admin.pages.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'images' => 'required|array', 
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', 
        ]);

     
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = UploadHelper::uploadPublicFile($image, 'gallery');
                
                $galleryImage = new GalleryImage();
                $galleryImage->image_path = $imagePath;
                $galleryImage->save();
            }
        }
        

        return back()->with('success', 'Gallery images uploaded successfully!');
       

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $galleryImage = GalleryImage::findOrFail($id);

        // Delete the image from storage
        $imagePath = public_path('gallery/' . $galleryImage->image_path);
        if (File::exists($imagePath)) {
            File::delete($imagePath); // Delete image from the public directory
        }

        // Delete the image record from the database
        $galleryImage->delete();

        return back()->with('success', 'Gallery image deleted successfully!');
    }
}
