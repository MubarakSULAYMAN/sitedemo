<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        // return $request->input('name');
        $this->validate($request,
        [
            'fullname' => 'required|Regex:/^[\D]+$/i|between:2,51',
            'email' => 'required|email|max:75|unique:users',
            'message' => 'required|max:327',
            // 'image' => 'nullable|max:5000'
            // 'image' => 'image|mimes:jpg,jpeg,bmp,png|max:5000'
            // 'image' => 'sometimes|mimes:jpg,jpeg,bmp,png|max:5000'
        ]);

        //create new message
        $message = new Message;
        $message->fullname = $request->input('fullname');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // $message->image = $request->input('image');

        //save message
        $message->save();

        //Redirect
        return redirect('/')->with('success', 'We have received your message and should get back to you in some moments via your email .');

    }

    public function getMessages()
    {
        $messages = Message::all();
        return view('messages')->with('messages', '$messages');
    }
}


?>