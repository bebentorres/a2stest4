<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JobseekerProfile;

use Illuminate\Http\Request;

class JobseekerProfileController extends Controller
{
    public function create(){
        return view('User.Jobseeker.editprofile');
    }

    // public function store()
    // {
    //     $user = User::create([
    //         'name' => request('name'),
    //         'email' => request('email'),
    //         'password' => Hash::make(request('password')),
    //         'role' => request('role'),
    //     ]);
    //     JobseekerProfile::create([
    //         'user_id' => $user->id,
    //     ]);
    //     return redirect()->to('login');

    // }

    public function editfield(Request $request){
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'user_address' => 'required',
            'user_bday' => 'required',
            'user_num' => 'required',
        ]);
        $user_id = auth()->user()->id;
        JobseekerProfile::where('user_id', $user_id)->update([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'user_address' => request('user_address'),
            'user_bday' => request('user_bday'),
            'user_num' => request('user_num'),
            'user_bio' => request('user_bio'),
            'user_skills' => request('user_skills'),
        ]);
        return redirect()->back()->with('message', 'Updated Successfully');
    }
}
