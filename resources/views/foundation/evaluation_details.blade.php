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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/evaluationForm.css')}}">
    <link rel="stylesheet" href="{{asset('css/evaluationDetails.css')}}">
    <!--end css files-->
</head>
<body>
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
      
        <ul class="navbar-nav mr-auto nav-left px-0 mt-0 text-center navbar-left ">
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
            <div class="title-container ">
                <div class="eval-details-title color text-center">تفاصيل التقييم والتدخلات
                    المقترحة
                </div>
                <div class="eval-details-subTitle d-flex justify-content-center color">التقييم الفني</div>
            </div>



            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الأول : البيانات الأساسية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec1}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech1 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول : البيانات الأساسية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول : البيانات الأساسية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول : البيانات الأساسية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول : البيانات الأساسية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول : البيانات الأساسية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الثانى : نظام العضوية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec2}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech2 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : نظام العضوية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : نظام العضوية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : نظام العضوية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : نظام العضوية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : نظام العضوية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الثالث : إدارة البرامج و المشروعات</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec3}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech3 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : إدارة البرامج و المشروعات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : إدارة البرامج و المشروعات")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : إدارة البرامج و المشروعات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : إدارة البرامج و المشروعات")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : إدارة البرامج و المشروعات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>


            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الرابع : إدارة الموارد البشرية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec4}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech4 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : إدارة الموارد البشرية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : إدارة الموارد البشرية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : إدارة الموارد البشرية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : إدارة الموارد البشرية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : إدارة الموارد البشرية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الخامس : نظام المعلومات و التوثيق</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec5}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech5 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : نظام المعلومات و التوثيق")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : نظام المعلومات و التوثيق")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : نظام المعلومات و التوثيق")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : نظام المعلومات و التوثيق")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : نظام المعلومات و التوثيق")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row mt-4">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalTechSec6}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsTech6 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>
            

        
            <div class="title-container">
                <div class="eval-details-subTitle d-flex justify-content-center color">التقييم المالي</div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الأول  : وجود نظام محاسبة و رقابة داخلية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">27</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec1}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(!$supportsFin1->count() == 0)
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <div class="row align-items-end each-section justify-content-center">
                        <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                            <div class="element-title color">العنصر</div>
                            <div class="element-container ">
                                @foreach ($foundation->supports as $support)
                                    @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                        <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                    @endif    
                                @endforeach
                                
        
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                            <div class="element-title color">التدخل</div>
                            <div class="element-container">
                                @foreach ($foundation->supports as $support)
                                    @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                        <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                    @endif    
                                @endforeach
                            </div>
                            
                        </div>
        
                        <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                            <div class="element-title  color">مؤشر القياس</div>
                            <div class="element-container ">
                                @foreach ($foundation->supports as $support)
                                    @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                        <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                    @endif    
                                 @endforeach
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                            <div class="element-title color">وسائل التحقق</div>
                            <div class="element-container ">
                                @foreach ($foundation->supports as $support)
                                     @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                        <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                    @endif    
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                            <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                            <div class="element-container ">
                                @foreach ($foundation->supports as $support)
                                    @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                        <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                    @endif    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div> --}}

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الأول  : وجود نظام محاسبة و رقابة داخلية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec1}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin1 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الأول  : وجود نظام محاسبة و رقابة داخلية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>


            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec2}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin2 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الثالث : النقدية(الخزينة و البنك)</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec3}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin3 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : النقدية(الخزينة و البنك)")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : النقدية(الخزينة و البنك)")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : النقدية(الخزينة و البنك)")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : النقدية(الخزينة و البنك)")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثالث : النقدية(الخزينة و البنك)")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الرابع : المخازن</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec4}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin4 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : المخازن")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : المخازن")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : المخازن")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : المخازن")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الرابع : المخازن")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الخامس : متابعة مصروفات الجمعية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec5}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin5 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : متابعة مصروفات الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : متابعة مصروفات الجمعية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : متابعة مصروفات الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : متابعة مصروفات الجمعية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الخامس : متابعة مصروفات الجمعية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم السادس : الأصول الثابتة</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec6}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin6 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : الأصول الثابتة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : الأصول الثابتة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : الأصول الثابتة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : الأصول الثابتة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السادس : الأصول الثابتة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم السابع : المشتريات و مصروفات الأنشطة</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec7}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin7 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السابع : المشتريات و مصروفات الأنشطة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السابع : المشتريات و مصروفات الأنشطة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السابع : المشتريات و مصروفات الأنشطة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السابع : المشتريات و مصروفات الأنشطة")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم السابع : المشتريات و مصروفات الأنشطة")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم الثامن : المبيعات و الإيرادات</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec8}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin8 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثامن : المبيعات و الإيرادات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثامن : المبيعات و الإيرادات")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثامن : المبيعات و الإيرادات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثامن : المبيعات و الإيرادات")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم الثامن : المبيعات و الإيرادات")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            <div class="row mb-5">
                <div class="col-lg-2 col-md-6 col-sm-12  d-flex justify-content-center ">
                    <div class="details-container">
                        <div class="details-title color"> القسم التاسع : التقارير المالية</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="large-box">
                                <span class="large-box-text box-text-font" id="box2-large-text">14</span>
                            </div>
                            <div class="small-box">
                                <div class="small-box-text box-text-font" id="box2-small-text">{{$foundation->evalFinSec9}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @forelse ($supportsFin9 as $item)
                {{-- @if(!$supportsFin2->count() == 0) --}}
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="row align-items-end each-section justify-content-center">
                            <div class="col-lg-2 col-md-6 col-sm-12 d-flex flex-wrap element-col">
                                <div class="element-title color">العنصر</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم التاسع : التقارير المالية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->element}}</div> 
                                        @endif    
                                    @endforeach
                                    
            
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">التدخل</div>
                                <div class="element-container">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم التاسع : التقارير المالية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->interference}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                                
                            </div>
            
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title  color">مؤشر القياس</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم التاسع : التقارير المالية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->indicators}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">وسائل التحقق</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم التاسع : التقارير المالية")
                                            <div class="container-box lite-gray-elemnet color mt-2">{{$support->verification}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12  d-flex flex-wrap element-col">
                                <div class="element-title color">نماذج الدعم الفني المرفقة</div>
                                <div class="element-container ">
                                    @foreach ($foundation->supports as $support)
                                        @if ($support->section == "القسم التاسع : التقارير المالية")
                                            <div class="container-box dark-gray-elemnet color mt-2">{{$support->attachments}}</div> 
                                        @endif    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                @empty
                    <div class="col-lg-10 col-md-6 col-sm-12  d-flex justify-content-center mt-lg-5 pt-5 " style="font-size:35px">
                        <b>
                            لا توجد تدخلات لهذا القسم
                        </b>
                    </div>   
                @endforelse
            </div>

            




        </div>
        
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

<script src="{{asset('/js/form.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>    
