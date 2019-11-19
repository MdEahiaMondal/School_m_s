@extends('backend.master.master')

@section('title', 'create')

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
                            Horizontal Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-horizontal" role="form" method="post" action="{{ route('parent.store') }}">
                                    @csrf
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
                                        <label for="job" class="col-lg-2 col-sm-2 control-label">Job <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('job') }}" name="job" class="form-control" id="job" placeholder="Job">
                                            @error('job')
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
                                                <input tabindex="3" type="radio" value="male" name="gender">
                                                <label>Male</label>
                                            </div>

                                            <div class="radio square-green ">
                                                <input tabindex="3" type="radio" value="female"  name="gender">
                                                <label>Female </label>
                                            </div>

                                            @error('gender')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-lg-2 col-sm-2 control-label">Address <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup> </label>
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
                                            <a href="{{ route('parent.index') }}" class="btn btn-default">Back</a>
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
