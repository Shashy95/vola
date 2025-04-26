<?php

namespace App\Http\Controllers;

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
            'images' => 'required|array', // Ensure it’s an array of images
            'images.*' => 'image|max:2048', // Validate each image in the array
        ]);

        // Loop through each uploaded image and store them
        foreach ($request->file('images') as $image) {
            // Define the file path and move it to the 'public/gallery' directory
            $imagePath = 'gallery/' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('gallery');

            // Create the folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move(public_path('gallery'), $imagePath); // Move image to public/gallery folder

            // Store the image path in the database
            $galleryImage = new GalleryImage();
            $galleryImage->image_path = $imagePath;
            $galleryImage->save();
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
