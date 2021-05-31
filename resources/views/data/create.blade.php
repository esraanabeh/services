@extends('layouts.admin')

@section('title')
data of user
@endsection

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        {{-- <p class="login-box-msg">Add new category</p> --}}

        {{-- <form   action="{{ route('data.store') }}" method="POST" id="data" enctype="multipart/form-data"> --}}
         
           @include('user.complete' ,['create'=>true])
        {{-- </form> --}}
        
    </div>
    <!-- /.Register-card-body -->
</div>

@endsection