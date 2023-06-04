@extends('layouts.main')
@section('content')
{!! Form::model($elm, ['route' => ['users.update', $elm[0]->user_id], 'method' => 'put', 'class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

<div class="m-3 card p-5">
    <div class="form-group">
        <label>الاسم</label>
        <input value="{{$elm[0]->name}}" type="text" name="name" class="form-control"  placeholder=" رقم سؤال"/>
    </div>
 
    <div class="form-group">
                    <label>اسم المستخدم</label>
                    <input value="{{$elm[0]->username}}" type="text" name="username" class="form-control"  placeholder=""/>
                </div>
                
                
    <div class="form-group">
                    <label>كلمة المرور</label>
                    <input value="{{$elm[0]->password}}" type="text" name="password" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>نوع المستخدم</label>
                    {!! Form::select('role_id',$roles,$elm[0]->role_id,['id'=>'role_id','class' => 'form-control','placeholder'=>'اختر نوع المساق']) !!}

                </div>
                
                 
                <div class="">
    <button type="submit" class="btn btn-success btn-save mr-2">حفظ</button>
</div>
</div>


{!! Form::close() !!}
@endsection