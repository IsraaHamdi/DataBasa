@extends('layouts.main')
@section('content')
    
{!! Form::open(['route' => 'sections.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

            <div class="m-3 card p-5">

            <div class="form-group">
                    <label>المساق</label>
                    {!! Form::select('course_id',$courses,null,['id'=>'course_id','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>القاعة</label>
                    {!! Form::select('dept_name',$classrooms,null,['id'=>'dept_name','class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label>السنة</label>
                    <input value="{{old("year")}}" type="text" name="year" class="form-control"  placeholder=""/>
                </div>
                
                <div class="form-group">
                    <label>الفصل الدراسي </label>
                    <input value="{{old("semester")}}" type="text" name="semester" class="form-control"  placeholder=""/>
                </div>              
                
                <div class="">
                    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button> 

                </div>
            </div>
            

        {!! Form::close() !!}

@endsection