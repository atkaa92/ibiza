<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Room;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    private $serialize = ['images','features'];

    public function rooms()
    {
        $rooms = Room::get();
        return view('admin.rooms')->with(compact('rooms'));
    }

    public function someRoom($id = null)
    {
        $features = Feature::get();
        $some = $id ? Room::find($id) : false;
        return view('admin.new-room')->with(compact('features','some'));
    }

    public function currentRoom($id)
    {

    }

    public function addRoomFunc(Request $request,$id = false)
    {
        $data = $request->all();
        if(isset($data['home_item'])){
            $data['home_item'] = 1;
        }else{
            $data['home_item'] = 0;
        }
        $data['features'] = (isset($data['features'])) ?  serialize($data['features']) : '';
        $data['images'] =  (isset($data['images'])) ? serialize($data['images']) : '';
        if(Room::updateOrCreate(['id'=>$id],$data)){
            return redirect()->back()->with('success','Room Saved');
        };
    }

    public function removeRoomFunc($id)
    {
        if(Room::find($id)->delete()){
            return redirect()->back()->with('success','Room deleted');
        }
        return redirect()->back()->with('error','Server Error');
    }

    public function sliders()
    {
        $sliders = Slider::all();
        $data = [
            'sliders' => $sliders
        ];
        return view('admin.sliders')->with($data);
    }

    public function addslide()
    {
        $this->validate(request(), [
            'images' => 'required',
            ]);
            
            foreach (request('images') as $key => $value) {
                $slide = new Slider();
                $slide->type = 'img';
                $slide->url = $value;
                $slide->save();
            }
        return redirect()->back()->with('success','Slide saved');
    }

    public function deleteslide($id)
    {
        if(Slider::find($id)->delete()){
            return redirect()->back()->with('success','Slide deleted');
        }
        return redirect()->back()->with('error','Server Error');
    }

}
