<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = DB::select('select *FROM instructor');

        return view('instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = collect(DB::select('select * from department'))->pluck('dept_name', 'dept_name')->toArray();

        return view('instructors.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $name = ($request->has('name')) ? $data['name'] : "";
        $salary = ($request->has('salary')) ? $data['salary'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";
        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $instructor_id = DB::scalar("select max(instructor_id) from instructor") + 1;

        DB::insert('insert into instructor (instructor_id,name,salary,dept_name) values (?, ? , ?,?, ? , ?)',
            [$instructor_id, $first_name, $second_name, $third_name, $last_name, $dept_name]);

        return redirect()->route('instructors.index')->with('success', "تم الاضافة   بنجاح");
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
        $elm = DB::select('select * from instructor i where i.instructor_id = :instructor_id', ['instructor_id' => $id]);

        $departments = collect(DB::select('select * from department'))->pluck('dept_name', 'dept_name')->toArray();

        return view('instructors.edit', compact('departments', 'elm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $name = ($request->has('name')) ? $data['name'] : "";
        $salary = ($request->has('salary')) ? $data['salary'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";
        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";


        DB::update(' update instructor set name=? ,salary =? ,dept_name=?  where instructor_id = ?',
            [$name, $salary, $dept_name, $id]);


        return redirect()->route('instructors.index')->with('success',"تم التعديل   بنجاح");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from instructor where instructor_id=?',[$id]);

        return redirect()->route('instructors.index')->with('success',"تم الحذف   بنجاح");
    }
}
