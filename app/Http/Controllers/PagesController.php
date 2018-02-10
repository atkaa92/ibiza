<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data = [
            'currPage' => 'home'
        ];
        return view('home')->with($data);
    }

    public function about()
    {
        $data = [
            'currPage' => 'about'
        ];
        return view('about')->with($data);
    }

    public function rooms()
    {
        $data = [
            'currPage' => 'rooms'
        ];
        return view('rooms')->with($data);
    }

    public function gallery()
    {
        $data = [
            'currPage' => 'gallery'
        ];
        return view('gallery')->with($data);
    }

    public function contacts()
    {
        $data = [
            'currPage' => 'contacts'
        ];
        return view('contacts')->with($data);
    }
}
