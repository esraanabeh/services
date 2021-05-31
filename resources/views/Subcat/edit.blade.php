@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Edit Subcat</p>

        <form method="POST"  action="{{ route('subcat.update',$subcat->id) }}" enctype="multipart/form-data">
            @method('PATCH')
           @include('Subcat.partials.form')
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>


@endsection