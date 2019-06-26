<?php

namespace App\Http\Controllers;

use Auth;
use App\Image;
use App\InternalMessaging;
use Illuminate\Http\Request;
use App\Services\ImageUploadService;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth::user()->role->name == 'user'){
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

        if($request->exists('sender') && $request->exists('reciver'))
        if( $request->reciver == $request->sender)
        return response('error',500); 
        
        $mail = new InternalMessaging;
        $mail->subject = $request->subject; 
        $mail->body = $request->message; 
        $mail->sender_id = auth::user()->id;
        if ( auth::user()->role->name == 'user')
            $mail->receiver_id = 0; 
        else if ( auth::user()->role->name == 'RMS')
            $mail->receiver_id = $request->reciver;
        $mail->save();

        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, Auth::user()->id, "App\InternalMessaging" );

        return redirect()->back()->with('Success'); 
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
