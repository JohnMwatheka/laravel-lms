<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function Index(){
         return view('frontend.index');
    }
    //End method


    //mMethod to allow user to update their profile
    public function UserProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('frontend.dashboard.edit_profile', compact('profileData'));

    }
    //End Method



    //Method to allow user to update their profile
    public function UserProfileUpdate(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           $filename = date('YmdHi').$file->getClientOriginalName();
           @unlink(public_path('upload/user_images/'.$data->photo));
           $file->move(public_path('upload/user_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();
        $notification = array (
            'message' => 'User profile updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }// End method



    //Method to allow only logged in users to log out and redirect tyo the user login page
    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //end method





    //Method to redirect to change password page
    public function UserChangePassword(){
        return view('frontend.dashboard.change_password');
    }
    //End method




    //Method to allow users to change their password
    public function UserPasswordUpdate(Request $request){
        ///validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);


        if (!Hash::check($request->old_password, auth::user()->password)){
            
            $notification = array (
                'message' => 'Old Password Does not match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }



        // Update the password by inserting it to the database
        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array (
            'message' => 'Password changed successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
    //End method

}

