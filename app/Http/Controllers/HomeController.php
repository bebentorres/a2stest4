<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'employer') {
            // $user = Auth::user()->id;
            // $emprofile = DB::table('employer_profiles')
            // ->where('user_id', '=', $user)
            // ->get();
            // return view('dashboard.employer')->with('emprofile', $emprofile);
            return view('User.Employer.dashboard');
        }
        elseif (Auth::check() && Auth::user()->role == 'jobseeker') {
            return view('User.Jobseeker.dashboard');
        }
        else {
            return view('User.Admin.dashboard');
        }
    }
}
