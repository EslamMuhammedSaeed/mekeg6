<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""> <!--Add site description here!-->
    <title>Misr El-Kheir</title>
    <!--start css files-->
    <link rel="shortcut icon" href="{{ asset('images/mekeg_logo.png') }}" type="image/png">
    <!--start css files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Luckiest+Guy&family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    
    <link rel="stylesheet" href="{{asset('css/lab.css')}}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- <link rel="stylesheet" href="../style/all.min.css"><!--FontAwesome-->
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/main.css"> --}}
    <!--end css files-->
</head>
<body class="text-right">
    <!--Start Navbar section-->
    
    @include('landing_layout.inc.nav')

    <!--End Navbar section-->
    
    <header >
        <section class="container">
            <div class="banner w-100">
                <div class="overlay"></div>
                <h2>أﺧﺒﺎر
                    ﻣﺨﺘﺒﺮ ﺗﻄﻮﻳﺮ اﺩﺍء اﻟﻤﻨﻈﻤﺎت اﻟﺎﻫﻠﻴﺔ</h2>
            </div>
      </section>
    </header>
     <!--end header section-->
    <main>
        <section class="articles-new container">
            <div class="row">
                @forelse ($news as $item)
                <div class="col-12 mobile-flex">
                    <div class="card card-selector mb-3" style="max-width: 100%">
                        <a href="{{route('news.show',$item->id)}}"  class="hidden anchor-selector"></a>
                        <div class="row g-0">
                        <div class="col-md-3 col-12">
                            <div class="img-holder">
                                <img class="w-100 h-100" src="{{Voyager::image($item->image)}}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div href="{{route('news.show',$item->id)}}" class="card-body">
                                
                            <div class="card-heading">
                                <a href="{{route('news.show',$item->id)}}">
                                <h5 class="card-title">{{$item->title}}</h5>
                                </a>
                                {{-- <div class="icon-holder">      
                                        <!-- Button trigger modal -->
                                        <button type="button" class="share-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg width="31" height="33" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.6108 22.2043C24.9372 22.2069 24.2712 22.3455 23.6525 22.6119C23.0339 22.8782 22.4755 23.2668 22.0108 23.7543L9.82076 17.6543C10.1206 16.7451 10.1206 15.7636 9.82076 14.8543L22.0308 8.64435C22.9053 9.56597 24.0913 10.1295 25.3583 10.2254C26.6252 10.3213 27.8825 9.94272 28.8858 9.16324C29.8892 8.38376 30.5669 7.25907 30.7872 6.00777C31.0075 4.75647 30.7546 3.46796 30.0778 2.39268C29.4011 1.3174 28.3486 0.532167 27.1251 0.189609C25.9016 -0.152949 24.5945 -0.0283607 23.4577 0.539157C22.321 1.10668 21.4359 2.07658 20.9744 3.26035C20.5129 4.44412 20.508 5.75719 20.9608 6.94434L8.87076 13.0943C8.21781 12.2958 7.33385 11.7187 6.34007 11.4423C5.34629 11.1658 4.29132 11.2035 3.31979 11.5501C2.34826 11.8967 1.50771 12.5354 0.913373 13.3785C0.319035 14.2216 0 15.2278 0 16.2593C0 17.2909 0.319035 18.2971 0.913373 19.1402C1.50771 19.9833 2.34826 20.6219 3.31979 20.9686C4.29132 21.3152 5.34629 21.3529 6.34007 21.0764C7.33385 20.8 8.21781 20.2229 8.87076 19.4243L20.9308 25.4943C20.727 26.0415 20.622 26.6205 20.6208 27.2043C20.6208 28.1933 20.914 29.16 21.4634 29.9822C22.0128 30.8044 22.7937 31.4453 23.7073 31.8237C24.621 32.2022 25.6263 32.3012 26.5962 32.1083C27.5661 31.9153 28.457 31.4391 29.1563 30.7399C29.8556 30.0406 30.3318 29.1497 30.5247 28.1798C30.7176 27.2099 30.6186 26.2046 30.2402 25.2909C29.8617 24.3773 29.2209 23.5964 28.3986 23.047C27.5764 22.4976 26.6097 22.2043 25.6208 22.2043H25.6108Z" fill="#F2881B"/>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="content">
                                                        <h6>Share on social media:</h6>
                                                        <a href="" class="text-capitalize copy">copy url</a>
                                                        <div class="icon-holder">  
                                                            <a href="" class="twitter">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                            <a href="" class="facebook">
                                                                <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>                  
                                </div> --}}
                            </div>
                            <div class="button-holder">
                                <p class="date"> {{$item->created_at}} </p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>  
                @empty
                    
                @endforelse
                
            </div>
        </section>
    </main>
    <!--start js files-->
    <script src="{{asset('/js/all.min.js')}}"></script><!--FontAwesome-->
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>