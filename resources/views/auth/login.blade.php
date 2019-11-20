
@extends('backend.master.master')

@section('title', 'Attendance')

@push('css')

    <link rel="stylesheet" href="{{ asset('backend/js/data-tables/DT_bootstrap.css') }}" />

@endpush


@section('mainContent')

    <body class="login-body">

    <div class="container">

        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <div class="user-login-info">
                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input placeholder="User Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="user-login-info">
                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input placeholder="User Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <label class="checkbox">
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </span>
                </label>
                <button type="submit" class="btn btn-lg btn-login btn-block">
                    {{ __('Login') }}
                </button>
            </div>
        </form>


    </div>

    </body>

@endsection



@push('script')

    <script src="{{ asset('backend/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/data-tables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/data-tables/DT_bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/table-editable.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });
    </script>

 {{--for tag delete--}}

    <script>
        function deleteStudent(id) {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    /* swalWithBootstrapButtons.fire(
                         'Deleted!',
                         'Your file has been deleted.',
                         'success'
                     )*/
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })


        }
    </script>



@endpush
