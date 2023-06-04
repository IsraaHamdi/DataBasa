<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = DB::select('select * from course');
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = collect(DB::select('select * from books'))->pluck('name','book_id')->toArray();
        $departments = collect(DB::select('select * from department'))->pluck('dept_name','dept_name')->toArray();
        $types = ["1"=>"وجاهي","2"=>"عن بعد"];

        return view('course.create',compact('books','departments','types')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $title = ($request->has('title')) ? $data['title'] : "";
        $credits = ($request->has('credits')) ? $data['credits'] : "";
        $course_type = ($request->has('course_type')) ? $data['course_type'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";
        $book_id = ($request->has('book_id')) ? $data['book_id'] : "";

        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $course_id = DB::scalar( "select max(course_id) from course") + 1;

        DB::insert('insert into course (course_id,title,dept_name,credits,course_type,book_id) values (?, ? , ?,?, ? , ?)', [$course_id, $title,$dept_name,$credits,$course_type,$book_id]);


        return redirect()->route('courses.index')->with('success',"تم الاضافة   بنجاح");
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
        $books = collect(DB::select('select * from books'))->pluck('name','book_id')->toArray();
        $departments = collect(DB::select('select * from department'))->pluck('dept_name','dept_name')->toArray();
        $types = ["1"=>"وجاهي","2"=>"عن بعد"];

        return view('course.edit',compact('books','departments','types','elm')); 
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

        DB::update(' update course set title=? ,dept_name =? ,credits=? ,course_type=? ,book_id=? where course_id = ?', [ $title,$dept_name,$credits,$course_type,$book_id,$id]);


        return redirect()->route('courses.index')->with('success',"تم التعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from course where course_id=?',[$id]);
        return redirect()->route('courses.index')->with('success',"تم الحذف   بنجاح");


        //
    }
}
