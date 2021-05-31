
    @csrf
    <div class="input-group mb-3">
        <input id="namear" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="namear" 
        value="{{ old('name') }}  @isset($service) {{$service->namear}}@endisset " required autocomplete="namear" autofocus>       
                 <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
        </div>
        @error('namear')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="input-group mb-3">
        <input id="nameen" type="text" placeholder="name in english" class="form-control @error('name') is-invalid @enderror" name="nameen" 
        value="{{ old('name') }}  @isset($service) {{$service->nameen}}@endisset " required autocomplete="nameen" autofocus>       
                 <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
        </div>
        @error('nameen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group m-0">
        <div class="service-item-quantity-details">
            <a class="increase-quantity quantity-control"><i class="fas fa-plus"></i></a>
            <input type="number" name="count" class="form-control" value="1">
            <a class="decrease-quantity quantity-control"><i class="fas fa-minus"></i></a>
        </div>
        
    </div>
{{-- 
    <div class="input-group mb-3">
        <input id="subcatnamear" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="subcatnamear" 
        value="{{ old('name') }}  @isset($service) {{$service->subcatnamear}}@endisset " required autocomplete="subcatnamear" autofocus>       
                 <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
        </div>
        @error('subcatnamear')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <input id="subcatnameen" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="subcatnameen" 
        value="{{ old('name') }}  @isset($service) {{$service->subcatnameen}}@endisset " required autocomplete="subcatnameen" autofocus>       
                 <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
        </div>
        @error('subcatnameen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> --}}

    <div class="form-group">
        <label class="col-sm-2 control-label">subcat_id</label>
        <div class="col-sm-12">
            <textarea  name="subcat_id" required="" placeholder="subcat_id" class="form-control"></textarea>
        </div>

    </div>
   
    </div>
    
    </div>
    
    </div>
    
    <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary btn-block">Add service</button>
    </div>
   
    
    
   