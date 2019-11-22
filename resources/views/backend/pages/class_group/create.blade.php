@extends('backend.master.master')

@section('title', 'create Class Group')

@push('css')

    <link href="{{ asset('backend/js/iCheck/skins/flat/green.css') }}" rel="stylesheet">

@endpush


@section('mainContent')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Class Group Create
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">

                          @include('backend.message.message')

                                <div class="form">
                                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{ route('class_groups.store') }}">
                                        @csrf
                                        <div class="form-group ">
                                            <label for="class_group_name" class="control-label col-lg-3">Class Group Name</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="class_group_name" name="class_group_name" type="text" />
                                                @error('class_group_name')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-8 icheck ">
                                                <div class="flat-green single-row">
                                                    <div class="radio ">
                                                        <input type="checkbox" name="status" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Create</button>
                                                <a href="{{ route('class_groups.index') }}" class="btn btn-default">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>

@endsection



@push('script')


    <script src="{{ asset('backend/js/iCheck/jquery.icheck.js') }}"></script>

    <script src="{{ asset('backend/js/icheck-init.js') }}"></script>
@endpush
