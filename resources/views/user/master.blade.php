<!DOCTYPE html>
<html dir="rtl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{ asset('images/mekeg_logo.png') }}" type="image/png">
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
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style>


</style>
</head>
<body class="text-right">
@include('foundation.inc.nav')
<div class="container-fluid">

    <div id="mySidebar" class="sidebar col-col-hidden" onmousemove="openNav()" onmouseout="closeNav()">
        <div class="container-fluid  mx-0 nav-header text-right text-white">
            <img class="" width="40px" height="40px" src="images/default.png" alt="">
            <p class="hide">اسم المؤسسة</p>
            
        </div>
      {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> --}}
        <div class="side-link">
            <a href="#">
                <i class="fa fa-home" aria-hidden="true" style="font-size: 18px"></i>
                <span class="nav-col">الصفحة الرئيسية</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span class="nav-col">الإشعارات</span>
            </a>
        </div>
         <div class="side-link">
            <a href="#">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <span class="nav-col">إدارة ملف المؤسسة</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-col">إدارة التقييم</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                <span class="nav-col">إدارة التدريب و بناء القدرات</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                <span class="nav-col">إدارة الاستشارات الفنية</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="nav-col">الدعم</span>
            </a>
        </div>
    </div>
    
    <div id="main">
      <button class="openbtn" onclick="openNav()" onmousemove="openNav()" onmouseout="closeNav()">☰</button>  
      <h2>Content</h2>
    </div>
</div>    





<script>
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
</script>

<script src="{{asset('/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html> 
