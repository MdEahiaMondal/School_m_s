@extends('backend.master.master')

@section('title', 'Students')

@push('css')

    <link rel="stylesheet" href="{{ asset('backend/js/data-tables/DT_bootstrap.css') }}" />

@endpush


@section('mainContent')

    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            @include('backend.message.message')

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Students Table
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                                <div class="clearfix">
                                    @if(auth()->user()->can('student create'))
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{ route('students.create') }}">
                                                Add New <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered text-center" id="editable-sample">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Si</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Roll</th>
                                            <th class="text-center">Class</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $key => $student)
                                        <tr class="">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $student->user->name }}</td>
                                            <td>{{ $student->user->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->roll_number }}</td>
                                            <td>{{ $student->Class->name }}</td>
                                            <td>
                                                @foreach($student->user->getRoleNames() as $role)
                                                    <span class="badge label-danger"> {{ $role }} </span>
                                                @endforeach
                                            </td>
                                            <td>

                                                @if(auth()->user()->can('student show'))
                                                    <a title="view" href="{{ route('students.show', $student->id) }}" class="btn btn-primary"><i class="fa  fa-eye"></i></a>
                                                @endif

                                                @if(auth()->user()->can('student edit'))
                                                    <a href="{{ route('students.show', ['student' => $student->id]) }}" class="btn btn-primary">Edit</a>
                                                @endif

                                                 @if(auth()->user()->can('student delete'))
                                                    <button type="button" class="btn btn-danger" onclick="deleteStudent({{ $student->id }})">Delete</button>


                                                    <form action="{{ route('students.destroy', $student->id) }}" id="delete-form-{{ $student->id }}" method="post" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                 @endif
                                            </td>
                                        </tr>

                                    @endforeach



                                    </tbody>
                                </table>
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

    <script src="{{ asset('backend/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/data-tables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/data-tables/DT_bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/table-editable.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });
    </script>

    {{--// for tag delete--}}
    <script>
        function deleteStudent(id) {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    /* swalWithBootstrapButtons.fire(
                         'Deleted!',
                         'Your file has been deleted.',
                         'success'
                     )*/
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        }
    </script>



@endpush
