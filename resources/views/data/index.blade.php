@extends('layouts.admin')

@section('title')
data of user
@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <h1 class=float-left>data of user</h1>
      <a class="btn btn-sm btn-success float-right" href="{{route('data.create' )}}"role="button">create</a>
  
  
    </div>
  
  </div>
  
  
  
  <div class="card">
  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">companyname</th>
              <th scope="col">email</th>
              <th scope="col">phone</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $data)
  
              <tr>
                  <th scope="row">{{$data->id}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->companyname}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->phone}}</td>
                  
                  


  
  
                </tr>
                  
              @endforeach
           
            
          </tbody>
        </table>
  
  </div>
  @endsection