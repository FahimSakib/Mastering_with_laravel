<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'About',
            'heading'   => 'About-Admin',
            'breadcumb' => [['home' => 'Dashboard', 'page' => 'About']]
        ];

        return view('backend.pages.about.index', $data);
    }
}
