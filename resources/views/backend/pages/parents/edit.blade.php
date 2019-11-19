@extends('backend.master.master')

@section('title', 'Edit Parent')

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
                            Parent Edit Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-horizontal" role="form" method="post" action="{{ route('parent.update', ['parent' => $parnt->id]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="name" class="col-lg-2 col-sm-2 control-label">Name <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ $parnt->user->name }}" name="name" class="form-control" id="name" placeholder="Name">
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
                                            <input type="email" value="{{ $parnt->user->email }}"  name="email" class="form-control" id="inputEmail1" placeholder="Email">
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{$parnt->phone }}" name="phone" class="form-control" id="phone" placeholder="Phone">
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
                                            <input type="text" value="{{ $parnt->job }}" name="job" class="form-control" id="job" placeholder="Job">
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
                                            <input type="text" value="{{ $parnt->age }}" name="age" class="form-control" id="age" placeholder="Age">
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
                                                <input tabindex="3" {{ $parnt->gender == 'male' ? 'checked' : '' }} type="radio" value="male" name="gender">
                                                <label>Male</label>
                                            </div>

                                            <div class="radio square-green ">
                                                <input tabindex="3" {{ $parnt->gender == 'female' ? 'checked' : '' }} type="radio" value="female"  name="gender">
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
                                        <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Role</label>
                                        <div class="col-lg-10">
                                            <select name="role_name" class="form-control m-bot15">
                                                @foreach($roles as $role)
                                                    <option
                                                        @foreach($parnt->user->roles as $ParentRole)
                                                        {{ $ParentRole->id == $role->id ? 'selected' : '' }}
                                                        @endforeach
                                                        value="{{ $role->name }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="address" class="col-lg-2 col-sm-2 control-label">Address <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup> </label>
                                        <div class="col-lg-10">
                                            <textarea name="address" id="address" cols="30" class="form-control" rows="5"> {{ $parnt->address }}  </textarea>
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
