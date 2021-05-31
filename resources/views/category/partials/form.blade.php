
    @csrf
    <div class="input-group mb-3">
        <input id="namear" type="text" placeholder="name in arabic" class="form-control @error('name') is-invalid @enderror" name="namear" 
        value="{{ old('name') }}  @isset($category) {{$category->namear}}@endisset " required autocomplete="namear" autofocus>       
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
        value="{{ old('name') }}  @isset($category) {{$category->nameen}}@endisset " required autocomplete="nameen" autofocus>       
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
        <label for="file">choose image</label> 
        <div class="custom-file">
            <input type="file" name="image" class="form-control" onchange="previewFile(this)">
            <img  id="previewImg" alt="image" style="max-width:130px;margin-top:20px;">
            
        </div>
    
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    
    </div>
    
    </div>
    
    <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary btn-block">Add category</button>
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