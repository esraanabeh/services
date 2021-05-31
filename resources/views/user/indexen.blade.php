
<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>
            <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/all.css">
    <link rel="stylesheet" href="http://reampayment.roqay.solutions/ream/home/css/styles.css">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    
    <script src="http://reampayment.roqay.solutions/ream/home/js/jquery.min.js"></script>
    <script src="http://reampayment.roqay.solutions/ream/home/js/bootstrap.min.js"></script>
    <script src="http://reampayment.roqay.solutions/ream/home/js/scripts.js"></script>
</head>
<body  class="ltr" >

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
                                                    <a class="lang-lnk" href="user"> عربي </a>
                        
                        {{-- <a target="_blank" href="https://www.facebook.com/reamkwt/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/ream_kuwait"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/ream_kuwait"><i class="fab fa-instagram"></i></a> --}}
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
        
    <h2> services</h2>
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

                        <h4 class="m-0 text-white">{{$category['nameen']}}</h4>
                        
                        
                      
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
                            <h6 class="m-0 service-title"> {{$Subcat['nameen']}}</h6>
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
            <button type="submit"   class="btn btn-primary btn-lg disabled complete-submit">complete data</button>
        </div>
      

    </form>


</div>





</section>
    </section>
    <footer id="main-footer" >
        <div id="footer-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-2">
                        <ul class="footer-lnks">
                         
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <img class="footer-logo" src="http://reampayment.roqay.solutions/ream/home/images/logo-ream.png" >
                        <div class="footer-social">
                            {{-- <a target="_blank" href="https://www.facebook.com/reamkwt/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/ream_kuwait"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/ream_kuwait"><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 text-right">
                        {{-- <p style=" direction: ltr; "><i class="fas fa-phone"></i> +9651840888</p>
                        <p style=" direction: ltr; "><i class="fas fa-fax"></i> +96522286899</p>
                        <p style=" direction: ltr; "><i class="fas fa-map-marker"></i>
                            Kuwait - east - khaled bin waleed st. - engazat tower level 3, 11
                        </p> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            {{-- <div class="container">
                                    <p class="m-0 text-center">
                        Copyright © Ream 2021. | Designed & Developed by <a  style="color: #cba876" href="https://www.roqay.com.kw" target="_blank">Roqay</a>
                    </p>
                
            </div> --}}
        </div>
    </footer>

</div>
</body>
<script>
    // $('.service-check-input').click(function () {
    //     if ($('input[name="subcat_id"]:checked').length > 0) {
    //         $(".complete-submit").removeAttr('disabled')  
    //     }else{
    //         $(".complete-submit").attr('disabled','disabled')            
    //     }
    // });
    // $('#close-video').click(function(){
    //     $('.video-container').fadeOut();
    // });
</script>
</html>