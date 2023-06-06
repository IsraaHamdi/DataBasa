@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            {!! Form::open(['route' => 'report.lectures','class' => 'form-horizontal submit-form','placeholder'=>'dd','role' => 'form','files' => true,'method' => 'get']) !!}

       <div class="form-group">
                    <!-- <label >المحاضرة</label>
                    {!! Form::select('lecture_id',$lectures,$request->lecture_id,['id'=>'course_id','class' => 'form-control d-inline col-6']) !!} -->
                    <div class="form-group">
                    <label >المحاضرة</label>
                    <input value="{{old("lecture_id")}}" type="text" name="name" class="form-control"  placeholder=""/>
                </div>
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
                        <table id="saleriesemployees" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> اسم المساق</th>
                                    <th> اسم المحاضرة</th>
                                    <th> اسم الطالب</th>
                                    <th> حالة الطالب</th>
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
