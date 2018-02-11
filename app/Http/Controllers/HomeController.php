<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Media;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function features()
    {
        return view('admin.features');
    }
    
    public function newFeature()
    {
        return view('admin.newFeature');
    }

    public function addNewFeature()
    {
        dd(request()->all());
    }
}
