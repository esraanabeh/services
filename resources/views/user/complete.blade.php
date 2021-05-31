
<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>services</title>
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
    
    use App\Models\Subcat;
    $Subcats = Subcat::Subcats();
     use App\Models\Service;
    $services = Service::latest()->get();
        
    //     ?>


<div class="main-wrapper">
    <header id="main-header"  >
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-7 text-right">
                                                    <a class="lang-lnk" href="completeen">English </a>
                        
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
                                <a class="nav-link" href="user">خدمات </a>
                            </li>
                            

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="">
        <div class="container">
        
            <form action="/data_store" method="GET">
          {{-- <input type="hidden" name="_token" value="NZ7hCuKnguYcVQBnYKlrwCUmwpxvv3UkYixUKs43"> --}} 
                      <div class="accr-blk accr-blk-first"> 
                <div class="accr-blk-head">
                    <h5 class="m-0"><span class="num">1</span> <span class="tit">الخدمات</span></h5>
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
                        <h5 class="m-0">{{$Subcat->namear}}</h5>
                    </div>

       
                    <div class="service-items-container">

                    @foreach($services as $service)
                                                <div class="service-item-quantity">

                                        
                            <div class="service-item-quantity-title">
                                
                                <h6 class="m-0">{{$service->namear}}(</h6>
                                
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
                    <h5 class="m-0"><span class="num">2</span> <span class="tit">بياناتك الشخصية</span></h5>
                    <i class="fas fa-sort-down"></i>
                </div>
                
                <div class="accr-blk-body form-plain-style">
                    {{-- <form action="/data_store" method="GET"> --}}
                    <div class="personal-info">
                        <div class="form-group">
                            <label>الاسم*</label>
                            <input required name="name" type="text" class="form-control" placeholder="الاسم">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>اسم الشركة / اسم الجهة*</label>
                            <input required name="companyname" type="text" class="form-control" placeholder="اسم الشركة / اسم الجهة">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>البريد الالكتروني*</label>
                            <input required name="email"  type="email" class="form-control" placeholder="البريد الالكتروني">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>الهاتف*</label>
                            <input required name="phone" type="number" class="form-control" placeholder="الهاتف">
                            <div class="invalid-feedback">
                                
                                
                            </div>
                            {{-- <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg order-submit">ادخل</button>
                            </div> --}}
                        </div>
                    </div>
                {{-- </form> --}}
                </div>
               
            </div>
            
           
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg order-submit">تاكيد</button>
            </div>
        
    {{-- </form> --}}
</div>

    

    </section>
    <footer id="main-footer" >
        <div id="footer-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-2">
                        {{-- <ul class="footer-lnks">
                            {{-- <li><a href="http://reampayment.roqay.solutions/ream">خدمات ريم</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/faq">الاسئة الشائعة</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/contact">اتصل بنا</a></li>
                            <li><a href="http://reampayment.roqay.solutions/ream/privacy">الخصوصية</a></li> --}}
                        {{-- </ul> --}} 
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <img class="footer-logo" src="{{asset('image/unnamed.png')}}" >
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
                            الكويت - شرق - شارع خالد بن الوليد - برج انجازات دور 3 ، 11
                        </p> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            {{-- <div class="container">
                                    <p class="m-0 text-center">
                        جميع الحقوق محفوظة © شركة ريم 2021. | تصميم وتطوير  <a style="color: #cba876" href="https://www.roqay.com.kw" target="_blank">Roqay</a>
                    </p>
                
            </div> --}}
        </div>
    </footer>

</div>
</body>

</html>