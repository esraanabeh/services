@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Edit service</p>

        <form method="POST"  action="{{ route('service.update',$service->id) }}" enctype="multipart/form-data">
            @method('PATCH')
           @include('service.partials.form')
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>


@endsection