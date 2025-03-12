<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message-list', [
            'messages' => Message::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all(), $request->user_mail);
        // dd('listo');
        $message = new Message();
        $message->user_name = $request->user_name;
        $message->user_mail = $request->user_mail;
        $message->user_message = $request->user_message;
        $message->user_city = 'Guadalajara';

        $message->save();

        //Redirijir
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('message.show-message', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        return view('messages.edit-message', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        $request->validate([
            'user_name' => 'required|min:3|max:255',
            'user_mail' => ['required', 'email', 'max:255'],
            'user_message' => ['required', 'min:15']
        ]);

        $message->user_name = $request->user_name;
        $message->user_mail = $request->user_mail;
        $message->user_message = $request->user_message;
        $message->save();

        return redirect()->route('messages.show', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('message.index');
    }
}
