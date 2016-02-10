<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Auth;
use Input;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$msg = "test email";
		//mail("khokon_85seu@hotmail.com","My subject",$msg);		
		
		Mail::send('emails.welcome', ['key' => 'value'], function($message)
		{
			$message->to('khokon_85seu@hotmail.com', 'John Smith')->subject('Welcome!');
		});
		
		/*Mail::raw('Text to e-mail', function($message)
		{
			$message->from('samerseu@gmail.com', 'Laravel');
			$message->to('khokon_85seu@hotmail.com')->cc('failure_85@yahoo.com');
		});*/
		
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
        //print_r($request->all());
		
		
		$msg = "test email";
		mail("khokon_85seu@hotmail.com","My subject",$msg);
		/*Mail::send('emails.welcome', ['key' => 'value'], function($message)
		{
			$message->to('khokon_85seu@hotmail.com', 'John Smith')->subject('Welcome!');
		});*/
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
