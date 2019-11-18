@extends('backend.master.master')

@section('title', 'create')

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
                            Permission Create
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">

                            @if(session('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                            @endif

                                <div class="form">
                                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{ route('role.store') }}">
                                        @csrf
                                        <div class="form-group ">
                                            <label for="firstname" class="control-label col-lg-3">Name</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="firstname" name="firstname" type="text" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Permission</label>
                                            <div class="col-sm-8 icheck ">
                                                <div class="flat-green single-row">
                                                @foreach($permisstions as $permission)
                                                        <div class="radio ">
                                                            <input type="checkbox" name="permission_id[]">
                                                            <label>{{ $permission->name }}</label>
                                                        </div>
                                               @endforeach
                                            </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
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
