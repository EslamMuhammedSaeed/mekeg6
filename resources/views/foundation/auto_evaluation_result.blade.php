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
    <link rel="stylesheet" href="{{ asset('css/autoEvalResult.css') }}">
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
         <main class="main-page mr-3">
            <div class="evaluation-form-step">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="results-main-title color">التقييم الفني</div>
                </div>
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="results-container">
                        <div class="d-flex flex-wrap justify-content-evenly total-results-sections">
                            <div class="d-flex flex-wrap result-container">
                                <div class="result-title color">التقييم الفني</div>
                                <div class="d-flex align-items-center">
                                    <div class="large-box">
                                    <span class="large-box-text box-text-font"
                                          id="box1-large-text">35</span>
                                    </div>
                                    <div class="small-box">
                                        <div class="small-box-text box-text-font" id="box1-small-text" style="font-size: 20px">
                                            {{$foundation->autoEvaluationTech}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap result-container">
                                <div class="result-title color">التقييم المالي</div>
                                <div class="d-flex align-items-center">
                                    <div class="large-box">
                                    <span class="large-box-text box-text-font"
                                          id="box2-large-text">65</span>
                                    </div>
                                    <div class="small-box">
                                        <div class="small-box-text box-text-font" id="box2-small-text" style="font-size: 20px">
                                            {{$foundation->autoEvaluationFin}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap result-container">
                                <div class="result-title color"> الإجمالي</div>
                                <div class="d-flex align-items-center">
                                    <div class="large-box">
                                    <span class="large-box-text box-text-font"
                                          id="box3-large-text" >100</span>
                                    </div>
                                    <div class="small-box">
                                        <div class="small-box-text box-text-font" id="box3-small-text" style="font-size: 20px">
                                            {{$foundation->autoEvaluationTotal}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total-container small-margin-top">
                        <div class="upper-text grey-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-exclamation-circle-fill"
                                 viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                             نسبة النجاح <span id="success-precentage">{{$foundation->autoEvaluationTotal}}</span>%
                        </div>
                        <div class="total-inner-container">
                            <div class="inner-lg-btn">
                                <div class="total-bts-text">
                                    فئة التصنيف
                                </div>
                                <div id="eval-category" class="total-btn-container d-flex align-items-center">
                                    {{$foundation->autoEvaluationClass}}
                                </div>
                            </div>
                        </div>
            
            
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="second-title color">تفاصيل التقييم والتدخلات المقترحة</div>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="second-title-subTitle color">نتيجة التقييم الفني</div>
                </div>
                <div class="row results-section">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الأول: البيانات الأساسية</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box4-large-text">19</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box4-small-text">
                                    {{$foundation->autoEvaluationSec1}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الثاني: نظام العضوية</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box5-large-text">1</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box5-small-text">
                                    {{$foundation->autoEvaluationSec2}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الثالث: إدارة البرامج و المشروعات </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box6-large-text">9</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box6-small-text">
                                    {{$foundation->autoEvaluationSec3}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الرابع: إدارة الموارد البشرية</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box7-large-text">2</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box7-small-text">
                                    {{$foundation->autoEvaluationSec4}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الخامس: نظام المعلومات و التوثيق</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box8-large-text">2</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box8-small-text">
                                    {{$foundation->autoEvaluationSec5}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم السادس : نظام القيادة واتخاذ القرار</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box9-large-text">2</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box9-small-text">
                                    {{$foundation->autoEvaluationSec6}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="second-title-subTitle color large-margin-top">نتيجة التقييم المالي</div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم السابع: النظام المالي</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box10-large-text">27</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box10-small-text">
                                    {{$foundation->autoEvaluationSec7}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم الثامن : الدفاتر المالية</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box11-large-text">14</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box11-small-text">
                                    {{$foundation->autoEvaluationSec8}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم التاسع : الرقابة الداخلية</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box12-large-text">14</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box12-small-text">
                                    {{$foundation->autoEvaluationSec9}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row results-section d-flex">
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-title">القسم العاشر : التقارير المالية
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 sections-buttons">
                        <div class="d-flex align-items-center">
                            <div class="large-box large-btn-small-version">
                                    <span class="large-box-text box-text-font"
                                          id="box13-large-text">10</span>
                            </div>
                            <div class="small-box small-btn-small-version">
                                <div class="small-box-text box-text-font" id="box13-small-text">
                                    {{$foundation->autoEvaluationSec10}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </main>
        <!--end main section-->





        
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

