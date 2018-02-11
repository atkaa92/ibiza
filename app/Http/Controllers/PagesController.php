<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
        $rooms = Room::paginate(1);
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
        $features = Feature::whereIn('id',unserialize($room->features))->get();
        $data = [
            'currPage' => 'rooms',
            'room' => $room,
            'features' => $features
        ];
        return view('room')->with($data);
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
