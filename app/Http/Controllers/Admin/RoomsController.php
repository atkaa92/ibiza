<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    private $serialize = ['images','features'];

    public function rooms()
    {

    }

    public function newRoom()
    {
        $features = Feature::get();
        return view('admin.new-room')->with(compact('features'));
    }

    public function currentRoom($id)
    {

    }

    public function addRoomFunc(Request $request,$id = false)
    {
        $data = $request->all();
        $data['features'] = serialize($data['features']);
        $data['images'] = serialize($data['images']);
        if(Room::updateOrCreate(['id'=>$id],$data)){
            return redirect()->back()->with('success','Room Saved');
        };
    }

}
