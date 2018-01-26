<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function Post(Request $request){
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'message' => 'required',
       ]);

       $message = new Message();

       //saving the data
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->message = $request->input('message');

       //save the message
       $message->save();

       return redirect('/home')->with('success', 'Message succesfully sent');
    }
}
