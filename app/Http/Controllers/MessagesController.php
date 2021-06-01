<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessagesController extends Controller
{
    //
    public function chatPage($id){
        $sender_id = auth()->user()->id;
        $user = User::find($sender_id);
        $receiver = User::find($id);
        $messages = Message::all();
        //return $messages;


    return view('messages.chat', compact(['receiver','messages']));
     
    }

    
}
