@extends('layouts.main')
@section('content')
    {!! Form::model($elm, ['route' => ['instructors.update', $elm[0]->instructor_id], 'method' => 'put', 'class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

    <div class="m-3 card p-5">
        <div class="form-group">
            <label>الاسم الأول</label>
            <input value="{{$elm[0]->name}}" type="text" name="name" class="form-control"
                   placeholder="الاسم الأول"/>
        </div>

        <div class="form-group">
        <label>الراتب </label>
            <input value="{{$elm[0]->salary}}" type="text" name="salary" class="form-control"
                   />
        </div>

        <div class="form-group">
            <label>القسم</label>
            {!! Form::select('dept_name',$departments,$elm[0]->dept_name,['id'=>'dept_name','class' => 'form-control','placeholder'=>'اختر القسم ']) !!}
        </div>
        <div class="">
            <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>
        </div>
    </div>


    {!! Form::close() !!}
@endsection
