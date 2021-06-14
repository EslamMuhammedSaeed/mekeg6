
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 <head>
     <meta charset="UTF-8">
     {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Evaluation Form</title>

     <link rel="shortcut icon" href="{{ asset('images/mekeg_logo.png') }}" type="image/png">
     <!--start css files-->
     {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Luckiest+Guy&family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
     {{-- <link rel="stylesheet" href="{{asset('css/evaluationForm.css')}}">
     <link rel="stylesheet" href="{{asset('css/evaluationDetails.css')}}"> --}}
     <!--end css files-->
 </head>
 <body class="text-right">
 <!--nav-->
 <nav class="navbar navbar-expand-lg navbar-dark py-0 px-3 fixed-top" style="background-color: #034939">
    
    <a class="navbar-brand my-1 py-0 mr-2" href="#">
        <img class="mt-2 ml-3" width="70px" class="img-fuild" src="../images/logo.png">
    </a>
    
        
    
    
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-collapse collapse text-center" id="navbarColor01" style="">
        <span class="navbar-text">
            مختبر تطوير آداء المنظمات الأهلية
        </span>
      
        <ul class="navbar-nav mr-auto px-0 mt-0 text-center ">
            <li class="nav-item dropdown text-center">
              <form action="/logout" method="post">
                @csrf
                <div class="nav-link px-lg-3 text-white pt-0" id="navbardrop"  >
                  <input type="submit" value="تسجيل الخروج" style="color :white; background-color:#034939 ; border:0">
                  
                  <i class="fa fa-sign-out mr-1" aria-hidden="true" style="font-size: 15px"></i>
                </div>
              </form>
              
              
            </li> 

        </ul>
      
    </div>
</nav>
 <!--nav-->
 <!--start main section-->
<div class="container-fluid " style="margin-top: 76px">
    @include('foundation.inc.sidebar')
    <div id="main" class="px-0" style="margin-right: 65px">
         <main class="main-page">
            <div class="container-fluid">
                <div class="notifications-title"><h4>الإشعارات</h4></div>
                
        
                    @forelse ($notifications as $notification)
                    <div class="notification mt-5 mb-3 mx-3">
                        <p>{{$notification->content}}</p>
                    </div>  
                    @empty
                    <div class="notification my-3 mx-3">
                        <p>لا توجد إشعارات</p>
                    </div>
                    @endforelse
                    
              
        
                
            </div>
    
        </main>
        <!--end main section-->





        </main>
    </div>
</div>      
<!--end main section-->



<script>
var dropdownFlag = 0 ;    
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("mySidebar").style.display = "block";
  var orgTitle= document.querySelector(".nav-header p");
  var sidebarContainer = document.querySelector(".sidebar");
  sidebarContainer.classList.remove("col-col-hidden");
  sidebarContainer.classList.add("col-col");
  orgTitle.classList.remove("hide");
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "70px";
  document.getElementById("mySidebar").style.display = "block";
  var sidebarContainer = document.querySelector(".sidebar");
  sidebarContainer.classList.remove("col-col");
  sidebarContainer.classList.add("col-col-hidden");
  var orgTitle= document.querySelector(".nav-header p");
  orgTitle.classList.add("hide");
  

  
}
function dropdownToggle(){
    var dropdownContainer = document.getElementById("dropdownContainer");
    if(dropdownFlag == 0){
        dropdownContainer.classList.remove('d-none');
        dropdownFlag = 1;
    }else{
        dropdownContainer.classList.add('d-none');
        dropdownFlag = 0;
    }
    
}
function dropdownClose(){
    var dropdownContainer = document.getElementById("dropdownContainer");
    dropdownContainer.classList.add('d-none');
    dropdownFlag = 0;
}
function dropdownOpen(){
    var dropdownContainer = document.getElementById("dropdownContainer");
    dropdownContainer.classList.remove('d-none');
    dropdownFlag = 1;
}
</script>

<!--start js files-->
{{-- <script src="../js/jquery-3.6.0.min.js"></script> --}}
{{-- <script src="../js/all.min.js"></script> --}}
{{-- <script src="../js/bootstrap.min.js"></script> --}}
<!--<script src="../js/main.js"></script>-->

{{-- <script src="{{asset('/js/main2.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>     