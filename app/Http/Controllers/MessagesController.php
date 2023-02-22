<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        $message->load('fromUser', 'toUser', 'content');
        return view('messages.show', compact('message'));
    }

    public function create()
    {
        $users = User::all();
        return view('messages.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'from_user_id' => 'required|exists:users,id',
            'to_user_id' => 'required|exists:users,id',
            'body' => 'required|string|max:500',
        ]);

        $message = Message::create([
            'from_user_id' => $validatedData['from_user_id'],
            'to_user_id' => $validatedData['to_user_id'],
        ]);

        $message->content()->create([
            'content' => $validatedData['body'],
        ]);
        return redirect()->route('messages.index');
    }
}
