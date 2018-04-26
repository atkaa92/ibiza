<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Room;
use \Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;

class PagesController extends Controller
{
    public function home()
    {
        $gerRandomThree = Room::orderBy(DB::raw('RAND()'))
                                ->take(3)
                                ->where('home_item', 1)
                                ->get();
        $model = new Room();
        $data = [
            'currPage' => 'home',
            'gerRandomThree' => $gerRandomThree,
            'model' => $model
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
        $lang = request()->segment(1);
        $rooms = Room::orderBy($lang."_name")->paginate(6);
        $feature_model = new Feature();
        $data = [
            'currPage' => 'rooms',
            'rooms' => $rooms,
            'model' => $feature_model
        ];
        return view('rooms')->with($data);
    }

    public function room($id)
    {
        $room = Room::find($id);
        $features =  ($room->features) ? Feature::whereIn('id',unserialize($room->features))->get() : '';
        $data = [
            'currPage' => 'rooms',
            'room' => $room,
            'features' => $features
        ];
        return view('room')->with($data);
    }

    public function gallery()
    {
        $images = File::allFiles('uploads/source');
        $data = [
            'currPage' => 'gallery',
            'images' => $images
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

    public function sentMail()
    {
        $this->validate(request(), [
            'name' => 'required|max:199|min:1',
            'email' => 'required|email|max:199',
            'messsage' => 'required|min:3',
            'subject' => 'required'
        ]);
        
        $email = 'atkaa92@gmail.com';
        $subject = request('subject');
        $name = request('name');

        $mail_data = [
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'messsage' => request('messsage'),
        ];

        $mail = Mail::send('mails.contacts', $mail_data, function($message) use ($email,$subject, $name){
            $message->to($email)->subject($subject);
            $message->from('tryl1tvin@gmail.com', $name);
            $message->replyTo('tryl1tvin@gmail.com', $name);
        });
        return redirect()->back()->with('success', 'Спасибо за ваш вопрос. ');;
    }
}
