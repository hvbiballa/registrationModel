<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    
    public function index(){

        //panggil semua data dlm table post yg ade relation dengn user
        $course = Course::with('user')->get();
        

        // return view('post.manage', compact('posts'));

    }

    public function createCourse(Course $courseApp)
    {
        $courses = Course::All();
        return view('manageMCourse.addCourse', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function storeCourse(Request $request)
    {
        // $request->merge([
        //     'u_id' => auth()->user()->id
        // ]);
        Course:: create($request->all());
        return redirect()->route('manageMCourse.indexStaff');

    }

    

    //show function
    

    public function showCourse(Course $courseApp)
    {
        return view('manageMCourse.viewCourse');
    }

    //edit function
    public function editCourse(Course $courseApp)
    {
        return view('manageMCourse.editCourse');
    }

    //delete function
    public function destroyCourse()
    {
    
    }
   
    
}
