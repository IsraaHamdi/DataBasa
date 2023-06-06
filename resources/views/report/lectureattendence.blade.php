@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row"> 
                </div>
		@if(count($lectures) > 0)
		    <div class="row">
                <div class="col-md-6 text-left">

                </div>
                <div class="col-md-6 text-right">
                     <h5 style="font-weight: bolder" class="header smaller theme-color lighter blue p-1">عدد النتائج  :  {{count($lectures)}} </h5>

                </div>
		    </div>

                <div class="row">
                    <div class="col-xs-12 table-responsive">
                    <button class="btn btn-success" id="btnExport" onclick="fnExcelReport();"> EXPORT </button>
                        <table id="testTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> اسم المحاضرة</th>
                                    <th>  عدد الحضور</th>
                                    <th> عدد الغياب </th>
                                    <th> نسبة الحضور  </th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            ?>
                            @foreach($lectures as $student)
                                <?php
                                    $p = get_object_vars($student);
                                ?>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p['lecture_name'] }}</td>
                                    <td>{{ $p['attendance_count'] }}</td>
                                    <td>{{ $p['absence_count'] }}</td>
                                    <!-- <td>{{ ($p['attendance_count']/ ($p['absence_count'] +$p['attendance_count']) )*100}}</td> -->
                                    <td>0</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
        @else
        <div class="row">
                <div class="col-md-6 text-left">

                </div>
                <div class="col-md-6 text-right">
                     <h5 style="font-weight: bolder" class="header smaller theme-color lighter blue p-1">لايوجد معلومات لهذه المحاضرة يمكن ان يكون ادخالك خاطئ</h5>

                </div>
		    </div>
        @endif
		</div>
	</div>
</div>
@endsection
