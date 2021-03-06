<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $users = DB::table('users')
        ->orderBy('id', 'desc')
        ->get();
        return view('backend.pages.dashboard')->with('users', $users);
    }

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'date_of_birth' => 'required',
            'address' => 'required',
            'mobile' => ['required'],
            'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'gender' => 'required',
            'reg_type' => 'required|not_in:0',
            'designation' => 'required_if:reg_type,teacher',
            'student_id'=> 'required_if:reg_type,student',
            'student_session'=> 'required_if:reg_type,student',
            'student_year'=> 'required_if:reg_type,student',
            'student_semester'=> 'required_if:reg_type,student',
        ]);
        if($request->hasFile('profile_picture')){
            $name = $request->file('profile_picture')->getClientOriginalName();
            $filename = time().'_'.$name;
            $request->file('profile_picture')->storeAs('public/profile_pictures',  $filename);
        }


        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'profile_picture' => $filename,
            'gender' => $request->gender,
            'reg_type' => $request->reg_type,
            'designation' => $request->designation,
            'student_id' => $request->student_id,
            'student_session' => $request->student_session,
            'student_year'=> $request->student_year,
            'student_semester'=> $request->student_semester,
            'approval' => false,
        ]);
          

        event(new Registered($user));

        Auth::login($user);
        // $users = $request->all();
        return redirect(RouteServiceProvider::HOME);
    }
}
