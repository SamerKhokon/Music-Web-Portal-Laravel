<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use SongsModel;
use ArtistModel;
use AlbumModel;
use UserBalancesModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    if(Auth::check()) {

            $user_id = Auth::user()->id; 

            $activities = DB::table('user_activity_log')->where('user_id',$user_id)->orderBy('id', 'DESC')->take(15)->get();            
            $balances = DB::table('user_balances')->where('user_id', $user_id)->where('balance_status',1)->get();


            $log = array('user_id' => Auth::user()->id ,
                        'activity_info'=> 'Profile page browser',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );    

             DB::table('user_activity_log')
                ->insert($log);    

			return view('profile')
                    ->with('activities' , $activities)
                    ->with('balances' , $balances);
		}



            $log = array('user_id' => 0 ,
                        'activity_info'=> 'Profile page browser and Forward to login page',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );    

             DB::table('user_activity_log')
                ->insert($log);    

		return redirect('/auth/login');
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
        //
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
