@extends('backend.master.master')

@section('title', 'Parents')

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
                            Teachers Table
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                                <div class="clearfix">
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{ route('parent.create') }}">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
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
                                        <th class="text-center">Job</th>
                                        <th class="text-center">Age</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($parents as $key => $parent)
                                        <tr class="">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $parent->user->name }}</td>
                                            <td>{{ $parent->user->email }}</td>
                                            <td>{{ $parent->phone }}</td>
                                            <td>{{ $parent->job }}</td>
                                            <td>{{ $parent->age }}</td>
                                            <td>{{ $parent->gender }}</td>
                                            <td>
                                                @foreach($parent->user->getRoleNames() as $role)
                                                    <span class="badge label-danger"> {{ $role }} </span>
                                                @endforeach
                                            </td>
                                            <td>{{ $parent->address }}</td>
                                            <td>
                                                <a href="{{ route('teacher.edit', ['teacher' => $parent->id]) }}" class="btn btn-primary">Edit</a>
                                                <button type="button" class="btn btn-danger" onclick="deleteTeacher({{ $parent->id }})">Delete</button>

                                                <form action="{{ route('teacher.destroy', ['teacher' => $parent->id]) }}" id="delete-form-{{ $parent->id }}" method="post" style="display: none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

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
        function deleteTeacher(id) {

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
