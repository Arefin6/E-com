<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{
    public function create(){
        return view('messages.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'text' => 'required',
        ]);

        $message = Message::create([
            'email' => $request->email,
            'text' => $request->text
        ]);

        return redirect()->route('welcome');
    }

    public function index(){
      return view('messages.index')->with('messages',Message::all());
    }
}
