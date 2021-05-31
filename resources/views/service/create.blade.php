@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Add new service</p>

        <form   action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
         
           @include('service.partials.form' ,['create'=>true])
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>

@endsection