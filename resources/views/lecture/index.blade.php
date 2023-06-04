@extends('layouts.main')
@section('content')
<div class="m-3 p-5 card">
	<div class="col-12">
		<div class="card-box">
        <div class="row">
                        <div class="col-md-12 mb-1 text-right">
                            <button class="btn btn-blue" onclick="tableToExcel('saleriesemployees', 'report')">Excel</button>

                            <a class="btn btn-success"  href='{{ route('lectures.create')}}'>اضافة</a>

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
                                    <th>الاسم</th>
                                    <th> القسم</th>
                                    <th> عدد الساعات</th>
                                    <th>عمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($lectures as $p)
                                <?php
                                $p = get_object_vars($p);
                                ?>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $p['title'] }}</td>
                                    <td>{{ $p['dept_name'] }}</td>
                                    <td>{{ $p['credits'] }}</td>

                                    <td>
                                        <a class="btn btn-primary" href="{{ route('lectures.edit',$p['lecture_id'])}}">تعديل</a>

                                        <form action="{{ route('lectures.destroy', $p['lecture_id']) }}" method="POST">
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