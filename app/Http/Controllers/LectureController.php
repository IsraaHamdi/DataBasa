<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function index()
    {
        $lectures = DB::select('select * from lecture left join course on lecture.course_id = course.course_id');
        return view('lecture.index',compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();
        // $sections = collect(DB::select('select * from section'))->pluck('sec_id','sec_id')->toArray();
        // $time_slots = collect(DB::select('select * from time_slot'))->pluck('day'.'  start_hr - '.'end_hr','time_slot_id')->toArray();


        return view('lecture.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $location = ($request->has('location')) ? $data['location'] : "";
        $name = ($request->has('name')) ? $data['name'] : "";
        // $sec_id = ($request->has('sec_id')) ? $data['sec_id'] : "";
        // $semester = ($request->has('semester')) ? $data['semester'] : "";
        // $year = ($request->has('year')) ? $data['year'] : "";
        // $building = ($request->has('building')) ? $data['building'] : "";
        // $room_number = ($request->has('room_number')) ? $data['room_number'] : "";
        // $time_slot_id = ($request->has('time_slot_id')) ? $data['time_slot_id'] : "";
        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        $lecture_id = DB::scalar("select max(lecture_id) from lecture") + 1;

        DB::insert('insert into lecture (lecture_id,course_id, location,name) values (?, ? , ?,?)',
        [$lecture_id,$course_id, $location, $name]);


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
        $courses= collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();

        $elm = DB::select('select * from lecture i where i.lecture_id = :lecture_id', ['lecture_id' => $id]);

        return view('lecture.edit',compact('courses','elm'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $location = ($request->has('location')) ? $data['location'] : "";
        $name = ($request->has('name')) ? $data['name'] : "";

        DB::update(' update lecture set course_id=? ,location =? ,name=? where lecture_id = ?', [ $course_id,$location,$name,$id]);


        return redirect()->route('lectures.index')->with('success',"تم التعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from lecture  where lecture_id=?',[$id]);
        return redirect()->route('lectures.index')->with('success',"تم الحذف   بنجاح");


        //
    }
}
