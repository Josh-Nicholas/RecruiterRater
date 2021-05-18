<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
//use App\Models\UserLog;

/*
 * Global helpers file with misc functions.
 */
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

/*
 *
 * logUserAccess
 * Get current user's `name` and `id` and
 * log as debug data. Additional text can be added too.
 *
 * ------------------------------------------------------------------------
 */
if (!function_exists('logUserAccess')) {

    /**
     * Format a string to Slug.
     */
    function logUserAccess($text = "")
    {
        $auth_text = "";

        if (\Auth::check()) {
            $auth_text = "User:".\Auth::user()->name." (ID:".\Auth::user()->id.")";
        }

        \Log::debug(label_case($text)." | $auth_text");
    }
}


/*
 * Global helpers file with misc functions.
 */
if (!function_exists('app_salt')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_salt()
    {
        return 'af8ccfbdce94dc74e32f0aa26ae564844ab00f151e93d66864542576251f49f2';
    }
}


/*
 * User logs after logged in
 */
function user_logs($page_name)
{
    if (Auth::check()) {

        // $user_log = new UserLog;
        // $user_log->user_id = Auth::user()->id;
        // $user_log->page_name = $page_name;
        // $user_log->save();

        // return $user_log;

    } else {

        return "Please login.";
    }
}