<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attends = DB::select('select * from attendance left join student on attendance.std_id = student.std_id
        left join lecture l on l.lecture_id = attendance.lecture_id join course c on c.course_id = l.course_id ');
        return view('attendance.index', compact('attends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $courses = DB::select('select * from course');
        //$lectures = collect(DB::select('select * from lecture  where course_id_id = :std_id', ['std_id' => $id]))->pluck('title', 'course_id')->toArray();
        //$students = collect(DB::select('select * from student'))->pluck('first_name', 'std_id')->toArray();

        return view('attendance.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $lecture_id= ($request->has('lecture_id')) ? $data['lecture_id'] : "";
        $std_id = ($request->has('std_id')) ? $data['std_id'] : "";
        $isattend = ($request->has('isattend')) ? $data['isattend'] : "";

        // $search = ($request->has('search')) ? $data['search'] : "";
        // $attendance = [];
        // if($search != null) {
        //     $attendance = DB::select('SELECT'
        //     . 's.std_id,
        //     s.first_name,
        //     s.last_name,
        //     a.isAttend,
        //     l.name AS lecture_name
        //   FROM
        //     student s
        //     JOIN std_course sc ON s.std_id = sc.std_id
        //     JOIN course c ON sc.course_id = c.course_id
        //     JOIN lecture l ON c.course_id = l.course_id
        //     LEFT JOIN attendance a ON s.std_id = a.std_id AND l.lecture_id = a.lecture_id
        //   WHERE c.course_id = 2 and s.std_id = 2');

        //   $courses = DB::select('select * from course');
        //   //$lectures = collect(DB::select('select * from lecture  where course_id_id = :std_id', ['std_id' => $id]))->pluck('title', 'course_id')->toArray();
        //   //$students = collect(DB::select('select * from student'))->pluck('first_name', 'std_id')->toArray();

        //     return view('attendance.create', compact('courses','attendance'));
        //   }
//
        DB::insert('insert into attendance (std_id,lecture_id,isattend) values (?,?,?)',
            [$std_id, $lecture_id,$isattend]);

        return redirect()->route('studentcourses.index')->with('success', "تم الاضافة   بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
