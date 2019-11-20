@extends('backend.master.master')

@section('title', 'create')

@push('css')


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
                                <form class="form-horizontal" role="form" method="post" action="{{ route('teacher.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-lg-2 col-sm-2 control-label">Name</label>
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
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
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
                                        <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
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
                                        <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone</label>
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
                                        <label for="subject" class="col-lg-2 col-sm-2 control-label">Subject</label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('subject') }}" name="subject" class="form-control" id="subject" placeholder="Subject">
                                            @error('subject')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="education" class="col-lg-2 col-sm-2 control-label">Education</label>
                                        <div class="col-lg-10">
                                            <input type="text" value="{{ old('education') }}" name="education" class="form-control" id="education" placeholder="Education">
                                            @error('education')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-lg-2 col-sm-2 control-label">Address</label>
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
                                            <a href="{{ route('teacher.index') }}" class="btn btn-default">Back</a>
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

@endpush
