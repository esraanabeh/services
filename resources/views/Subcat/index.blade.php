@extends('layouts.admin') 

@section('title')

{{__('lang.Subcat')}}
@endsection

@section('content')



<div class="row">
    <div class="col-12">
      <h1 class=float-left>{{__('lang.Subcat')}}</h1>
      <a class="btn btn-sm btn-success float-right" href="{{route('subcat.create' )}}"role="button">{{__('lang.Create')}}</a>
  
  
    </div>
  
  </div>
  
  
  
  <div class="card">
  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('lang.#')}}</th>
              <th scope="col">{{__('lang.Name')}}</th>
              <th>{{__('lang.categoryname')}}</th>
              <th scope="col">{{__('lang.image')}}</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($subcat as $Subcat)
  
              <tr>
                  <th scope="row">{{$Subcat->id}}</th>
                  <td>{{$Subcat->name}}</td>
                  <td>{{$Subcat->categoryname}}</td>
                  <td> <img src=" {{asset('image')}}/{{$Subcat->image}}" style="max-width:60px;"/></td>



                  
                  <td>
                    <a class="btn btn-sm btn-primary" href="{{route('subcat.edit' ,$Subcat->id)}}"role="button">{{__('lang.Edit')}}</a> 

                    
                    <form id="delete-Subcat-fprm-{{$Subcat->id}}" action="{{route('subcat.destroy',$Subcat->id)}}"method="POST" >
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