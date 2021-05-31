
    @csrf
    <div class="input-group mb-3">
        <input id="namear" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="namear" 
        value="{{ old('name') }}  @isset($Subcat) {{$Subcat->namear}}@endisset " required autocomplete="namear" autofocus>       
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
        value="{{ old('name') }}  @isset($Subcat) {{$Subcat->nameen}}@endisset " required autocomplete="nameen" autofocus>       
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

    <div class="form-group">
        <label class="col-sm-2 control-label">category_id</label>
        <div class="col-sm-12">
            <textarea  name="category_id" required="" placeholder="category_id" class="form-control"></textarea>
        </div>
    </div>
    
  
    <div class="form-group">
        <label for="file">choose image</label> 
        <div class="custom-file">
            <input type="file" name="image" class="form-control" onchange="previewFile(this)">
            <img  id="previewImg" alt="image" style="max-width:130px;margin-top:20px;">
            
        </div>



        {{-- <div class="input-group mb-3">
            <input id="categorynamear" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="categorynamear" 
            value="{{ old('name') }}  @isset($Subcat) {{$Subcat->categorynamear}}@endisset " required autocomplete="categorynamear" autofocus>       
                     <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            @error('categorynamear')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>






        <div class="input-group mb-3">
            <input id="categorynameen" type="text" placeholder="name in english" class="form-control @error('name') is-invalid @enderror" name="categorynameen" 
            value="{{ old('name') }}  @isset($Subcat) {{$Subcat->categorynameen}}@endisset " required autocomplete="categorynameen" autofocus>       
                     <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            @error('categorynameen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}


    
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    
    </div>
    
    </div>
    
    <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary btn-block">Add Subcat</button>
    </div>
   
    
    
    <script>
        function previewFile(input){
            var image=$('input[type=file]').get(0).files[0];
            if(image){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(image);
            }
           
        }
        </script>