<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EmployerProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class EmployerProfileController extends Controller
{
    public function store()
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role' => request('role'),
        ]);
        EmployerProfile::create([
            'user_id' => $user->id,
            'company_name' => request('company_name'),
        ]);
        // return $user;
        // $user->save();
        return redirect()->to('login');

    }
    public function create(){
        return view('User.Employer.editprofile');
    }

    public function editfield(Request $request){
        $this->validate($request,[
            'company_num' => 'required',
            'company_address' => 'required',
            'company_industry' => 'required',
            'company_benefits' => 'required',
            'company_hours' => 'required',
            'company_description' => 'required',
        ]);
        $user_id = auth()->user()->id;
        EmployerProfile::where('user_id', $user_id)->update([
            'company_name' => request('company_name'),
            'company_num' => request('company_num'),
            'company_address' => request('company_address'),
            'company_industry' => request('company_industry'),
            'company_benefits' => request('company_benefits'),
            'company_hours' => request('company_hours'),
            'company_description' => request('company_description'),
        ]);
        return redirect()->back()->with('message', 'Updated Successfully');
    }

    // public function index(){
    //     $employerprofile = EmployerProfile::all();
    //     return view('User.Employer.dashboard', compact('employerprofile'));
    // }

    public function postjobs(){
        return view('User.Employer.postjob');
    }
}
