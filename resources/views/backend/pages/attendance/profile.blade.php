@extends('backend.master.master')

@section('title', 'student profile')

@push('css')

    <link href="{{ asset('backend/js/iCheck/skins/square/green.css') }}" rel="stylesheet">
@endpush


@section('mainContent')

    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body profile-information">
                            <div class="col-md-3">
                                <div class="profile-pic text-center">
                                    <img src="{{ asset('backend/images/lock_thumb.jpg') }}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-desk">
                                    <h1>{{$student->user->name}}</h1>
                                    <span class="text-muted">
                                        @foreach($student->user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                                    </p>
                                    <a href="#" class="btn btn-primary">View Profile</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="profile-statistics">
                                    <h1>{{ $student->roll_number }}</h1>
                                    <p>This is my class Roll</p>
                                    <h1>{{ $student->phone }}</h1>
                                    <p>This is my phone</p>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading tab-bg-dark-navy-blue">
                            <ul class="nav nav-tabs nav-justified ">
                                <li class="active">
                                    <a data-toggle="tab" href="#overview">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#settings">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content tasi-tab">
                                <div id="overview" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="recent-act">
                                                <h1>About Me</h1>
                                                <div class="activity-icon terques">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="activity-desk">
                                                            <h1>Name</h1>
                                                            <h2 class="red">{{ $student->user->name }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Email</h1>
                                                            <h2 class="red">{{ $student->user->email }}</h2>
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h1>Phone</h1>
                                                            <h2 class="red">{{ $student->phone }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Address</h1>
                                                            <h2 class="red">{{ $student->address }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Role</h1>
                                                            <h2 class="red">
                                                                @foreach($student->user->roles as $role)
                                                                    {{ $role->name }}
                                                                @endforeach
                                                            </h2>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="activity-desk">
                                                            <h1>Class</h1>
                                                            <h2 class="red">{{ $student->Class->name }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Class Roll</h1>
                                                            <h2 class="red">{{ $student->roll_number }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Age</h1>
                                                            <h2 class="red">{{ $student->age }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Gender</h1>
                                                            <h2 class="red">{{ $student->gender }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Birth day</h1>
                                                            <h2 class="red">{{ $student->date_of_birth }}</h2>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-act">
                                                <h1>About Parent</h1>
                                                <div class="activity-icon terques">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="activity-desk">
                                                            <h1>Name</h1>
                                                            <h2 class="red">{{ $student->parent->user->name }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Email</h1>
                                                            <h2 class="red">{{ $student->parent->user->email }}</h2>
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h1>Phone</h1>
                                                            <h2 class="red">{{ $student->parent->phone }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Address</h1>
                                                            <h2 class="red">{{ $student->parent->address }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Role</h1>
                                                            <h2 class="red">
                                                                @foreach($student->parent->user->roles as $role)
                                                                    {{ $role->name }}
                                                                @endforeach
                                                            </h2>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="activity-desk">
                                                            <h1>Job</h1>
                                                            <h2 class="red">{{ $student->parent->job }}</h2>
                                                        </div>


                                                        <div class="activity-desk">
                                                            <h1>Age</h1>
                                                            <h2 class="red">{{ $student->parent->age }}</h2>
                                                        </div>

                                                        <div class="activity-desk">
                                                            <h1>Gender</h1>
                                                            <h2 class="red">{{ $student->parent->gender }}</h2>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="settings" class="tab-pane ">
                                    <div class="position-center">
                                        <div class="prf-contacts sttng">
                                            <h2>  Personal Information</h2>
                                        </div>
                                        <form class="form-horizontal" role="form" method="post" action="{{ route('students.update', $student->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label for="name" class="col-lg-2 col-sm-2 control-label">Name <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                                <div class="col-lg-10">
                                                    <input type="text" value="{{ $student->user->name }}" name="name" class="form-control" id="name" placeholder="Name">
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
                                                    <input type="email" value="{{ $student->user->email }}"  name="email" class="form-control" id="inputEmail1" placeholder="Email">
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
                                                    <input type="password" class="form-control"  name="password" id="inputPassword1" placeholder="Password">
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
                                                    <input type="text" value="{{ $student->phone }}" name="phone" class="form-control" id="phone" placeholder="Phone">
                                                    @error('phone')
                                                    <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSuccess" class="col-lg-2 col-sm-2 control-label">Parent <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                                <div class="col-lg-10">
                                                    <select name="parent_id" class="form-control m-bot15">
                                                        <option value="">===>Choose Parents===></option>
                                                        @foreach($parents as $parent)
                                                            <option {{ $student->parent_id == $parent->id ? 'selected' : '' }}  value="{{ $parent->id }}">{{ $parent->user->name }}</option>
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
                                                <label for="parent_phone" class="col-lg-2 col-sm-2 control-label">Parent Phone <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                                <div class="col-lg-10">
                                                    <input type="text" value="{{ $student->parent->phone }}" name="parent_phone" class="form-control" id="parent_phone" placeholder="Parent Phone">
                                                    @error('parent_phone')
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
                                                            <option {{ $student->class_id == $class->id ? 'selected' : '' }} value="{{ $class->id }}">{{ $class->name }}</option>
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
                                                <label for="roll_number" class="col-lg-2 col-sm-2 control-label">Roll No <sup class="text-danger" style="font-size: 9px"> <i class="fa fa-asterisk"></i> </sup></label>
                                                <div class="col-lg-10">
                                                    <input type="text" value="{{ $student->roll_number }}" name="roll_number" class="form-control" id="roll_number" placeholder="Class Roll Number">
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
                                                    <input type="text" value="{{ $student->age }}" name="age" class="form-control" id="age" placeholder="Age">
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
                                                        <input {{ $student->gender == 'male' ? 'checked' : '' }} tabindex="3" type="radio" checked value="male" name="gender">
                                                        <label>Male</label>
                                                    </div>

                                                    <div class="radio square-green ">
                                                        <input {{ $student->gender == 'female' ? 'checked' : '' }} tabindex="3" type="radio" value="female"  name="gender">
                                                        <label>Female </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="date_of_birth" class="col-lg-2 col-sm-2 control-label">Birth day </label>
                                                <div class="col-lg-10">
                                                    <input type="date" value="{{ $student->date_of_birth }}" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Birth day">
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
                                                    <textarea name="address" id="address" cols="30" class="form-control" rows="5"> {{ $student->address }}  </textarea>
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
