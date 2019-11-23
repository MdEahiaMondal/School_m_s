@extends('backend.master.master')

@section('title', 'Create Student')

@push('css')

    <link href="{{ asset('backend/js/iCheck/skins/square/green.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
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
                            Student Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-horizontal" role="form" method="post" action="{{ route('students.store') }}">
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
                                            <select name="class_group_id" id="classGroup" class="form-control m-bot15">
                                                <option value="" disable="true" selected="true">=== Select Class Group ===</option>
                                            </select>
                                            @error('class_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Parent <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <select name="parnt_id" data-show-subtext="true" class="form-control m-bot15 selectpicker" data-live-search="true">
                                                <option value="">===>Choose Parents===></option>
                                                @foreach($parents as $parent)
                                                    <option data-tokens="frosting" value="{{ $parent->id }}">{{ $parent->user->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('parent_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="name" class="col-lg-2 col-sm-2 control-label">Name <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="Name">
                                            @error('name')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="email" value="{{ old('email') }}"  name="email" class="form-control" id="inputEmail1" placeholder="Email">
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                                            @error('password')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="Phone">
                                            @error('phone')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="roll_number" class="col-lg-2 col-sm-2 control-label">Roll No <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('roll_number') }}" name="roll_number" class="form-control" id="roll_number" placeholder="Class Roll Number">
                                            @error('roll_number')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="age" class="col-lg-2 col-sm-2 control-label">Age <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('age') }}" name="age" class="form-control" id="age" placeholder="Age">
                                            @error('age')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="age" class="col-lg-2 col-sm-2 control-label">Gender <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup> </label>

                                        <div class="col-sm-10 icheck ">
                                            <div class="radio square-green ">
                                                <input tabindex="3" type="radio" checked value="male" name="gender">
                                                <label>Male</label>
                                            </div>

                                            <div class="radio square-green ">
                                                <input tabindex="3" type="radio" value="female"  name="gender">
                                                <label>Female </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date_of_birth" class="col-lg-2 col-sm-2 control-label">Birth day </label>
                                        <div class="col-lg-10">
                                            <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Birth day">
                                            @error('date_of_birth')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-lg-2 col-sm-2 control-label">Address </label>
                                        <div class="col-lg-10">
                                            <textarea name="address" id="address" cols="30" class="form-control" rows="5"> {{ old('address') }}  </textarea>
                                            @error('address')
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
                                            <a href="{{ route('students.index') }}" class="btn btn-default">Back</a>
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


    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

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


@endpush
