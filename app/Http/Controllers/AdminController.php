<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// Models
use App\Models\Admin;
use App\Models\Payment;
use App\Models\MembershipSetting;

class AdminController extends Controller
{
    //
    public function index() {
        return Session::get('admin') ? view('admin.dashboard')->with(['route' => 'dashboard']) : redirect()->route('admin.login');
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $admin = Admin::where('email', $request->email)->first();
            if(!$admin) {
                return response()->json(['status' => 400, 'success' => false, 'message' => 'Email is not matched!']);
            }
            if(!Hash::check($request->password, $admin->password)) {
                return response()->json(['status' => 400, 'success' => false, 'message' => 'Password is not matched!']);
            }
            Session::put('admin', $admin);
            return response()->json(['status' => 200, 'success' => true, 'message' => 'Successfuly logged in!']);
        } else {
            return Session::get('admin') ? redirect()->route('admin') : view('admin.login');
        }
    }

    public function logout() {
        Session::forget('admin');
        if(!Session::has('admin')) {
            return redirect()->route('admin.login');
        }
    }

    public function paymentHistory() {
        $payments = Payment::all();
        return view('admin.payment_history')->with(['route' => 'payment-history', 'payments' => $payments]);
    }

    public function membershipSettings(Request $request) {
        $memberships = MembershipSetting::all();
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'p_android1' => 'required|numeric|min:10|max:10000',
                'p_android3' => 'required|numeric|min:10|max:10000',
                'p_android6' => 'required|numeric|min:10|max:10000',
                'p_android12' => 'required|numeric|min:10|max:10000',
                'p_ios1' => 'required|numeric|min:10|max:10000',
                'p_ios3' => 'required|numeric|min:10|max:10000',
                'p_ios6' => 'required|numeric|min:10|max:10000',
                'p_ios12' => 'required|numeric|min:10|max:10000',
                'p_android_ios1' => 'required|numeric|min:10|max:10000',
                'p_android_ios3' => 'required|numeric|min:10|max:10000',
                'p_android_ios6' => 'required|numeric|min:10|max:10000',
                'p_android_ios12' => 'required|numeric|min:10|max:10000',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'message' => 'Invalid params.']);
            }
            foreach($memberships as $membership) {
                if($membership->platform == 'Android') {
                    MembershipSetting::whereId($membership->id)
                                    ->update([
                                        'price1' => $request->p_android1,
                                        'price3' => $request->p_android3,
                                        'price6' => $request->p_android6,
                                        'price12' => $request->p_android12
                                    ]);
                }
                if($membership->platform == 'Apple iOS') {
                    MembershipSetting::whereId($membership->id)
                                    ->update([
                                        'price1' => $request->p_ios1,
                                        'price3' => $request->p_ios3,
                                        'price6' => $request->p_ios6,
                                        'price12' => $request->p_ios12,
                                    ]);
                }
                if($membership->platform == 'Android & iOS') {
                    MembershipSetting::whereId($membership->id)
                                    ->update([
                                        'price1' => $request->p_android_ios1,
                                        'price3' => $request->p_android_ios3,
                                        'price6' => $request->p_android_ios6,
                                        'price12' => $request->p_android_ios12,
                                    ]);
                }
            }
            return response()->json(['status' => 200, 'message' => "Successfully updated."]);
        } else {
            $memberships = MembershipSetting::all();
            return view('admin.membership_settings')->with(['route' => 'membership-settings', 'memberships' => $memberships]);
        }
    }
}
