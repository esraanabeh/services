{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>
    
    <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/all.css">
    <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/styles.css">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <script src="http://reampayment.roqay.solutions/ream/home/js/jquery.min.js"></script>
    <script src="http://reampayment.roqay.solutions/ream/home/js/bootstrap.min.js"></script>
    <script src="http://reampayment.roqay.solutions/ream/home/js/scripts.js"></script>
</head>
<body  dir="rtl" class="rtl" >

    <?php
    // use LaravelLocalization;
    use App\Models\Category;
    $Categories = Category::Categories();
    // echo "<pre>"; print_r($Categories);
        ?>


<div class="main-wrapper">
    <header id="main-header"  >
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-7 text-right">
                        <a class="lang-lnk" href="user.indexen"> English </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="header-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand" href="#"><img src="{{asset('image/unnamed.png')}}" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-center">
                         

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="">
        <section class="main-content">
<div class="container">
    <div style="width: 250px;margin: auto;">
        
    <h2>خدمات </h2>
    <br />
    </div>
                        
    
    <form action="/add_to_cart" method="GET">
       
        {{-- <input type="hidden" name="_token" value="HGtvArbCXdgGEGEwoTPLfQm5FFM59ngZDCKJVqgs"> --}}
                        <div class="depart-blk">
            <div class="depart-head">
                

                        @foreach($Categories as $category)
                        {{-- @if(count($category['subcats'])>0) --}}
                        <div class="depart-head-img">
                            <?php $category_image_path = 'image/'.$category['image']; ?>
                            <img  src="{{asset($category_image_path) }}" >
                            </div>

                        <h4 class="m-0 text-white">{{$category['namear']}}</h4>
                        
                        
                      
            </div>
       
              
            

            <div class="depart-details">
                <div class="row justify-content-center">
                    @foreach($category['subcats'] as $key=> $Subcat) 
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">      
                <div class="form-check">
                    <input class="form-check-input service-check-input" name="subcat_id" type="checkbox" value="{{$Subcat['id']}}" id="defaultCheck{{$Subcat['id']}}">
                    <label class="form-check-label service-check-label" for="defaultCheck{{$Subcat['id']}}">
                        <div class="service-container">
                            <div class="image-service-container">
                                <?php $Subcat_image_path = 'image/'.$Subcat['image']; ?>
                                <img src="{{asset($Subcat_image_path) }}" >
                            </div>
                            <h6 class="m-0 service-title"> {{$Subcat['namear']}}</h6>
                        </div>
                    </label>
                </div>
               </div>   
               
            {{-- </div> --}}
            @endforeach
        </div> 
      
        </div>
    </div>
        
        @endforeach
                <div class="text-center">
            <button type="submit"   class="btn btn-primary btn-lg disabled complete-submit">اكمال البيانات</button>
        </div>
      

    </form>

    <form action="/add_to_order" method="GET">
</div>
<pre>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-lg order-submit">my order</button>
</div> 
</form>                     


</body>

</html>