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
            'name' => 'required|Regex:/^[\D]+$/i|between:2,50',
            'email' => 'required|email|max:255|unique:users',
            'message' => 'required',
            'image' => 'sometimes|mimes:jpg,jpeg,bmp,png|max:5000'
        ]);

        //create new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();

        //Redirect
        return redirect('/')->with('success', 'We have received your message and should get back to you in some moments.');

    }

    public function getMessages()
    {
        $messages = Message::all();
        return view('messages')->with('messages', '$messages');
    }
}


?>