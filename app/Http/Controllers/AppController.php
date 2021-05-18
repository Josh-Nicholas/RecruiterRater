<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Review;

use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fReviews = DB::table('reviews')
                        ->join('users', 'users.id', '=' ,'reviews.user_id')
                        ->select('reviews.*', 'users.name', 'users.surname', 'users.avatar')
                        ->orderBy('created_at','desc')
                        ->take(5)
                        ->get();
        $sReviews = DB::table('reviews')
                        ->join('users', 'users.id', '=' ,'reviews.user_id')
                        ->select('reviews.*', 'users.name', 'users.surname', 'users.avatar')
                        ->orderBy('created_at','desc')
                        ->skip(5)
                        ->take(5)
                        ->get();

        return view('pages.home', 
            [
                'tab1' => 'home',
                'fReviews' => $fReviews,
                'sReviews' => $sReviews
            ]
        );
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

    public function aboutus()
    {
        return view('pages.aboutus', ['tab1' => 'aboutus']);
    }
}
