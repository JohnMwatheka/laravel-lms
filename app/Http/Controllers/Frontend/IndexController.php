<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Intervention\Image\ImageManager;
use App\Models\Course;
use App\Models\CourseSection;
use App\Models\CourseLecture;
use App\Models\Course_goal;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;
use App\Models\User;
class IndexController extends Controller
{
    //Method to display course details
    public function CourseDetails($id,$slug){

        $course = Course::find($id);
        $goals = Course_goal::where('course_id',$id)->orderBy('id','DESC')->get();

        $ins_id = $course->instructor_id;
        $instructorCourses = Course::where('instructor_id',$ins_id)->orderBy('id','DESC')->get();

        $categories = Category::latest()->get();

        $cat_id = $course->category_id;
        $relatedCourses = Course::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();


        return view('frontend.course.course_details', compact('course','goals','instructorCourses','categories', 'relatedCourses'));
    }
    //End Method

    //Method to redirect to course grid
    public function CategoryCourse($id, $slug){
        $courses = Course::where('category_id',$id)->where('status','1')->get();

        $category = Category::where('id',$id)->first();

        $categories = Category::latest()->get();
        return view('frontend.category.category_all',compact('courses', 'category','categories'));
    }
    //End method
//Method to redirect to course grid
public function SubCategoryCourse($id, $slug){
    $courses = Course::where('subcategory_id',$id)->where('status','1')->get();

    $subcategory = SubCategory::where('id',$id)->first();

    $categories = Category::latest()->get();
    return view('frontend.category.subcategory_all',compact('courses', 'subcategory','categories'));
}
//End method

//Method for the instructo details
public function InstructorDetails($id){
    $instructor = User::find($id);
    $courses = Course::where('instructor_id',$id)->get();
    return view('frontend.instructor.instructor_details',compact('instructor','courses'));
}
//End method


}
