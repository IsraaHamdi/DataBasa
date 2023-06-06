@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            <button class="btn btn-blue" onclick="tableToExcel('saleriesemployees', 'report')">Excel</button>

                            <a class="btn btn-success"  href='{{ route('attendance.create')}}'>اضافة</a>

                        </div>
                </div>
		@if(count($attends) > 0)
		    <div class="row">
                <div class="col-md-6 text-left">
                    
                </div>
                <div class="col-md-6 text-right">
                     <h5 style="font-weight: bolder" class="header smaller theme-color lighter blue p-1">عدد النتائج  :  {{count($attends)}} </h5>

                </div>
		    </div>
                
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table id="saleriesemployees" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المساق</th>
                                    <th> عنوان المحاضرة</th>
                                    <th> اسم الطالب</th>
                                    <th>حالة الحضور</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($attends as $p)
                                <?php
                                $p = get_object_vars($p);
                                ?>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $p['title'] }}</td>
                                    <td>{{ $p['name'] }}</td>
                                    <td>{{ $p['first_name'] .' '. $p['last_name'] }}</td>
                                    <td>{{ $p['isattend'] == 1 ? "yes" : "no" }}</td>
           
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