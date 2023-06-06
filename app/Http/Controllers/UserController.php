<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::select('select user.*,user_phone.* FROM users join user_phone on users.user_id = user_phone.user_id');
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = collect(DB::select('select * from roles'))->pluck('name','role_id')->toArray();

        return view('user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $name = ($request->has('name')) ? $data['name'] : "";
        $username = ($request->has('username')) ? $data['username'] : "";
        $role_id = ($request->has('role_id')) ? $data['role_id'] : "";
        $password = ($request->has('password')) ? $data['password'] : "";
        $phone_num = ($request->has('phone_num')) ? $data['phone_num'] : "";

        //$user_id = ($request->has('user_id')) ? $data['user_id'] : "";
        $user_id = DB::scalar( "select max(user_id) from users") + 1;

        DB::insert('insert into users (user_id,name,username,password,role_id) values (?,?,?,?,?)', [$user_id, $name,$username,Hash::make($password),$role_id]);
        DB::insert('insert into user_phone (user_id,phone_num) values (?,?)', [$user_id, $phone_num]);

        return redirect()->route('users.index')->with('success',"تم الاضافة   بنجاح");
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
        $elm = DB::select('select * from users u left join user_phone p on u.user_id = p.user_id where u.user_id = :user_id', ['user_id' => $id]);
        $roles = collect(DB::select('select * from roles'))->pluck('name','role_id')->toArray();

        return view('user.edit',compact('roles','elm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $name = ($request->has('name')) ? $data['name'] : "";
        $username = ($request->has('username')) ? $data['username'] : "";
        $role_id = ($request->has('role_id')) ? $data['role_id'] : "";
        $password = ($request->has('password')) ? $data['password'] : "";
        $phone_num = ($request->has('phone_num')) ? $data['phone_num'] : "";

        //$user_id = ($request->has('user_id')) ? $data['user_id'] : "";

        DB::update(' update users set name=? ,username =? ,password=? ,role_id=? where user_id = ?', [ $name,$username,Hash::make($password),$role_id,$id]);
        DB::update(' update user_phone set phone_num=?  where user_id = ?',
        [$phone_num,  $id]);

        return redirect()->route('users.index')->with('success',"تم التعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::delete('delete from users where user_id=?',[$id]);
        return redirect()->route('users.index')->with('success',"تم الحذف   بنجاح");


        //
    }
}
