<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <style>
        .text-center{
            text-align:center
        }
        .table{border-collapse:collapse!important}
        .table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}
        .table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}
        .badge{color:#fff;background-color:#333}
        .label-success{background-color:#5cb85c}
        .label-danger{background-color:#d9534f}
    </style>


</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
           <h1 class="text-center">All Attendance  <span>{{ $attendances->count() }}</span> </h1>
        </div>

        <table class="table table-striped table-bordered text-center" id="editable-sample">
            <thead>
            <tr>
                <th class="text-center">Si</th>
                <th class="text-center">Student Name</th>
                <th class="text-center">Class</th>
                <th class="text-center">Roll</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Date</th>
                <th class="text-center">Teacher</th>
                <th class="text-center">Attendance Type</th>

            </tr>
            </thead>
            <tbody>
            @foreach($attendances as $key => $attendance)
                <tr class="">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $attendance->student->user->name }}</td>
                    <td>{{ $attendance->class->name }}</td>
                    <td>{{ $attendance->student->roll_number }}</td>
                    <td>{{ $attendance->student->phone }}</td>
                    <td>{{ $attendance->attendance_date }}</td>
                    <td>{{ ($attendance->user->name) }}</td>
                    <td>

                        @if($attendance->attendance_status == 1)
                            <span class="badge label-success">Present</span>
                        @else
                            <span class="badge label-danger">Absent</span>
                        @endif

                    </td>
                </tr>

            @endforeach



            </tbody>
        </table>


    </div>
</div>
</body>
</html>
