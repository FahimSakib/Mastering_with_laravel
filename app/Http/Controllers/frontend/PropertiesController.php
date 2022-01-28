<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Listings',
            'breadcumb' => 'Listings'
        ];

        return view('frontend.pages.properties.properties', $data);
    }
}
