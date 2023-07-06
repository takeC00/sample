<?php

namespace App\Http\Controllers;

use App\Models\ChatUser;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show($id)
    {
        $user = ChatUser::where('id', $id)->first();
        //dd($user);
        $messages = Message::where('chat_user_id',$id)->get();
        return view('message.show', ['messages' => $messages, 'user' => $user]);
    }
}
