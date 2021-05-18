@extends('app')

@section('title', 'Recruiter | Leave-Review')

@section('additional_css')

@stop('additional_css')

@section('content')
   <!-- BEGIN: Content-->
   <div class="header-fix"></div>

    <section id="contact" class="account">

        <img class="login-detail-left" src="{{ asset('assets/images/login-detail-left.png') }}">
        <img class="login-detail-right" src="{{ asset('assets/images/login-detail-right.png') }}">

        <div class="background-wrapper">
            <h2 class="text-center">Leave a <strong>review</strong></h2>
            <div class="container h-100 review-box">

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ url('/leave-review') }}" method="post" id="form-leave-review">
                    @csrf
                    <div class="review-question-block">
                        <h5 class="review-question">Are you rating a Recruitment Firm or Company internal recruitment team?</h5>

                        <div class="d-flex flex-column flex-md-row justify-content-between">
                            <input type="radio" name="team" id="recruiter" value="recruiter" checked>
                            <label for="recruiter" class="colored-question-button">Recruiter</label>

                            <input type="radio" name="team" id="internalTeam" value="company">
                            <label for="internalTeam" class="colored-question-button">Company internal team</label>
                        </div>
                    </div>

                    <div class="review-question-block input-block">
                        <label for="firm">Name of Recruitment Firm:</label>
                        <input type="text" name="firm" id="firm" placeholder="Start typing and pre-populated menu pops up">
                    </div>

                    <div class="review-question-block input-block">
                        <label for="employer">Name of hiring employer:</label>
                        <input type="text" name="employer" id="employer" placeholder="Start typing and pre-populated menu pops up">
                    </div>

                    <div class="review-question-block">

                        <h5 class="review-question">Where you successful or unsuccessful?</h5>
                        <div class="d-flex flex-column flex-md-row justify-content-between">
                            <input type="radio" name="successful" id="unsuccessful" value="unsuccessful">
                            <label for="unsuccessful" class="colored-question-button">Unsuccessful</label>

                            <input type="radio" name="successful" id="successful" value="successful" checked>
                            <label for="successful" class="colored-question-button">Successful</label>
                        </div>
                    </div>

                    <div class="review-question-block input-block">
                        <label for="recruitment">First name of recruitment contact?</label>
                        <input type="text" name="recruitment" id="recruitment" placeholder="Free text box">
                    </div>

                    <div class="review-question-block input-block">
                        <label for="regarding_data">Date of contact regarding this role?</label>
                        <input type="date" name="regarding_data" id="regarding_data">
                    </div>

                    <div class="review-question-block input-block">
                        <h5 class="review-question">Overall experience with this Recruiter?</h5>
                        <div class="rating">
                            <label>
                                <input type="radio" name="experience_stars" value="1" />
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="experience_stars" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="experience_stars" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="experience_stars" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="experience_stars" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                        </div>
                    </div>

                    <div class="review-question-block input-block">
                        <label for="recommend_emoj">Would you recommend this Recruiter to your family, friends and colleagues?</label>
                        <p class="pl-3">Emoji face scale</p>

                        <div class="recommented-emoj">
                            <div class="w-100 d-flex justify-content-between">
                                <span class=""><img src="{{ asset('assets/images/0.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/1.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/2.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/3.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/4.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/5.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/6.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/7.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/8.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/9.png') }}"></span>
                                <span class=""><img src="{{ asset('assets/images/10.png') }}"></span>
                            </div>
                            <input type="range" name="recommend_emoj" id="recommend_emoj" min="0" max="10" value="7" >
                            <div class="w-100 d-flex justify-content-between">
                                <span class="likely-span">Not likely</span>
                                <span class="likely-span">Very likely</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-question-block input-block">
                        <label for="review_title">The title of review</label>
                        <input type="text" name="review_title" id="review_title" placeholder="The title of your review">
                    </div>

                    <div class="review-question-block input-block mb-5">
                        <label for="review_content">Write your review</label>
                        <textarea type="text" name="review_content" id="review_content" placeholder="This is where you write your review. Explain what happened, and leave out offensive 
                        words. Keep your feedback honest, helpful, and constructive. "></textarea>
                    </div>

                    <div class="review-question-block">
                        <h5 class="review-question mb-5">Could you share more about your experience? <u>optional</u></h5>
                        <h5 class="review-question">Candidate Management</h5>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">Quality of the communication with your Recruiter</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="communication_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="communication_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="communication_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="communication_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="communication_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">Quality of the feedback provided</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="feedback_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="feedback_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="feedback_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="feedback_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="feedback_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="review-question-block">
                        <h5 class="review-question">Candidate Service</h5>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">Efficiency of the process</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="efficiency_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="efficiency_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="efficiency_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="efficiency_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="efficiency_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">Quality of information and support provided</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="information_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="information_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="information_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="information_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="information_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="review-question-block">
                        <h5 class="review-question">Candidate Care</h5>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">How valued did you feel throughout the process?</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="throughout_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="throughout_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="throughout_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="throughout_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="throughout_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question">How well did you feel you were treated through the process?</h5>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="treated_stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="treated_stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="treated_stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="treated_stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="treated_stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="review-question-block">
                        <h5 class="review-question">Recruiter added value</h5>
                        
                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question pt-2">In-depth market knowledge</h5>

                            <div class="d-flex justify-content-between added-value-buttons">
                                <input type="radio" name="added_value" id="yes" value="yes">
                                <label for="yes" class="colored-question-button">Yes</label>

                                <input type="radio" name="added_value" id="no" value="no">
                                <label for="no" class="colored-question-button">No</label>

                                <input type="radio" name="added_value" id="notSure" value="notsure">
                                <label for="notSure" class="colored-question-button">Not sure</label>
                            </div>
                        </div>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question pt-2">Detailed interview preparation</h5>

                            <div class="d-flex justify-content-between added-value-buttons">
                                <input type="radio" name="interview_preparation" id="interview_yes" value="yes">
                                <label for="interview_yes" class="colored-question-button">Yes</label>

                                <input type="radio" name="interview_preparation" id="interview_no" value="no">
                                <label for="interview_no" class="colored-question-button">No</label>

                                <input type="radio" name="interview_preparation" id="interview_notSure" value="notsure">
                                <label for="interview_notSure" class="colored-question-button">Not sure</label>
                            </div>

                        </div>

                        <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">
                            <h5 class="review-question pt-2">Supporting you on how things could have gone better</h5>

                            <div class="d-flex justify-content-between added-value-buttons">
                                <input type="radio" name="better_support" id="support_yes" value="yes">
                                <label for="support_yes" class="colored-question-button">Yes</label>

                                <input type="radio" name="better_support" id="support_no" value="no">
                                <label for="support_no" class="colored-question-button">No</label>

                                <input type="radio" name="better_support" id="support_notSure" value="notsure">
                                <label for="support_notSure" class="colored-question-button">Not sure</label>
                            </div>
                        </div>
                    </div>

                    <div class="review-question-block input-block mb-5">
                        <label for="review_rating">Review rating</label>
                        <textarea type="text" name="review_rating" id="review_rating" placeholder="Review rating"></textarea>
                    </div>

                    <input type="submit" value="Submit rating" class="submit-rating-btn">
                </form>
            </div>
    </section>
    <!-- END: Content-->
@endsection

@section('additional_script')


@endsection
