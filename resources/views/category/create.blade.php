@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Add new category</p>

        <form   action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
         
           @include('category.partials.form' ,['create'=>true])
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>

@endsection