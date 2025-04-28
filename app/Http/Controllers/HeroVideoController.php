<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\HeroVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroVideoController extends Controller
{
    public function edit()
    {
        $video = HeroVideo::first();
        return view('admin.pages.hero.edit', compact('video'));
    }

    public function update(Request $request)
    {
        $video = HeroVideo::find($request->id);
    
        // Dynamic rule: required if no existing video, else nullable
        $videoRule = $video && $video->video_path ? 'nullable' : 'required';
    
        $validated = $request->validate([
            'video' => [
                $videoRule,
                'file',
                'mimes:mp4,mov,avi,webm',
                'max:51200',
                function ($attribute, $value, $fail) {
                    if ($value && !str_starts_with($value->getMimeType(), 'video/')) {
                        $fail('The uploaded file must be a valid video.');
                    }
                }
            ],
            'title' => 'required|string|max:255',
        ]);
    
        $videoPath = $video ? $video->video_path : null;
    
        if ($request->hasFile('video')) {
            if ($videoPath && file_exists(public_path($videoPath))) {
                unlink(public_path($videoPath)); // Delete old video
            }
        
            $videoPath = UploadHelper::uploadPublicFile($request->file('video'), 'hero');
        }
        
        
    
        // **updateOrCreate**
        HeroVideo::updateOrCreate(
            ['id' => $request->id], // Find by ID
            [
                'video_path' => $videoPath,
                'title' => $validated['title'],
            ]
        );
    
        return redirect()->back()->with('success', 'Hero video updated successfully.');
    }
    
}
