@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Add new Subcat</p>

        <form   action="{{ route('subcat.store') }}" method="POST" enctype="multipart/form-data">
         
           @include('Subcat.partials.form' ,['create'=>true])
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>

@endsection