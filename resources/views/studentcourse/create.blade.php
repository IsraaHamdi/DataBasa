@extends('layouts.main')
@section('content')

    {!! Form::open(['route' => 'studentcourses.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

    <div class="m-3 card p-5">
    <div class="form-group">
         <label>الطالب</label>
            {!! Form::select('std_id',$students,null,['id'=>'std_id','class' => 'form-control']) !!}
        </div>
    <div class="form-group">
      <label>المساق</label>
            {!! Form::select('course_id',$courses,null,['id'=>'course_id','class' => 'form-control']) !!}
        </div>
        <div class="">
            <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>

        </div>
    </div>


    {!! Form::close() !!}

@endsection
