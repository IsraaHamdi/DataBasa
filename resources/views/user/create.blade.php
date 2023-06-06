@extends('layouts.main')
@section('content')

{!! Form::open(['route' => 'users.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

            <div class="m-3 card p-5">
                <div class="form-group">
                    <label>الاسم</label>
                    <input value="{{old("name")}}" type="text" name="name" class="form-control"  placeholder=""/>
                </div>

                <div class="form-group">
                    <label> اسم المستخدم</label>
                    <input value="{{old("username")}}" type="text" name="username" class="form-control"  placeholder=""/>
                </div>


                <div class="form-group">
                    <label> كلمة المرور</label>
                    <input value="{{old("password")}}" type="text" name="password" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>نوع المستخدم</label>
                    {!! Form::select('role_id',$roles,null,['id'=>'role_id','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                <label>رقم الجوال</label>
                     <input value="{{old("phone_num")}}" type="text" name="phone_num" class="form-control" placeholder=""/>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>

                </div>

            </div>


        {!! Form::close() !!}

@endsection
