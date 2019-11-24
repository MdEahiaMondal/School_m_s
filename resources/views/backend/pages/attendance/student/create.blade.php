@extends('backend.master.master')

@section('title', 'Create Student Attendance')

@push('css')

    <link href="{{ asset('backend/js/iCheck/skins/flat/green.css') }}" rel="stylesheet">

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
                                <form class="form-horizontal" role="form" method="post" action="{{ route('attendances.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Class <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="all_class_id" id="class" class="form-control m-bot15">
                                                <option value="">===>Choose Class===></option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('all_class_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Class Group <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="class_group_id" id="classGroup" class="form-control m-bot15">
                                                <option value="" disable="true" selected="true">=== Select Class Group ===</option>
                                            </select>
                                            @error('class_group_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>




                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Student List
                        </header>
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered text-center" id="editable-sample">

                            </table>
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

    <script>
        $(document).ready(function () {
            $("#class").change(function () { // al select field name
                if($(this).val() != ''){// if there is value true or false
                    var options_id = $(this).val();// option value's id
                    var _token = $('input[name="_token"]').val();
                    var selectFieldNameOrId = $(this).attr('id');// select field name or id

                    $.ajax({
                        url: "{{ route('get.allClass_Group') }}",
                        method: "POST",
                        data: {
                            options_id: options_id,
                            selectFieldNameOrId: selectFieldNameOrId,
                            _token: _token,
                        },
                        success: function (result) {


                            if(selectFieldNameOrId == 'class'){
                                $("#classGroup").html(result)
                            }

                        }
                    });
                }
            })
        })

    </script>

    <script>

        $("#classGroup").change(function () {
            var class_Group_id = $(this).val();
            var Class_id = $("#class").val();
            if(class_Group_id){
                $.get("{{ route('get.group.wise.student') }}", {class_Group_id:class_Group_id, Class_id:Class_id }, function (feedBackResult) {
                     $("#editable-sample").html(feedBackResult)
                })
            }
        })

    </script>

@endpush
