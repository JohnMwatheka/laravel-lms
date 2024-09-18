<?php

namespace App\Http\Controllers\Backend;

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





class CourseController extends Controller
{
    //All course method
    public function AllCourse(){

        $id = Auth::user()->id;
        $courses = Course::where('instructor_id',$id)->orderBy('id','desc')->get();
        return view('instructor.courses.all_courses',compact('courses'));
    }
    //End method

    //Method to add Course
    public function AddCourse(){

        $categories = Category::latest()->get();
        return view('instructor.courses.add_course',compact('categories'));

    }//End method


    //method to get subcategories to be displayed on the course creation page
    public function GetSubCategory($category_id){

        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);

    }// End Method


    //Method to store  course details

public function StoreCourse(Request $request){

    $request->validate([
        'video' => 'required|mimes:mp4|max:100000000',
    ]);
    // Handle video
    if($request->file('course_image')){
        $manager = new ImageManager(new Driver());
        $image = $request->file('course_image'); // Assign the uploaded file to $image variable
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $img = $manager->read($image); // Use $image instead of $request->file('image')
        $img = $img->resize(370, 260);

        $img->toJpeg(80)->save(base_path('public/upload/course/thumbnail' . $name_gen));
        $save_url = 'upload/course/thumbnail' . $name_gen; // Add a missing slash in the save URL

        $video = $request->file('video');
        $videoName = time().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('upload/course/video/'),$videoName);
        $save_video = 'upload/course/video/'.$videoName;
    }

    // Store course details
    $course_id = Course::insertGetId([

        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'instructor_id' => Auth::user()->id,
        'course_title' => $request->course_title,
        'course_name' => $request->course_name,
        'course_name_slug' => strtolower(str_replace(' ', '-', $request->course_name)),
        'description' => $request->description,
        'video' => $save_video,

        'label' => $request->label,
        'duration' => $request->duration,
        'resources' => $request->resources,
        'certificate' => $request->certificate,
        'selling_price' => $request->selling_price,
        'discount_price' => $request->discount_price,
        'prerequisite' => $request->prerequisite,

        'bestseller' => $request->bestseller,
        'featured' => $request->featured,
        'highestrated' => $request->highestrated,
        'status' => 1,
        'course_image' => $save_url,
        'created_at' => Carbon::now(),

    ]);

    /// Course Goals Add Form

    $goles = Count($request->course_goals);
    if ($goles != NULL) {
        for ($i=0; $i < $goles; $i++) {
            $gcount = new Course_goal();
            $gcount->course_id = $course_id;
            $gcount->goal_name = $request->course_goals[$i];
            $gcount->save();
        }
    }
    /// End Course Goals Add Form

    $notification = array(
        'message' => 'Course Inserted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.course')->with($notification);

}// End Method

// Method to edit  courses
public function EditCourse($id){

    $course = Course::find($id);
    $goals = Course_goal::where('course_id',$id)->get();
    $categories = Category::latest()->get();
    $subcategories = SubCategory::latest()->get();
    return view('instructor.courses.edit_courses', compact('course','categories','subcategories','goals'));

}//End method

//method to update course
public function UpdateCourse(Request $request){
    $cid = $request->course_id;

    $course = Course::find($cid);

    if (!$course) {
        // Course with the given ID does not exist
        $notification = array(
            'message' => 'Course not found',
            'alert-type' => 'error'
        );
        return redirect()->route('all.course')->with($notification);
    }

    // Update the course
    $course->update([
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'instructor_id' => Auth::user()->id,
        'course_title' => $request->course_title,
        'course_name' => $request->course_name,
        'course_name_slug' => strtolower(str_replace(' ', '-', $request->course_name)),
        'description' => $request->description,
        'label' => $request->label,
        'duration' => $request->duration,
        'resources' => $request->resources,
        'certificate' => $request->certificate,
        'selling_price' => $request->selling_price,
        'discount_price' => $request->discount_price,
        'prerequisite' => $request->prerequisite,
        'bestseller' => $request->bestseller,
        'featured' => $request->featured,
        'highestrated' => $request->highestrated,
    ]);

    $notification = array(
        'message' => 'Course Updated Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.course')->with($notification);
}
//End method

