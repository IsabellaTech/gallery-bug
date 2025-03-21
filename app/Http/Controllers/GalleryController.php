<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function show(Gallery $gallery)
    {
        // The orderedGallery accessor we created will automatically sort the images
        return view('gallery.show', [
            'gallery' => $gallery,
            'images' => $gallery->orderedGallery
        ]);
    }
} 