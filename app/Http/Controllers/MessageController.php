<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternalMessaging;
use App\Image;
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
       //
       // dd(auth::user()->role->name );
        if ( auth::user()->role->name == 'RMS'){
            $mail = InternalMessaging::where('sender_id', auth::user()->id)
                                        ->orWhere('receiver_id', 0)
                                        ->get();
            return view('rms/view_messages')->withmail($mail);                             
        }

        if ( auth::user()->role->name == 'User'){
            $mail = InternalMessaging::where('sender_id', auth::user()->id)
                                        ->orWhere('receiver_id', auth::user()->id)
                                        ->get();
            return view('user/view_messages')->withmail($mail); 

        }
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
        $mail->sender_id = auth::user()->id;

        if ( auth::user()->role->name == 'User')
            $mail->receiver_id = 0; 
        else if ( auth::user()->role->name == 'RMS')
            $mail->receiver_id = $request->reciver;
        $mail->save();

        if ( $request->hasfile('attachement')){
            $filenameWithExt = $request->file('attachement')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('attachement')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('attachement')->storeAs('public/attachement', $fileNameToStore);
            $Image = new Image;  
            $Image->imageable_id = $mail->id;
            $Image->imageable_type = 'App\InternalMessaging';
            $Image->url = '/storage/attachement/'. $fileNameToStore;
            $Image->save();
        }
        
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
        //
    }

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