// method to update Course image
public function UpdateCourseImage(Request $request){
    $course_id = $request->id;
    $oldImage = $request->old_img;

    if($request->file('course_image'))
    {
        $manager = new ImageManager(new Driver());
        $image = $request->file('course_image'); // Assign the uploaded file to $image variable
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $img = $manager->read($image); // Use $image instead of $request->file('image')
        $img = $img->resize(370, 260);

        $img->toJpeg(80)->save(base_path('public/upload/course/thumbnail' . $name_gen));
        $save_url = 'upload/course/thumbnail' . $name_gen;
    }
    if (file_exists($oldImage)) {
        unlink($oldImage);
    }
    Course::find($course_id)->update([
        'course_image' => $save_url,
        'updated_at' => Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Course image updated successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


}// End method

// Method to update course video
public function updateCourseVideo(Request $request) {
    $course_id = $request->vid;
    $oldVideo = $request->old_vid;

    $request->validate([
        'video' => 'required|mimes:mp4|max:100000000',
    ], [
        'video.max' => 'The video size should not exceed 100MB.',
    ]);

    if ($request->hasFile('video')) {
        $video = $request->file('video');
        $videoName = time().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('upload/course/video/'), $videoName);
        $save_video = 'upload/course/video/'.$videoName;

        if (file_exists($oldVideo)) {
            unlink($oldVideo);
        }

        Course::find($course_id)->update([
            'video' => $save_video,
            'updated_at' => now(),
        ]);

        $notification = [
            'message' => 'Course video updated successfully',
            'alert-type' => 'success'
        ];
    } else {
        $notification = [
            'message' => 'Failed to update course video',
            'alert-type' => 'error'
        ];
    }

    return redirect()->back()->with($notification);
}
//end method


//Method to update course goal
public function UpdateCourseGoal(Request $request){
    $cid = $request->id;

    if ($request->course_goals == NULL) {
        return redirect()->back();
    }
    else {
        Course_goal::where('course_id',$cid)->delete();
        /// Course Goals Add Form

        $goles = Count($request->course_goals);
            for ($i=0; $i < $goles; $i++) {
                $gcount = new Course_goal();
                $gcount->course_id = $cid;
                $gcount->goal_name = $request->course_goals[$i];
                $gcount->save();
            }
    /// End Course Goals Add Form

    }//end else
    $notification = array(
        'message' => 'Course goals updated successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


}

// End method


// Method to dele course
public function DeleteCourse($id){
    $course = Course::find($id);
    if (!$course) {
        abort(404); // Course not found, return a 404 error
    }

    // Delete course image and video files
    unlink($course->course_image);
    unlink($course->video);

    // Delete course from database
      $course->delete();

    // Delete associated goals data
    Course_goal::where('course_id', $id)->delete();

    $notification = array(
        'message' => 'Course Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}
// End Method


// method to add course lecture
public function AddCourseLecture($id){

    $course = Course::find($id);

    $section = CourseSection::where('course_id', $id)->latest()->get();


    return view('instructor.courses.section.add_course_lecture',compact('course', 'section'));
}
//End method


//Method to add course section
public function AddCourseSection(Request $request){

    $cid = $request->id;

    CourseSection::insert([
        'course_id' => $cid,
        'section_title' => $request->section_title,
    ]);
    $notification = array(
        'message' => 'Course section added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

}
//End method

// method to save lecture sections
public function saveLecture(Request $request){
    try {
        $validatedData = $request->validate([
            'course_id' => 'required|numeric',
            'section_id' => 'required|numeric',
            'lecture_title' => 'required|string|max:255',
            'lecture_url' => 'nullable|string|max:255|url',
            'content' => 'required|string',
        ]);

        $lecture = new CourseLecture();
        $lecture->course_id = $validatedData['course_id'];
        $lecture->section_id = $validatedData['section_id'];
        $lecture->lecture_title = $validatedData['lecture_title'];
        $lecture->url = $validatedData['lecture_url'];
        $lecture->content = $validatedData['content'];
        $lecture->save();

        return response()->json(['success' => 'Lecture saved successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred while saving the lecture'], 500);
    }
}
//End Method


//Method to edit lecture
public function EditLecture($id){
    $clecture = CourseLecture::find($id);
    return view('instructor.courses.lecture.edit_course_lecture', compact('clecture'));
}//End Method




//Method to update course lecture
public function UpdateCourseLecture(Request $request){
    $lid = $request->id;
    CourseLecture::find($lid)->update([
        'lecture_title' => $request->lecture_title,
        'url' => $request->url,
        'content' => $request->content,
    ]);
    $notification = array(
        'message' => 'Course lecture updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}
// End Method


//Method to delete lecture
public function DeleteLecture($id){
    CourseLecture::find($id)->delete();

    $notification = array(
        'message' => 'Course lecture deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}
//End Method

//Method to delete entire section
public function DeleteSection($id){
    $section = CourseSection::find($id);

    //delete  all related lectures
    $section->lectures()->delete();

    //Delete the section
    $section->delete();

    $notification = array(
        'message' => 'Course section deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}
//End method


}
