@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            <button class="btn btn-blue" onclick="tableToExcel('saleriesemployees', 'report')">Excel</button>

                            <a class="btn btn-success"  href='{{ route('users.create')}}'>اضافة</a>

                        </div>
                </div>
		@if(count($users) > 0)
		    <div class="row">
                <div class="col-md-6 text-left">
                    
                </div>
                <div class="col-md-6 text-right">
                     <h5 style="font-weight: bolder" class="header smaller theme-color lighter blue p-1">عدد النتائج  :  {{count($users)}} </h5>

                </div>
		    </div>
                
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table id="saleriesemployees" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th> اسم المستخدم</th>
                                    <th>عمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($users as $p)
                                <?php
                                $p = get_object_vars($p);
                                ?>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $p['name'] }}</td>
                                    <td>{{ $p['username'] }}</td>

                                    <td>
                                        <a class="btn btn-primary" href="{{ route('users.edit',$p['user_id'])}}">تعديل</a>

                                        <form action="{{ route('users.destroy', $p['user_id']) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                        </form>

 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
       
                </div>
        @endif
		</div>
	</div>
</div>
@endsection