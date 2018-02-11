<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Media;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
}
