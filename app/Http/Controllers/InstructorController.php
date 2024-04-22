<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class InstructorController extends Controller
{
    //The basic method for accessing the instructo dashboard
    public function InstructorDashboard(){
        return view('instructor.index');
    }
    //End Method




     //Method to allow only logged in Instructor to log out and redirect to the Instructor login page
     public function InstructorLogout(Request $request)
     {
         Auth::guard('web')->logout();
 
         $request->session()->invalidate();
 
         $request->session()->regenerateToken();
 
         return redirect('instructor/login');
     }
     //end method






     //Method to allow Instructor log in via Instructor page
    public function InstructorLogin()
    {
        return view ('instructor.instructor_login');
    } 
    //end method



     // Method to collect and display user data
     public function InstructorProfile()
     {
         $id = Auth::user()->id;
         $profileData = User::find($id);
         return view('instructor.instructor_profile_view', compact('profileData'));
     }
     //end method
 


     //Method to show images dat for the instructor when the instructor clicks the profile link
     public function InstructorProfileStore(Request $request){

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
           @unlink(public_path('upload/instructor_images/'.$data->photo));
           $file->move(public_path('upload/instructor_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();
        $notification = array (
            'message' => 'Instructor profile updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    //End method



    

    //Method to redirect instructor to change password page
    public function InstructorChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('instructor.instructor_change_password', compact('profileData'));

    }
    //End method




    //Method to allow Instructor to change their password
    public function InstructorPasswordUpdate(Request $request){
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
