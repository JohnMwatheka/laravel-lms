<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\CourseSection;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class QuestionController extends Controller
{
   //Method to post user question to the database
    public function UserQuestion(Request $request)
    {
        $course_id = $request->course_id;
        $instructor_id = $request->instructor_id;

        Question::insert([
            'course_id' => $course_id,
            'instructor_id' => $instructor_id,
            'question' => $request->question,
            'subject' => $request->subject,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), // Added updated_at field
        ]);

        $notification = array(
            'message' => 'Question added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    //End of UserQuestion method


    //Method to show questions on instructor dashboard
    public function InstructorAllQuestion()
    {
        $id = Auth::user()->id;
        $question = Question::where('instructor_id', $id)->where('parent_id', null)->orderBy('id','desc')->get();
        return view('instructor.question.all_question', compact('question'));
    }
    //End of InstructorAllQuestion method


    //Method to show question details in instructor controller
    public function QuestionDetails($id){

        $question = Question::find($id);
        $reply = Question::where('parent_id', $id)->orderBy('id','asc') ->get();
        return view('instructor.question.question_details', compact('question', 'reply'));

    }
    //End method

    //Method to allow instructors to reply messages
    public function InstructorReply(Request $request){

        $que_id = $request->qid;
        $user_id = $request->user_id;
        $course_id = $request->course_id;
        $instructor_id = $request->instructor_id;

        Question::insert([

            'course_id' => $course_id,
            'user_id'  => $user_id,
            'instructor_id' => $instructor_id,
            'parent_id' => $que_id,
            'question' => $request->question,
            'created_at' => Carbon::now(),

        ]);


        $notification = array(
            'message' => 'Reply send Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
    // End Method




}
