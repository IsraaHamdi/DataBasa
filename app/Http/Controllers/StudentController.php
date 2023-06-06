<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::select('select student.*, std_phone.* FROM student join std_phone on student.std_id = std_phone.std_id');
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = collect(DB::select('select * from department'))->pluck('dept_name', 'dept_name')->toArray();

        return view('student.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $first_name = ($request->has('first_name')) ? $data['first_name'] : "";
        $second_name = ($request->has('second_name')) ? $data['second_name'] : "";
        $third_name = ($request->has('third_name')) ? $data['third_name'] : "";
        $last_name = ($request->has('last_name')) ? $data['last_name'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";
        $phone_num = ($request->has('phone_num')) ? $data['phone_num'] : "";

        //$course_id = ($request->has('course_id')) ? $data['course_id'] : "";
        $std_id = DB::scalar("select max(std_id) from student") + 1;

        DB::insert('insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (?, ? , ?,?, ? , ?)',
            [$std_id, $first_name, $second_name, $third_name, $last_name, $dept_name]);

        DB::insert('insert into std_phone (std_id,phone_num) values (?,?)', [$std_id, $phone_num]);

        return redirect()->route('students.index')->with('success', "تم الاضافة   بنجاح");
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
        $elm = DB::select('select * from student s left join std_phone p on s.std_id = p.std_id where s.std_id = :std_id', ['std_id' => $id]);

        $departments = collect(DB::select('select * from department'))->pluck('dept_name', 'dept_name')->toArray();

        return view('student.edit', compact('departments', 'elm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $first_name = ($request->has('first_name')) ? $data['first_name'] : "";
        $second_name = ($request->has('second_name')) ? $data['second_name'] : "";
        $third_name = ($request->has('third_name')) ? $data['third_name'] : "";
        $last_name = ($request->has('last_name')) ? $data['last_name'] : "";
        $dept_name = ($request->has('dept_name')) ? $data['dept_name'] : "";

        $phone_num = ($request->has('phone_num')) ? $data['phone_num'] : "";


        DB::update(' update student set first_name=? ,second_name =? ,third_name=? ,last_name=? ,dept_name=?  where std_id = ?',
            [$first_name, $second_name, $third_name, $last_name, $dept_name, $id]);


            DB::update(' update std_phone set phone_num=?  where std_id = ?',
            [$phone_num,  $id]);


        return redirect()->route('students.index')->with('success',"تم التعديل   بنجاح");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from student where std_id=?',[$id]);

        return redirect()->route('students.index')->with('success',"تم الحذف   بنجاح");
    }
}
