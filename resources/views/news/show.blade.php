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
    
    <!--start header section-->
    {{-- <header class="container-fluid" >
       <div class="mt-5 mb-3 text-center" style="max-height: 200px">
           <h2 class="mb-3">{{$news->title}}</h2>
           <div class="row">
               <div class="col-12">
                    <img  src="{{Voyager::image($news->image)}}" alt="img">
               </div>
                 

           </div>

            
            
        
       </div>
    </header> --}}
    <header >
        <section class="container text-center mb-5 ">
            <h2 class=" mt-5 mb-2">{{$news->title}}</h2>
            <div class="banner1 w-100">
                {{-- <div class="overlay"></div> --}}
                <img class="img-fluid shadow-md" src="{{Voyager::image($news->image)}}" alt="img" style="border-radius:10px;border: 6px solid rgba(204, 203, 203, 0.712)">

            </div>
      </section>
    </header>
    <!--end header section-->
    <main>
        <article class="main-article container">
           <div class="row">
               <div class="col-12">
                <div class="content">
                    <p class="text">
                       {{$news->content}}
                    </p>
                    
                </div>
               </div>
           </div>
        </article>
    </main>
    <!--start js files-->
    <script src="{{asset('/js/all.min.js')}}"></script><!--FontAwesome-->
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>