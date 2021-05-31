@extends('layouts.admin') 

@section('title')

{{__('lang.service')}}
@endsection

@section('content')



<div class="row">
    <div class="col-12">
      <h1 class=float-left>{{__('lang.service')}}</h1>
      <a class="btn btn-sm btn-success float-right" href="{{route('service.create' )}}"role="button">{{__('lang.Create')}}</a>
  
  
    </div>
  
  </div>
  
  
  
  <div class="card">
  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('lang.#')}}</th>
              <th scope="col">{{__('lang.Name')}}</th>
              
              
              <th scope="col">{{__('lang.count')}}</th>
              <th>{{__('lang.subcatname')}}</th>
              
            </tr>
          </thead>
          <tbody>
              @foreach ($service as $service)
  
              <tr>
                  <th scope="row">{{$service->id}}</th>
                  <td>{{$service->name}}</td>
                  
                  <td>{{$service->count}}</td>
                  <td>{{$service->subcatname}}</td>
                  


                  
                  <td>
                    <a class="btn btn-sm btn-primary" href="{{route('service.edit' ,$service->id)}}"role="button">{{__('lang.Edit')}}</a> 

                    
                    <form id="delete-service-fprm-{{$service->id}}" action="{{route('service.destroy',$service->id)}}"method="POST" >
                      <button class="btn btn-danger" type="submit"> {{__('lang.Delete')}}</button>
                      
                      {{csrf_field()}}
                      @method("DELETE")
                    </form>

                    
                    
                   
                  </td>
  
  
                </tr>
                  
              @endforeach
           
            
          </tbody>
        </table>
  
  </div>


  @endsection 