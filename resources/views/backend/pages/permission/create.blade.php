@extends('backend.master.master')

@section('title', 'create')

@push('css')


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

                            @include('backend.message.message')

                            <form class="form-horizontal bucket-form" method="post" action="{{ route('permission.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-3 control-label col-lg-3" >Name <sup class="text-danger">*</sup> </label>
                                    <div class="col-lg-6">
                                        <div class="input-group m-bot15">
                                            <input type="text" name="name" placeholder="Permission name" required autofocus class="form-control">
                                            @error('name')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">CREATE!</button>
                                              </span>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>

@endsection



@push('script')

@endpush
