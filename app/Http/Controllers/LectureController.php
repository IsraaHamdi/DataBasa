<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function index()
    {
        $lectures = DB::select('select * from leture');
        return view('lecture.index',compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();
        $sections = collect(DB::select('select * from section'))->pluck('sec_id','sec_id')->toArray();
        $time_slots = collect(DB::select('select * from time_slot'))->pluck('day'.'  start_hr - '.'end_hr','time_slot_id')->toArray();


        return view('lecture.create',compact('courses','sections','time_slots')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $sec_id = ($request->has('sec_id')) ? $data['sec_id'] : "";
        $semester = ($request->has('semester')) ? $data['semester'] : "";
        $year = ($request->has('year')) ? $data['year'] : "";
        $building = ($request->has('building')) ? $data['building'] : "";
        $room_number = ($request->has('room_number')) ? $data['room_number'] : "";
        $time_slot_id = ($request->has('time_slot_id')) ? $data['time_slot_id'] : "";
        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        DB::insert('insert into leture (course_id, sec_id, semester, year, building, room_number, time_slot_id) values (?, ? , ?,?, ? , ?,?)', 
        [$course_id, $sec_id,$semester,$year,$building,$room_number,$time_slot_id]);


        return redirect()->route('lectures.index')->with('success',"تم الاضافة   بنجاح");
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
        $elm = DB::select('select * from course where course_id = :course_id', ['course_id' => $id]);
      


        $lectures = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();
        $sections = collect(DB::select('select * from section'))->pluck('sec_id','sec_id')->toArray();
        $time_slots = collect(DB::select('select * from time_slot'))->pluck('day'+'  start_hr - '+'end_hr','time_slot_id')->toArray();


        return view('lecture.edit',compact('lectures','sections','time_slots','elm')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $title = ($request->has('title')) ? $data['title'] : "";
        $credits = ($request->has('credits')) ? $data['credits'] : "";
        $course_type = ($request->has('course_type')) ? $data['course_type'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";
        $book_id = ($request->has('book_id')) ? $data['book_id'] : "";

        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        DB::update(' update leture set title=? ,dept_name =? ,credits=? ,course_type=? ,book_id=? where course_id = ?', [ $title,$dept_name,$credits,$course_type,$book_id,$id]);


        return redirect()->route('lectures.index')->with('success',"تم التعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from course where course_id=?',[$id]);
        return redirect()->route('lectures.index')->with('success',"تم الحذف   بنجاح");


        //
    }
}
