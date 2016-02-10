<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\SongsModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $songs = DB::table('songs')
                    ->leftJoin('albums'  , 'songs.album_id'  , '=' , 'albums.id')
                    ->leftJoin('artists' , 'songs.artist_id' , '=' , 'artists.id')
                    ->orderBy(DB::raw('RAND()'))
                    ->take(12)
                    ->get();
                
            $user_id = Auth::user()->id;    
            $log = array('user_id' => $user_id,
                        'activity_info'=> 'Home page browser',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );    

            DB::table('user_activity_log')
                ->insert($log);        

            return view('sample')
                   ->with('songs' , $songs);            
        }

           
        $log = array('user_id' => 0,
                        'activity_info'=> 'Home page browser and Forward to login',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );    

        DB::table('user_activity_log')
                ->insert($log);        

        return view('/auth/login');
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
