<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use App\Models\User;
use App\Models\EmailSetting;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_tab = session('sub_tab');

        return view('profile.setting', ['sub_tab' => $sub_tab, 'tab1' => 'profile']);
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
        $user_delete = User::where('id', $id)->delete();
                            // ->update(array('delete_flag' => 1));
        Auth::logout();

        Session::flash('success', 'Your account was deleted successfully.');

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * UserInformation function in setting page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function UserInformation(Request $request)
    {
        $username = trim($request->username);
		$email = trim($request->email);

        $request->validate([
            'username' => 'required|string|min:3|max:191',
            //'email' => 'required|string|email|min:5|max:191|unique:users',
        ]);

        if (!is_null($request->input_user_photo)) {

            $request->validate([
                'input_user_photo' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:5000',
            ]);

            $imageName = time().'.'.$request->input_user_photo->extension();
            $request->input_user_photo->move(public_path('assets/users'), $imageName);
    
            try {
                $this->deleteOldImage();
                $avatar_update = User::where('id', Auth::user()->id)
                                        ->update(array('avatar' => 'assets/users/'.$imageName));
            } catch (QueryException $e) {
    
                $avatar_update = -1;
            }
    
            if ($avatar_update == -1){
                Session::flash('error', 'Not correct image type. Please contact administrator.');
            } else {
                Session::flash('success', 'Updated your avatar image successfully.');
            }
        }

        try {
            $user_update = DB::table('users')
                                ->where('id', Auth::user()->id)
							    ->update(array('username' => $username, 'email' => $email));
        } catch (QueryException $e) {

            $user_update = -1;
        }
        
        if ($user_update == 0) {
            Session::flash('warning', 'No update in your profile information.');
        } else if($user_update == 1) {
            Session::flash('success', 'Updated your profile information successfully.');
        } else {
            Session::flash('error', 'Not correct information type. Please contact administrator.');
        }
        
        return redirect('/setting')->with('sub_tab', 'information');
    }

    /**
     * EmailSetting function in setting page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function EmailSetting(Request $request)
    {
        $reviews = $request->reviews;
        $companies = $request->companies;
        $updates = $request->updates;
        $insparation = $request->insparation;
        $new_features = $request->new_features;
        $support = $request->support;

        if (is_null(Auth::user()->email_setting)) {

            $email_setting = EmailSetting::create([
                'user_id' => Auth::user()->id,
                'reviews' => $request->reviews ? 1 : 0,
                'companies' => $request->companies ? 1 : 0,
                'updates' => $request->updates ? 1 : 0,
                'insparation' => $request->insparation ? 1 : 0,
                'new_features' => $request->new_features ? 1 : 0,
                'support' => $request->support ? 1 : 0,
            ]);

            $setting_state = $email_setting->save();
            Session::flash('success', 'Successfully set your email setting.');

        } else {

            try {
                $eSetting_update = DB::table('email_settings')
                                        ->where('user_id', Auth::user()->id)
                                        ->update(array('reviews' => $request->reviews ? 1 : 0,
                                                        'companies' => $request->companies ? 1 : 0,
                                                        'updates' => $request->updates ? 1 : 0,
                                                        'insparation' => $request->insparation ? 1 : 0,
                                                        'new_features' => $request->new_features ? 1 : 0,
                                                        'support' => $request->support ? 1 : 0));
            } catch (QueryException $e) {
    
                $eSetting_update = -1;
            }
            
            if ($eSetting_update == 0) {
                Session::flash('warning', 'No update in your email setting.');

            } else if($eSetting_update == 1) {
                
                Session::flash('success', 'Successfully udpated your email setting.');
            } else {
                Session::flash('error', 'Something went wrong in server side. Please contact administrator.');
            }

        }
        return redirect('/setting')->with('sub_tab', 'email_setting');
    }


    /**
     * deleteOldImage function in setting page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function deleteOldImage()
    {
        if (!is_null(auth()->user()->avatar)) {
            //Storage::delete(public_path(auth()->user()->avatar));
            File::delete(public_path(auth()->user()->avatar));
        }
    }
}
