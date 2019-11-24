
<thead>
<tr>
    <th class="text-center">Si</th>
    <th class="text-center">Student Name</th>
    <th class="text-center">Roll</th>
    <th class="text-center">Phone</th>
    <th class="text-center">Action</th>
</tr>
</thead>

<tbody>

@if(count($class_Group_wise_students) > 0)
    @foreach($class_Group_wise_students as $key =>$student)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $student->user->name }}</td>
            <td>{{ $student->roll_number }}</td>
            <td>{{ $student->phone }}</td>
            <td id="result">
                <input onclick="takeAttendance(this)" type="checkbox"

                       @foreach($student->attendance as $Attendance)
                           {{ $Attendance->attendance_status == 1 ? 'checked' : '' }}
                      @endforeach
                       class_id="{{ $student->myClass->id }}" student_id="{{ $student->id }}">
            </td>
        </tr>

    @endforeach


@else
    <tr>
        <td colspan="5">
            <p>There is a no Student </p>
        </td>
    </tr>
@endif


</tbody>


<script>

    function takeAttendance(e){

        var student_id = $(e).attr('student_id');
        var class_id = $(e).attr('class_id');

         $.get("{{ route('present.status.student') }}", {student_id: student_id, class_id: class_id } , function (feedBackResult) {
             toastr.success(feedBackResult);
        })
    }

</script>
