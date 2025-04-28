<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Film;
use App\Models\GalleryImage;
use App\Models\HeroVideo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get counts for dashboard stats
        $stats = [
            'videos' => HeroVideo::count(),
            'gallery_items' => GalleryImage::count(),
            'films' => Film::count(),
            'client_logos' => Client::count(),
        ];

        $lastUpdates = $this->getLastUpdates();

        return view('admin.pages.home', compact('stats', 'lastUpdates'));
    }

    /**
     * Get recent activities across all content types
     * 
     * @return \Illuminate\Support\Collection
     */
    private function getLastUpdates()
    {
        return [
            'hero' => $this->formatLastUpdate(HeroVideo::max('updated_at')),
            'gallery' => $this->formatLastUpdate(GalleryImage::max('updated_at')),
            'films' => $this->formatLastUpdate(Film::max('updated_at')),
            'clients' => $this->formatLastUpdate(Client::max('updated_at'))
        ];
    }
    
    private function formatLastUpdate($date)
    {
        if (!$date) {
            return 'Never updated';
        }
        
        // Convert string date to Carbon instance
        return \Carbon\Carbon::parse($date)->diffForHumans();
    }


  
}
