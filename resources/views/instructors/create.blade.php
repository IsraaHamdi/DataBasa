@extends('layouts.main')
@section('content')

    {!! Form::open(['route' => 'instructors.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

    <div class="m-3 card p-5">
        <div class="form-group">
            <label>الاسم</label>
            <input value="{{old("name")}}" type="text" name="name" class="form-control" placeholder="الاسم الأول"/>
        </div>

        <div class="form-group">
            <label>الراتب </label>
            <input value="{{old("salary")}}" type="text" name="salary" class="form-control" placeholder=""/>
        </div>

        <div class="form-group">
            <label>القسم</label>
            {!! Form::select('dept_name',$departments,null,['id'=>'dept_name','class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            <label>حساب المستخدم</label>
            {!! Form::select('user_id',$users,null,['id'=>'user_id','class' => 'form-control']) !!}
        </div>
        <div class="">
            <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>

        </div>
    </div>


    {!! Form::close() !!}

@endsection
