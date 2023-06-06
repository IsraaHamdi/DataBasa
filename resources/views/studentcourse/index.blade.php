@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            <button class="btn btn-blue" onclick="tableToExcel('saleriesemployees', 'report')">Excel</button>

                            <a class="btn btn-success"  href='{{ route('studentcourses.create')}}'>اضافة</a>

                        </div>
                </div>
		@if(count($students) > 0)
		    <div class="row">
                <div class="col-md-6 text-left">

                </div>
                <div class="col-md-6 text-right">
                     <h5 style="font-weight: bolder" class="header smaller theme-color lighter blue p-1">عدد النتائج  :  {{count($students)}} </h5>

                </div>
		    </div>

                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table id="saleriesemployees" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th> القسم</th>
                                    <th> اسم المساق</th>
                                    <th>عمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            ?>
                            @foreach($students as $student)
                                <?php
                                    $student = get_object_vars($student);
                                ?>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student['first_name']. ' '.$student['second_name']. ' '.$student['third_name']. ' '.$student['last_name'] }}</td>
                                    <td>{{ $student['dept_name'] }}</td>
                                    <td>{{ $student['title'] }}</td>

                                    <td>
                                        <!-- <a class="btn btn-primary" href="{{ route('students.edit',$student['std_id'])}}">تعديل</a> -->

                                        <form action="{{ route('students.destroy', $student['std_id']) }}" method="POST">
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
