<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        //Create New Message using Eloquent
        $message = new Message;        
        $message->name = $request->input('name');
        $message->email = $email = $request->input('email');
        $message->message = $request->input('message');        
        //Inserting Message
        $message->save();

        //Redirect to Home page
        return redirect('/')->with('success','Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }
}
