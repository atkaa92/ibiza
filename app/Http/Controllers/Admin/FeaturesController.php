<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Media;
use DB;
use App\Http\Controllers\Controller as Controller;

class FeaturesController extends Controller
{
    public function features()
    {
        $features = Feature::all();
        $data=[
            'features' => $features
        ];
        return view('admin.features')->with($data);
    }
    
    public function newFeature()
    {
        return view('admin.newFeature');
    }

    public function addNewFeature()
    {
        $this->validate(request(), [
            'en_name' => 'required',
            'ru_name' => 'required',
            'hy_name' => 'required',
        ]);

        if(Feature::create(request()->all())){
            return redirect()->back()->with('success','Feature created!');
        };
        return redirect()->back()->with('error','Server Error!');
    }

    public function editFeature($id)
    {
        $this->validate(request(), [
            'en_name' => 'required',
            'ru_name' => 'required',
            'hy_name' => 'required',
        ]);
        $feture = Feature::where('id', $id)->first();
        $feture->en_name = request('en_name');
        $feture->en_name = request('en_name');
        $feture->en_name = request('en_name');
        if($feture->save()){
            return redirect()->back()->with('success','Feature updated!');
        };
        return redirect()->back()->with('error','Server Error!');
    }

    public function deleteFeature($id)
    {
        Feature::where('id', $id)->delete();
        return redirect()->back()->with('success','Feature deleted!');
    }
}
