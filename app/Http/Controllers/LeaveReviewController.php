<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\QueryException;
use App\Models\User;
use App\Models\Review;

class LeaveReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.leave-review', ['tab1' => 'leave-review']);
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
        $team = $request->team;
        $firm = $request->firm;
        $employer = $request->employer;
        $successful = $request->successful;
        $recruitment = $request->recruitment;
        $regarding_data = $request->regarding_data;
        $experience_stars = $request->experience_stars;
        $recommend_emoj = $request->recommend_emoj;
        $review_title = $request->review_title;
        $review_content = $request->review_content;

        $communication_stars = $request->communication_stars;
        $feedback_stars = $request->feedback_stars;
        $efficiency_stars = $request->efficiency_stars;
        $information_stars = $request->information_stars;
        $throughout_stars = $request->throughout_stars;
        $treated_stars = $request->treated_stars;

        $added_value = $request->added_value;
        $interview_preparation = $request->interview_preparation;
        $better_support = $request->better_support;
        $review_rating = $request->review_rating;

        $request->validate([
            'team' => 'required|in:recruiter,company',
            'firm' => 'required|string|min:5|max:191',
            'employer' => 'required|string|min:5|max:191',
            'successful' => 'required|in:unsuccessful,successful',
            'recruitment' => 'required|string|min:5|max:191',
            'regarding_data' => 'required',
            'experience_stars' => 'required|in:1,2,3,4,5',
            'recommend_emoj' => 'required|in:0,1,2,3,4,5,6,7,8,9,10',
            'review_title' => 'required|string|min:5|max:191',
            'review_content' => 'required|string|min:5|max:1000',

            'communication_stars' => 'required|in:1,2,3,4,5',
            'feedback_stars' => 'required|in:1,2,3,4,5',
            'efficiency_stars' => 'required|in:1,2,3,4,5',
            'information_stars' => 'required|in:1,2,3,4,5',
            'throughout_stars' => 'required|in:1,2,3,4,5',
            'treated_stars' => 'required|in:1,2,3,4,5',

            'added_value' => 'required|in:yes,no,notsure',
            'interview_preparation' => 'required|in:yes,no,notsure',
            'better_support' => 'required|in:yes,no,notsure',
            'review_rating' => 'required|string|min:5|max:1000',
        ]);

        $review = Review::create([
            'user_id' => Auth::user()->id,
            'team' => $request->team,
            'firm' => $request->firm,
            'employer' => $request->employer,
            'successful' => $request->successful,
            'recruitment' => $request->recruitment,
            'regarding_data' => $request->regarding_data,
            'experience_stars' => $request->experience_stars,
            'recommend_emoj' => $request->recommend_emoj,
            'review_title' => $request->review_title,
            'review_content' => $request->review_content,

            'communication_stars' => $request->communication_stars,
            'feedback_stars' => $request->feedback_stars,
            'efficiency_stars' => $request->efficiency_stars,
            'information_stars' => $request->information_stars,
            'throughout_stars' => $request->throughout_stars,
            'treated_stars' => $request->treated_stars,

            'added_value' => $request->added_value,
            'interview_preparation' => $request->interview_preparation,
            'better_support' => $request->better_support,
            'review_rating' => $request->review_rating,
        ]);

        $review_state = $review->save();
        Session::flash('success', 'Successfully stored your review.');

        return redirect('/leave-review');
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
