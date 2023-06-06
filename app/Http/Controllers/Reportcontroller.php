<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $lectures = [];

        $courses = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();

            $lectures = DB::select('select * FROM lecture where course_id = ?',[$course_id]);

       // return view('report.course', compact('courses','lectures'));
        return view('report.lectureCourse', compact('courses','lectures','request'));

    }
    public function lecture(Request $request)
    {
        $data = $request->all();
        $name= ($request->has('name')) ? $data['name'] : "";

        $lectures = [];

        if($name != ""){
            $lectures = DB::select('SELECT s.*, a.isattend, c.title, l.name as lecture_name FROM student s JOIN attendance a ON s.std_id = a.std_id JOIN lecture l ON a.lecture_id = l.lecture_id JOIN course c ON l.course_id = c.course_id  WHERE l.name =?', [$name]);// \''.'?'.'%\'
        }

        return view('report.lecture', compact('lectures','request'));

    }


    public function lectureattendence(Request $request)
    {
        $lectures = DB::select('SELECT l.lecture_id, l.name AS lecture_name,'.
        'COUNT(CASE WHEN a.isAttend = true THEN 1 END) AS attendance_count,
        COUNT(CASE WHEN a.isAttend = false  THEN 1 END) AS absence_count,
        COUNT(CASE WHEN a.isAttend = true  THEN 1 END) / count( l.lecture_id)  AS attendance_percentage
      FROM
        lecture l
      LEFT JOIN
        attendance a ON l.lecture_id = a.lecture_id
      GROUP BY
        l.lecture_id, l.name;');
        return view('report.lectureattendence', compact('lectures','request'));

    }

    public function create()
    {
        $courses = collect(DB::select('select * from course'))->pluck('title', 'course_id')->toArray();
        $lectures= collect(DB::select('select * from lecture'))->pluck('name', 'lecture_id')->toArray();

        return view('report.lectureCourse','report.lecture', compact('courses','lectures'));
    }

}
