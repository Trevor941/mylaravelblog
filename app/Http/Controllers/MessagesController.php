<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    //
    public function chatPage($id){
        $sender_id = auth()->user()->id;
   
    $receiver = User::find($id);
    $receiver_id = $receiver->id;
    $chatmessages = DB::table('messages')->where('sender_id', $sender_id )->where('receiver_id', $receiver_id)
                    ->orWhere(function ($query) use($receiver_id, $sender_id){
                       $query->where('sender_id', $receiver_id)->where('receiver_id', $sender_id);
                   })->get();
    
        


    return view('messages.chat', compact(['chatmessages', 'receiver', 'sender_id']));
    }

    
    public function sendMessage(Request $request, $id){
            //getting my id as authenticated user(sender)
            $sender_id = auth()->user()->id;
            $sender = User::find($sender_id);
            //getting receiver's id
            $receiver = User::find($id);
            $receiver_id = $receiver->id;
            //creating the message
            $message = new Message();
            $message->message = $request->message;
            $message->receiver_id = $receiver_id;
            $sender->messages()->save($message);
            return redirect()->back();
    }
    

    
}
