@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Edit category</p>

        <form method="POST"  action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
            @method('PATCH')
           @include('category.partials.form')
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>


@endsection