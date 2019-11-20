@extends('backend.master.master')

@section('title', 'Edit Student Attendance')

@push('css')

    <link href="{{ asset('backend/js/iCheck/skins/square/green.css') }}" rel="stylesheet">

@endpush


@section('mainContent')

    <section id="main-content" class="">
        <section class="wrapper">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Student Attendance Forms
                        </header>
                        <div class="panel-body">

                            @include('backend.message.message')

                            <div class="position-center">
                                <form class="form-horizontal" role="form" method="post" action="{{ route('attendances.update', $attendance->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Student<sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="student_id" class="form-control m-bot15">
                                                <option value="">===>Choose Student===></option>
                                                @foreach($students as $student)
                                                    <option {{ $attendance->student_id == $student->id ? 'selected' : '' }} value="{{ $student->id }}">{{ $student->user->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('student_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Class <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="class_id" class="form-control m-bot15">
                                                <option value="">===>Choose Class===></option>
                                                @foreach($classes as $class)
                                                    <option {{ $attendance->class_id == $class->id ? 'selected' : '' }} value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('class_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Class <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="attendance_status" class="form-control m-bot15">
                                                <option {{ $attendance->attendance_status == 1 ? 'selected' : ''  }} value="1">Present</option>
                                                <option {{ $attendance->attendance_status == 0 ? 'selected' : ''  }}  value="0">Absent</option>
                                            </select>
                                            @error('attendance_status')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="attendance_date" class="col-lg-2 col-sm-2 control-label">Attendance Date </label>
                                        <div class="col-lg-10">
                                            <input type="date" value="<?php echo date('Y-m-d'); ?>" name="attendance_date" class="form-control" id="attendance_date">
                                            @error('attendance_date')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <a href="{{ route('attendances.index') }}" class="btn btn-default">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <!-- page end-->
        </section>
    </section>

@endsection



@push('script')

    <script src="{{ asset('backend/js/iCheck/jquery.icheck.js') }}"></script>

    <script src="{{ asset('backend/js/icheck-init.js') }}"></script>


@endpush
