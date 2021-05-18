<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BotAmiScanMail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\ContactSupport;
use Illuminate\Support\Facades\DB;
use Date;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.support');
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
        $to_email = "joshcooldev@gmail.com";

        $email_obj = [
            'receiver' => $to_email,
            'sender_name' => $request->First_Name . " " . $request->Last_Name,
            'sender_email' => $request->Email,
            'sender_message' => $request->Message,
            'type' => 'support'
        ];

        $status = $this->SendEmail($to_email, $email_obj);

        return redirect('/support')->with('success', $status);
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

    public function SendEmail($to_email, $email_obj)
    {
        $sender_info = new ContactSupport;
        $sender_info->name = $email_obj['sender_name'];
        $sender_info->email = $email_obj['sender_email'];
        $sender_info->message = $email_obj['sender_message'];
        $sender_info->type = $email_obj['type'];
        $sender_info->save();

        Mail::to($to_email)->send(new BotAmiScanMail($email_obj));

        $email_status = "";

        if(Mail::failures() != 0) {
            $email_status = "Success! Your E-mail has been sent.";
            return $email_status;
        } 
        else {
            $email_status = "Failed! Your E-mail has not sent.";
            return $email_status;
        }
    }
}
