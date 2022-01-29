<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Blog',
            'heading'   => 'Blog-Admin',
            'breadcumb' => [['home' => 'Dashboard', 'page' => 'Blog']]
        ];

        return view('backend.pages.blog.index', $data);
    }
}
