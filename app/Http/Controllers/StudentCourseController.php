<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::select(' SELECT student.*, course.*' .
'FROM std_course
JOIN student
  ON student.std_id = std_course.std_id
JOIN course
  ON course.course_id = std_course.course_id;');
        return view('studentcourse.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = collect(DB::select('select * from course'))->pluck('title', 'course_id')->toArray();
        $students = collect(DB::select('select * from student'))->pluck('first_name', 'std_id')->toArray();

        return view('studentcourse.create', compact('courses','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $course_id= ($request->has('course_id')) ? $data['course_id'] : "";
        $std_id = ($request->has('std_id')) ? $data['std_id'] : "";

        DB::insert('insert into std_course (std_id,course_id) values (?,?)',
            [$std_id, $course_id]);

        return redirect()->route('studentcourses.index')->with('success', "تم الاضافة   بنجاح");     
    }

    public function destroy(string $std,string $course)
    {
        $deleted = DB::delete('delete from std_course where std_id=? and course_id =?',[$std,$course]);

        return redirect()->route('studentcourses.index')->with('success',"تم الحذف   بنجاح");
    }
}
