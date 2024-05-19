<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'about_us')->orwhere('type','gallery_description')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        // dd($data);
        // resources/views/aboutus.blade.php
        return view('aboutus', compact('data'));
    }

}
