@extends('layouts.main')
@section('content')
    
{!! Form::open(['route' => 'courses.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

            <div class="m-3 card p-5">
                <div class="form-group">
                    <label>العنوان</label>
                    <input value="{{old("title")}}" type="text" name="title" class="form-control"  placeholder=""/>
                </div>
                
                <div class="form-group">
                    <label>عدد الساعات</label>
                    <input value="{{old("credits")}}" type="text" name="credits" class="form-control"  placeholder=""/>
                </div>
                
                
                <div class="form-group">
                    <label>نوع المساق</label>
                    {!! Form::select('course_type',$types,null,['id'=>'course_type','class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    <label>الكتاب</label>
                    {!! Form::select('book_id',$books,null,['id'=>'book_id','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>القسم</label>
                    {!! Form::select('dept_name',$departments,null,['id'=>'dept_name','class' => 'form-control']) !!}
                </div>
                <div class="">
                    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button> 

                </div>
            </div>
            

        {!! Form::close() !!}

@endsection