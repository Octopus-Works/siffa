<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternalMessaging;
use Auth; 

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = InternalMessaging::where('sender_id', auth::user()->id)
                                    // ->where('receiver_id', auth::user()->id)
                                    ->get();
        error_log($mail);
        return view('user/view_messages')->withmail($mail); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = new InternalMessaging;
        $mail->subject = $request->subject; 
        $mail->body = $request->message; 
        $mail->attachement = $request->attachement;
        $mail->sender_id = auth::user()->id;
        $mail->body = $request->message; 
        $mail->attachement = $request->attachement;
        $mail->sender_id = auth::user()->id;

        if ( auth::user()->role == 'CMS')
            $mail->sender_id = auth::user()->id; 
        $mail->save();
        return response('success'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ( auth::check()){
            $mail = InternalMessaging::find(Auth::user()->id);
            return view('user/view_messages')->withmail($mail); 
        }    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
