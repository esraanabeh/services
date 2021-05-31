
<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>services</title>
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
    use App\Models\Subcat;
    $Subcats = Subcat::Subcats();
     use App\Models\Service;
    $services = Service::latest()->get();
        ?>
<div class="main-wrapper">
    <header id="main-header"  >
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-7 text-right">
                                                    <a class="lang-lnk" href="complete"> عربي </a>
{{--                         
                        <a target="_blank" href="https://www.facebook.com/reamkwt/"><i class="fab fa-facebook-f"></i></a>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="user.indexen"> Service</a>
                            </li>
                           

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="">
        <div class="container">
            <form method="HEAD" action="data.store" >
          {{-- <input type="hidden" name="_token" value="AEm9ACzAh533lgEznDJuCafcSGy2ks384R0wKufy"> --}}
                      <div class="accr-blk accr-blk-first">
                <div class="accr-blk-head">
                    <h5 class="m-0"><span class="num">1</span> <span class="tit">Services</span></h5>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="accr-blk-body">
                    @foreach($subcats as $Subcat)
                    <input type="hidden" name="subcat_id" value="{{$Subcat->id}}">
<div class="service-item-quantity-head">
    <div class="service-item-quantity-head-img">
        <?php $Subcat_image_path = 'image/'.$Subcat->image; ?>
        <img  src="{{asset($Subcat_image_path) }}" >
        </div>
    <h5 class="m-0">{{$Subcat->nameen}}</h5>
</div>


<div class="service-items-container">

@foreach($services as $service)
                            <div class="service-item-quantity">

                    
        <div class="service-item-quantity-title">
            
            <h6 class="m-0">{{$service->nameen}}(</h6>
            
        </div>
        
        <input type="hidden" name="service_id" value="{{$service->id}}">
        <div class="form-group m-0">
          
            <div class="service-item-quantity-details">
                <a class="increase-quantity quantity-control"><i class="fas fa-plus"></i></a>
                <input type="number" name="count" class="form-control" value="{{$service->count}}">
                <a class="decrease-quantity quantity-control"><i class="fas fa-minus"></i></a>
               
            </div>
             
            <div class="invalid-feedback text-center">
                invalid quantity
            </div>
        </div>
       
        <div class="remove-service">
            <a class="remove-service-e"><i class="fas fa-times-circle"></i></a>
        </div>
        
    </div>
    
      
    @endforeach
                        </div>
@endforeach
                    
                </div>
               
            </div>
            <div class="accr-blk">
                <div class="accr-blk-head">
                    <h5 class="m-0"><span class="num">2</span> <span class="tit">Personal Information</span></h5>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="accr-blk-body form-plain-style">
                    <div class="personal-info">
                        <div class="form-group">
                            <label>Name*</label>
                            <input required name="name" type="text" class="form-control" placeholder="Name">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Company Name / Organization Name*</label>
                            <input required name="company_name" type="text" class="form-control" placeholder="Company Name / Organization Name">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input required name="email"  type="email" class="form-control" placeholder="Email">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone*</label>
                            <input required name="mobile" type="number" class="form-control" placeholder="Phone">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg order-submit">Confirm</button>
            </div>
        </form>
</div>

    

    </section>
    <footer id="main-footer" >
        <div id="footer-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-2">
                        <ul class="footer-lnks">
                            <li><a href="http://reampayment.roqay.solutions/ream">Ream Service</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/faq">FAQ</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/contact">Contact Us</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/privacy">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <img class="footer-logo" src="http://reampayment.roqay.solutions/ream/home/images/logo-ream.png" >
                        <div class="footer-social">
                            <a target="_blank" href="https://www.facebook.com/reamkwt/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/ream_kuwait"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/ream_kuwait"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 text-right">
                        <p style=" direction: ltr; "><i class="fas fa-phone"></i> +9651840888</p>
                        <p style=" direction: ltr; "><i class="fas fa-fax"></i> +96522286899</p>
                        <p style=" direction: ltr; "><i class="fas fa-map-marker"></i>
                            Kuwait - east - khaled bin waleed st. - engazat tower level 3, 11
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                                    <p class="m-0 text-center">
                        Copyright © Ream 2021. | Designed & Developed by <a  style="color: #cba876" href="https://www.roqay.com.kw" target="_blank">Roqay</a>
                    </p>
                
            </div>
        </div>
    </footer>

</div>
</body>

</html>