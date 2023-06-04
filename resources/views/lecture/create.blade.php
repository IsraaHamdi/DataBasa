@extends('layouts.main')
@section('content')
    
{!! Form::open(['route' => 'lectures.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

            <div class="m-3 card p-5">
                
            <div class="form-group">
                    <label> المساق</label>
                    {!! Form::select('course_id',$courses,null,['id'=>'course_id','class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    <label>الشعبة</label>
                    {!! Form::select('sec_id',$sections,null,['id'=>'sec_id','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>الوقت</label>
                    {!! Form::select('time_slot_id',$time_slots,null,['id'=>'time_slot_id','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>السنة</label>
                    <input value="{{old("year")}}" type="text" name="year" class="form-control"  placeholder=""/>
                </div>
                
                <div class="form-group">
                    <label>الفصل </label>
                    <input value="{{old("semester")}}" type="text" name="semester" class="form-control"  placeholder=""/>
                </div>

                
                <div class="form-group">
                    <label> المبنى</label>
                    <input value="{{old("building")}}" type="text" name="building" class="form-control"  placeholder=""/>
                </div>

                <div class="form-group">
                    <label>رقم  الغرفة</label>
                    <input value="{{old("room_number")}}" type="text" name="room_number" class="form-control"  placeholder=""/>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button> 

                </div>
            </div>
            

        {!! Form::close() !!}

@endsection