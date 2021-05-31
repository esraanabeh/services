@extends('layouts.admin') 

@section('title')

{{__('lang.categories')}}
@endsection

@section('content')



<div class="row">
    <div class="col-12">
      <h1 class=float-left>{{__('lang.categories')}}</h1>
      <a class="btn btn-sm btn-success float-right" href="{{route('category.create' )}}"role="button">{{__('lang.Create')}}</a>
  
  
    </div>
  
  </div>
  
  
  
  <div class="card">
  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('lang.#')}}</th>
              <th scope="col">{{__('lang.Name')}}</th>
              
              <th scope="col">{{__('lang.image')}}</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($category as $category)
  
              <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                  
                  <td> <img src=" {{asset('image')}}/{{$category->image}}" style="max-width:60px;"/></td>



                  
                  <td>
                    <a class="btn btn-sm btn-primary" href="{{route('category.edit' ,$category->id)}}"role="button">{{__('lang.Edit')}}</a> 

                    
                    <form id="delete-category-fprm-{{$category->id}}" action="{{route('category.destroy',$category->id)}}"method="POST" >
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