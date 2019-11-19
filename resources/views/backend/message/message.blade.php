@if(session('success'))
    <p class="alert alert-success"><strong> Success! </strong>  {{ session('success') }}</p>
@endif

@if(session('error'))
    <p class="alert alert-danger"><strong> Warning! </strong>  {{ session('error') }}</p>
@endif
