<?php

namespace App\Http\Controllers;

use App\Models\ChatUser;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatUserController extends Controller
{
    private $users;

    public function __construct(ChatUser $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->all();
        return view('chatUser.index', ['users' => $users]);
    }

    public function update($id)
    {
        $users = $this->users->all();
        $readMessageId = Message::where('chat_user_id', $id)->max('id');
        // dd($readMessageId);
        $updateUser = ChatUser::where('id', $id)->first();
        //dd($updateUser);
        $updateUser->fill(['message_id' => $readMessageId])->save();
        return redirect()->route('chatUser.index', ['users' => $users]);
    }
}
