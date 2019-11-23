
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
    @foreach($class_Group_wise_students as $key => $class_Group_wise_student)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $class_Group_wise_student->user->name }}</td>
            <td>{{ $class_Group_wise_student->roll_number }}</td>
            <td>{{ $class_Group_wise_student->phone }}</td>
            <td id="result">
                @foreach($attendances as $att)
                @endforeach
                <a href="#0" data-class_id="{{ $class_Group_wise_student->myClass->id }}" data-student_id="{{ $class_Group_wise_student->id }}" id="StusentStatus" class="badge label-success">Present</a>
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

    $(document).on('click', '#StusentStatus', function () {

        var student_id = $(this).data('student_id');
        var class_id = $(this).data('class_id');

        $.get("{{ route('present.status.student') }}", {student_id: student_id, class_id: class_id } , function (feedBackResult) {
            alert(feedBackResult)
        })





    });

</script>
