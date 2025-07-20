<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userRegistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function userProfileView()
  {
    return view('userProfile.MyProfile');
  }

  public function ChangeUserPassword(Request $request){
    // Validate input
     $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|max:20',
        'confirm_password' => 'required|same:new_password',
    ], [
         'new_password.confirmed' => 'The password confirmation does not match.',
        'confirm_password.same' => 'The confirm password must match the password.',
        'new_password.min' => 'Password is too short (minimum 5 characters)',
        'new_password.max' => 'Password is too long (maximum 20 characters)',
    ]);

     $user = Auth::user(); // get currently authenticated user

    if (!Hash::check($request->current_password, $user->password)) {
         return back()->with('message_error','Current password is incorrect.');
        
    }

    if (Hash::check($request->new_password, $user->password)) {
         return back()->with('message_error','New password cannot be the same as the old password.');
       
    }

     ;
    $data = userRegistration::find($user->id);
    $data->password = Hash::make($request->new_password);
    $data->save();
      return back()->with('success','Password successfully updated Thank you.');
}
}
