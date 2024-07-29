<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
 use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Method to  redirect to the general dashboard for admin
    public function AdminDashboard(){
        return view('admin.index');
    }
    //end method


    //Method to allow only logged in admin to log out and redirect tyo the admin login page
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }
    //end method


    //Method to allow admin log in via admin page
    public function AdminLogin()
    {
        return view ('admin.admin_login');
    }
    //end method





    // Method to collect and display user data
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    }
    //end method






    public function AdminProfileStore(Request $request){

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
           @unlink(public_path('upload/admin_images/'.$data->photo));
           $file->move(public_path('upload/admin_images'),$filename);
           $data['photo'] = $filename;
        }

        $data->save();
        $notification = array (
            'message' => 'Admin profile updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    //End method



    //Method to redirect show admin to change password page
    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));

    }
    //End method



    //Method to allow admin to change their password
    public function AdminPasswordUpdate(Request $request){
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



    //Become instructor method
    public function BecomeInstructor(){
        return view('frontend.instructor.reg_instructor');

    }
    //End method


    //Method to register new
    public function InstructorRegister(Request $request){

        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required', 'string','unique:users'],
        ]);

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' =>  Hash::make($request->password),
            'role' => 'instructor',
            'status' => '0',
        ]);

        $notification = array(
            'message' => 'Instructor Registed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('instructor.login')->with($notification);

    }// End Method


    //Method for all instructor
    public function AllInstructor(){

        $allinstructor = User::where('role','instructor')->latest()->get();
        return view('admin.backend.instructor.all_instructor', compact('allinstructor'));

    }
    //End method


    //Method to update user status
    public function UpdateUserStatus(Request $request){
        $userId = $request->input('user_id');
        $isChecked = $request->input('is_checked',0);

        $user = User::find( $userId );
        if ($user) {
            $user->status = $isChecked;
            $user->save();
        }

        return response()->json(['message' =>'User Status updated successfully']);

    }
      // Method to show all courses on admin page.
    public function AdminAllCourse(){

        $course = Course::latest()->get();
        return view('admin.backend.courses.all_course',compact('course'));

    }
    //End Method

    // Method to update course status
    //Method to update user status
    public function UpdateCourseStatus(Request $request){
        $courseId = $request->input('course_id');
        $isChecked = $request->input('is_checked',0);

        $course = Course::find( $courseId );
        if ($course) {
            $course->status = $isChecked;
            $course->save();
        }

        return response()->json(['message' =>'Course Status updated successfully']);

    }
    //End method

    //Method to get all course details on admin dashboard
    public function AdminCourseDetails($id){

        $course = Course::find($id);
        return view('admin.backend.courses.course_details', compact('course'));
    }
    //End method
}
