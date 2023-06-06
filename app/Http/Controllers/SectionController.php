<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = DB::select('select * from section');
        return view('section.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();
        $classrooms = collect(DB::select('select * from classroom'))->pluck('building'.' - '.'room_number','building'.' - '.'room_number')->toArray();

        return view('section.create',compact('courses','classrooms')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $semester = ($request->has('semester')) ? $data['semester'] : "";
        $year = ($request->has('year')) ? $data['year'] : "";
        $building = ($request->has('building')) ? $data['building'] : "";
        $room_number = ($request->has('room_number')) ? $data['room_number'] : "";

        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $sec_id = DB::scalar( "select max(sec_id) from section") + 1;

        DB::insert('insert into section (course_id, sec_id, semester, year, building, room_number) values (?, ? , ?,?, ? , ?)', 
                        [$course_id, $sec_id,$semester,$year,$building,$room_number]);


        return redirect()->route('sections.index')->with('success',"تم الاضافة   بنجاح");
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
        $elm = DB::select('select * from section where sec_id = :sec_id', ['sec_id' => $id]);

        $courses = collect(DB::select('select * from course'))->pluck('title','course_id')->toArray();
        $classrooms = collect(DB::select('select * from classroom'))->pluck('building'.' - '.'room_number','building'.' - '.'room_number')->toArray();

        return view('section.edit',compact('courses','classrooms','elm')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $semester = ($request->has('semester')) ? $data['semester'] : "";
        $year = ($request->has('year')) ? $data['year'] : "";
        $building = ($request->has('building')) ? $data['building'] : "";
        $room_number = ($request->has('room_number')) ? $data['room_number'] : "";

        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";

        DB::update(' update section set course_id=? ,semester =? ,year=? ,building=? ,room_number=? where sec_id = ?', 
        [ $course_id,$semester,$year,$building,$room_number,$id]);


        return redirect()->route('sections.index')->with('success',"تم التعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from section where section_id=?',[$id]);
        return redirect()->route('sections.index')->with('success',"تم الحذف   بنجاح");


        //
    }
}
