@extends('backend.master.master')

@section('title', 'Edit')

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
                            Role Update
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">

                            @include('backend.message.message')

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{ route('role.update', ['role' => $role->id]) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="name" value="{{ $role->name }}" name="name" type="text" />
                                            @error('name')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Permission</label>
                                        <div class="col-sm-8 icheck ">
                                            <div class="flat-green single-row">
                                                @foreach($permissions as $permission)
                                                    <div class="radio ">
                                                        <input type="checkbox"
                                                               @foreach($role->permissions as $permi)
                                                                   {{ $permi->id == $permission->id ? 'checked' : '' }}
                                                               @endforeach
                                                               name="permission_id[]" value="{{ $permission->id }}">
                                                        <label>{{ $permission->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Update</button>
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
