@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            {!! Form::open(['route' => 'report.courses','class' => 'form-horizontal submit-form','placeholder'=>'dd','role' => 'form','files' => true,'method' => 'get']) !!}

       <div class="form-group">
                    <label >المساق</label>
                    {!! Form::select('course_id',$courses,$request->course_id,['id'=>'course_id','class' => 'form-control d-inline col-6']) !!}

                    <button type="submit" class="btn  col-1 mr-1 ml-1 btn-success btn-save mr-2">استعلام</button>
                    <button class="btn btn-blue col-1" onclick="tableToExcel('saleriesemployees', 'report')">Excel</button>

                </div>
                

        {!! Form::close() !!}
                        </div>
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

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            ?>
                            @foreach($lectures as $student)
                                <?php
                                    $student = get_object_vars($student);
                                ?>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student['name'] }}</td>
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
