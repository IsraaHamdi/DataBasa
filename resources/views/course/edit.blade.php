@extends('layouts.main')
@section('content')
{!! Form::model($elm, ['route' => ['courses.update', $elm[0]->course_id], 'method' => 'put', 'class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

<div class="m-3 card p-5">
    <div class="form-group">
        <label>العنوان</label>
        <input value="{{$elm[0]->title}}" type="text" name="title" class="form-control"  placeholder=" رقم سؤال"/>
    </div>
 
    <div class="form-group">
                    <label>عدد الساعات</label>
                    <input value="{{$elm[0]->credits}}" type="text" name="credits" class="form-control"  placeholder=""/>
                </div>
                
                
                <div class="form-group">
                    <label>نوع المساق</label>
                    {!! Form::select('course_type',$types,$elm[0]->course_type,['id'=>'course_type','class' => 'form-control','placeholder'=>'اختر نوع المساق']) !!}

                </div>
                
                <div class="form-group">
                    <label>الكتاب</label>
                    {!! Form::select('book_id',$books,$elm[0]->book_id,['id'=>'book_id','class' => 'form-control','placeholder'=>'اختر الكتاب ']) !!}

                </div>
                <div class="form-group">
                    <label>القسم</label>

                    {!! Form::select('dept_name',$departments,$elm[0]->dept_name,['id'=>'dept_name','class' => 'form-control','placeholder'=>'اختر القسم ']) !!}

                </div>

                <div class="form-group">
                    <label>معيد المساق</label>
                    {!! Form::select('instructor_id',$instructors,$elm[0]->instructor_id,['id'=>'instructor_id','class' => 'form-control']) !!}
                </div>
                <div class="">
    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>
</div>
</div>


{!! Form::close() !!}
@endsection