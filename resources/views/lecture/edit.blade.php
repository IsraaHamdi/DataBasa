@extends('layouts.main')
@section('content')
{!! Form::model($elm, ['route' => ['lectures.update', $elm[0]->lecture_id], 'method' => 'put', 'class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

<div class="m-3 card p-5">

<div class="form-group">
                    <label> المساق</label>
                    {!! Form::select('course_id',$courses,$elm[0]->course_id,['id'=>'course_id','class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label>الاسم</label>
                    <input value="{{$elm[0]->name}}" type="text" name="name" class="form-control"  placeholder="الاسم"/>
                </div>

                <div class="form-group">
                    <label>المكان</label>
                    <input value="{{$elm[0]->location}}"type="text" name="location" class="form-control"  placeholder="المكان"/>
                </div>

                <div class="">
    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>
</div>
</div>


{!! Form::close() !!}
@endsection
