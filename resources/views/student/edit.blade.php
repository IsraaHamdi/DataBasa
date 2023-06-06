@extends('layouts.main')
@section('content')
    {!! Form::model($elm, ['route' => ['students.update', $elm[0]->std_id], 'method' => 'put', 'class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

    <div class="m-3 card p-5">
        <div class="form-group">
            <label>الاسم الأول</label>
            <input value="{{$elm[0]->first_name}}" type="text" name="first_name" class="form-control"
                   placeholder="الاسم الأول"/>
        </div>

        <div class="form-group">
            <label>الاسم الثاني</label>
            <input value="{{$elm[0]->second_name}}" type="text" name="second_name" class="form-control"
                   placeholder="الاسم الثاني"/>
        </div>

        <div class="form-group">
            <label>الاسم الثالث</label>
            <input value="{{$elm[0]->third_name}}" type="text" name="third_name" class="form-control"
                   placeholder="الاسم الثالث"/>
        </div>

        <div class="form-group">
            <label>الاسم الأخير</label>
            <input value="{{$elm[0]->last_name}}" type="text" name="last_name" class="form-control"
                   placeholder="الاسم الأخير"/>
        </div>

        <div class="form-group">
            <label>القسم</label>
            {!! Form::select('dept_name',$departments,$elm[0]->dept_name,['id'=>'dept_name','class' => 'form-control','placeholder'=>'اختر القسم ']) !!}
        </div>

        <div class="form-group">
        <label>رقم الجوال</label>
            <input value="{{$elm[0]->phone_num}}"  type="text" name="phone_num" class="form-control" placeholder=""/>
        </div>

        <div class="">
            <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>
        </div>
    </div>


    {!! Form::close() !!}
@endsection
