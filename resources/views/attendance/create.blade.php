@extends('layouts.main')
@section('content')

{!! Form::open(['route' => 'attendance.store','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}

            <div class="m-3 card p-5">
            <div class="form-group mb-3">

            <select name="course_id"  id="course-dropdown" class="form-control">
                            <option value="">--اختر المساق --</option>
                            @foreach ($courses as $data)
                            <option value="{{$data->course_id}}">
                                {{$data->title}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select name="lecture_id" id="lecture-dropdown" class="form-control">
                        <option value="">--اختر المحاضرة --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="std_id" id="student-dropdown" class="form-control">
                        <option value="">--اختر الطالب --</option>
                        </select>
                    </div>
                    <div>
                        <select name="isattend" id="lecture-dropdown" class="form-control">
                            <option>حالة الحضور</option>
                            <option value="1">حاضر</option>
                            <option value="0">متغيب</option>
                        </select>
                    </div>
            </div>
            <button class="btn btn-success" type="submit">حفظ</button>
            <!-- <button class="btn btn-success" type="submit">استعلام</button> -->

        {!! Form::close() !!}
 <!--
        {!! Form::open(['route' => 'attendance.create','class' => 'form-horizontal submit-form','role' => 'form','files' => true]) !!}
        <input type="hidden" name="search">
        <button class="btn btn-success" type="submit">استعلام</button>
        {!! Form::close() !!} -->
@endsection


@section('custome-js')
<script>
        $(document).ready(function () {

            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#course-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#lecture-dropdown").html('');
                $.ajax({
                    url: "{{url('fetch-lecture')}}",
                    type: "POST",
                    data: {
                        course_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        console.log(result);
                        console.log(result['lectures']);

                        $('#lecture-dropdown').html('<option value="">-- اختر المحاضرة --</option>');
                        $('#student-dropdown').html('<option value="">-- اختر الطالب --</option>');
                        $.each(result.lectures, function (key, value) {
                            $("#lecture-dropdown").append('<option value="' + value
                                .lecture_id + '">' + value.name + '</option>');
                        });
                        $.each(result.students, function (key, value) {
                            $("#student-dropdown").append('<option value="' + value
                                .std_id + '">' + value.first_name + '</option>');
                        });
                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            // $('#lecture-dropdown').on('change', function () {
            //     var idState = this.value;
            //     $("#student-dropdown").html('');
            //     $.ajax({
            //         url: "{{url('fetch-student')}}",
            //         type: "POST",
            //         data: {
            //             lecture_id: idState,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (res) {
            //             $('#student-dropdown').html('<option value="">-- Select Student --</option>');
            //             $.each(res, function (key, value) {
            //                 $("#student-dropdown").append('<option value="' + value
            //                     .std_id + '">' + value.first_name + '</option>');
            //             });
            //         }
            //     });
            // });

        });
    </script>
@endsection
