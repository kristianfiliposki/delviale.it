<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Models\Client;


class MessaggiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $user_id=$user->id;
        $cliente=Client::findOrFail($user_id) ;  
        $messagges=Message::all();
        return view('admin.sms.index',compact('messagges',"cliente"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $user = auth()->user();
      $user_id=$user->id;
      $cliente=Client::findOrFail($user_id) ;  
      return view('admin.sms.create',compact("cliente"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $newMessages=new Message;
        $newMessages->autore=$data['autore'];
        $newMessages->testo=$data['testo'];
        $newMessages->save(); 
        

        return redirect()->route('admin.dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
