<?php

namespace App\Http\Controllers\userAuthentication;

use App\Http\Controllers\Controller;
use App\Models\userRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userAuthController extends Controller
{
    public function index(){
        return view('userAuthentication.login');
    }

    public function register(){
        return view('userAuthentication.sign-up');
    }

    public function registerUSer(Request $request){

         $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'email'=>'required',
             
            'staff_id'=>'required',
            'phone'=>'required',
            'password' => 'required|string|min:8',
           'confirm_password' => 'required|same:password', // 👈 This compares the two
        ] ,[
            'password.confirmed' => 'The password confirmation does not match.',
            'confirm_password.same' => 'The confirm password must match the password.',
        ]);
         if(userRegistration::where('staff_id',$request->staff_id)->get()->count() > 0){

            return back()->with('message_error','User already exist');
            }else{
        $data = new userRegistration();

        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->staff_id = $request->staff_id;
        $data->password = Hash::make($request->password);
        $data->save();
     
         // Authenticate the user
        Auth::login($data);
        

        // Redirect to dashboard
        return redirect()->route('userDashboard.dashboard')->with('success', 'Registration successful! Welcome ' . $data->firstname .'.');

    }
}

    public function getUserDashboardView(){
        return view('userDashboard.dashboard');
    }

    public function login(Request $request){
        $request->validate([
         'email'=>'required',
         
         'password'=>'required',
         
        ]);
        // Find user by email
        $data = userRegistration::where('email', $request->email)->first();

        // Check if user exists and password matches
        if ($data && Hash::check($request->password, $data->password)) {
            Auth::login($data); // Logs in the user
            return redirect()->route('userDashboard.dashboard',['data'=>$data])->with('message', 'Login successful');
        }

         
          else{
        return back()->with('message_error','User not found or Username and password do not match');
    }

    }

   public function logout(Request $request)
{
    Auth::logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect()->route('userAuthentication.login')->with('message', 'You have been logged out successfully.');
}
}
