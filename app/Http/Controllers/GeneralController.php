<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    public function index()
    {
        $courses = DB::select('select * from course');
        return view('course.index',compact('courses'));
    }
    public function studentautocomplete(Request $request)
    {

        $data = $request->all();
        $lecture_id = ($request->has('lecture_id')) ? $data['lecture_id'] : "";

        $data = DB::select('select * from student join course on student.std_id = course.std_id join lecture where lecture.course_id = course.course_id');
        return response()->json($data);
    }


    public function getLecturesbyCourseId(Request $request){
       
//return $lectures;
    }

    public function fetchlecture(Request $request){
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        $lectures = DB::select('select * from lecture where course_id  = :course_id ', ['course_id' => $course_id]);
        $students = DB::select('select * from std_course left join student on std_course.std_id = student.std_id where course_id  = :course_id ', ['course_id' => $course_id]);

        return response()->json(["lectures"=>$lectures,"students"=>$students]);
    }

    public function fetchstudent(Request $request){
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        $lectures = DB::select('select * from lecture where course_id  = :course_id ', ['course_id' => $course_id]);


        return response()->json($lectures);
    }
}