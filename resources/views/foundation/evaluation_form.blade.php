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
      
        {{-- <ul class="navbar-nav mr-auto nav-left px-0 mt-0 text-center navbar-left ">
            <li class="nav-item dropdown text-center">
              <form action="/logout" method="post">
                @csrf
                <div class="nav-link px-lg-3 text-white pt-0" id="navbardrop"  >
                  <input type="submit" value="تسجيل الخروج" style="color :white; background-color:#034939 ; border:0">
                  
                  <i class="fa fa-sign-out mr-1" aria-hidden="true" style="font-size: 15px"></i>
                </div>
              </form>
              
              
            </li> 

        </ul> --}}
      
    </div>
</nav>
<!--nav-->
<!--start main section-->
<div class="container-fluid " style="margin-top: 76px">
    @include('foundation.inc.sidebar')
    <div id="main" class="px-0" style="margin-right: 65px">
        <main class="main-page" >
            <div class="container-fluid">
                <!--start page navigation-->
                <div class="d-flex align-items-start">
                    <div class="eval-content" id="v-pills-tabContent">
                        <form method="post" action="/foundation/auto_evaluation" class="evaluation-form needs-validation" novalidate
                          id="eval-form">
                          @csrf
                          <input type="hidden" name="autoEvaluationSection1" id="autoEvaluationSection1" value="0">
                          <input type="hidden" name="autoEvaluationSection2" id="autoEvaluationSection2" value="0">
                          <input type="hidden" name="autoEvaluationSection3" id="autoEvaluationSection3" value="0">
                          <input type="hidden" name="autoEvaluationSection4" id="autoEvaluationSection4" value="0">
                          <input type="hidden" name="autoEvaluationSection5" id="autoEvaluationSection5" value="0">
                          <input type="hidden" name="autoEvaluationSection6" id="autoEvaluationSection6" value="0">
                          <input type="hidden" name="autoEvaluationSection7" id="autoEvaluationSection7" value="0">
                          <input type="hidden" name="autoEvaluationSection8" id="autoEvaluationSection8" value="0">
                          <input type="hidden" name="autoEvaluationSection9" id="autoEvaluationSection9" value="0">
                          <input type="hidden" name="autoEvaluationSection10" id="autoEvaluationSection10" value="0">
                          <input type="hidden" name="selfAssessment" id="selfAssessment" value="0">
                          <input type="hidden" name="financialAssessment" id="financialAssessment" value="0">
                          <input type="hidden" name="autoEvaluationTotal" id="autoEvaluationTotal" value="0">
                          <input type="hidden" name="workScope" id="workScope" value="0">
                          <input type="hidden" name="workFields" id="workFields" value="0">
                          <input type="hidden" name="autoEvaluationClass" id="autoEvaluationClass" value="0">
                          

                          <div class="overflow-hidden">
                            <div class="evaluation-form-step">
                                <div class="d-flex justify-content-center align-content-center">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="evaluation-title flex-center">
                                                التقييم الذاتي فني
                                            </div>
                                            <div class="flex-center evaluation-subTitle main-subtitle">القسم الاول :
                                                بيانات مؤسسية متنوعة
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                </div>
                                <section id="القسم الاول">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3 color row-title">ما هي ميادين عمل
                                            الجمعية؟
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-9">
                                            <div class="row form-row">
                                                <div class="col-sm-12 col-md-6 col-lg-2  d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            الصحة
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                               value="0.5"

                                                               name="الصحة">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            التعليم</label>
                                                        <input class="form-check-input" type="checkbox" value="0.5"
                                                               name="التعليم">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            الطفولة
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" name="الطفوله"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            المرأة
                                                        </label>
                                                        <input class="form-check-input " type="checkbox" name="المرأة"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            الإقتصاد
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" value="0.5"
                                                               name="الإقتصاد">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            ديني/اجتماعي/ثقافي
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" value="0.5"
                                                               name="ديني/اجتماعي/ثقافي">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            البيئة
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" value="0.5"
                                                               name="البيئة">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <div id="section0-others">
                                                            <input type="text" name="(اخرى)ميادين عمل الجمعية" class="others-input-2 hidden" required>
                                                        </div>
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            أخرى
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" name="اخر"
                                                               value="0.5"
                                                               id="flexCheckDefault"
                                                               onchange="showOtherTextField('section0-others','flexCheckDefault','0.5', 'اخر');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                نطاق عمل الجمعية
                                            </label>
                                            <select class="form-select select-3-width" id="area-select"
                                                    onchange="showOtherTextField('section1-others','area-select','0.5', '(اخرى)نطاق عمل الجمعية'); changeClass(this)"
                                                    name="نطاق عمل الجمعية"
                                            >
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option name="الجمهورية" value="4-الجمهورية" class="form-select-options">الجمهورية
                                                </option>
                                                <option name="المحافظة" value="3-المحافظة" class="form-select-options">المحافظة
                                                </option>
                                                <option name="المركز" value="2-المركز" class="form-select-options">المركز
                                                </option>
                                                    الوحده
                                                <option name="الوحده المحليه" value="1-الوحده المحليه" class="form-select-options">
                                                المحليه
                                                </option>
                                                <option name="القرية" value="0.5-القرية" class="form-select-options">القرية
                                                </option>
                                                <option name="اخرى" value="0.5-اخرى" class="form-select-options">اخرى
                                                </option>
                                            </select>
                                            <div id="section1-others">
                                                <input type="text" name="(اخرى)نطاق عمل الجمعية" class="others-input-3 hidden" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                تنوع مؤسسي الجمعية
                                            </label>
                                            <select class="form-select select-3-width" name="تنوع مؤسسي الجمعية"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">ذكور فقط</option>
                                                <option value="0.5" class="form-select-options">اناث فقط</option>
                                                <option value="1" class="form-select-options">ذكور واناث</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                هناك تنوع في مصادر تمويل الجمعية
                                            </label>
                                            <select class="form-select select-3-width"
                                                    name="هناك تنوع في مصادر تمويل الجمعية"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" name="نعم" class="form-select-options">نعم</option>
                                                <option value="0" name="لا" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <!--funding resources-->
                                        <div class="row funding-row">
                                            <div class="col-sm-12 col-md-12 col-lg-3 color row-title">تنوع مصادر التمويل
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-9">
                                                <div class="row form-row">
                                                    <div class="col-sm-12 col-md-12 col-lg-9  d-flex justify-content-start">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                تمويل ذاتى (اشتركات –ايرادات انشطة -.....)
                                                            </label>
                                                            <input class="form-check-input" type="checkbox"
                                                                   value="0.5"
                                                                   name="تمويل ذاتى">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-3 d-flex justify-content-start">
                                                        <div class="form-check">
                                                            <label class="form-check-label font-size"
                                                                   for="flexCheckDefault">
                                                                تمويل حكومي
                                                            </label>
                                                            <input class="form-check-input" type="checkbox"
                                                                   value="0.5" name="تمويل حكومي">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-9 d-flex justify-content-start">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                تمويل غير حكومى)قطاع خاص – افراد – منظمات مجتمع مدنى)
                                                            </label>
                                                            <input class="form-check-input" type="checkbox"
                                                                   value="0.5"
                                                                   name="تمويل غير حكومى"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-3 d-flex justify-content-start">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                تمويل اجنبى
                                                            </label>
                                                            <input class="form-check-input" name="تمويل اجنبى"
                                                                   type="checkbox"
                                                                   value="0.5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--branches-->
                                    <div class="row margin-top">
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                هل للجمعية فروع اخرى؟
                                            </label>
                                            <select class="form-select" name="هل للجمعية فروع اخرى؟"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                طبيعة مقر الجمعية
                                            </label>
                                            <select class="form-select" name="طبيعة مقر الجمعية"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">ملك – تبرع –
                                                    هبه
                                                </option>
                                                <option value="0.5" class="form-select-options">ايجار</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                وصف المقر <span class="side-title">(موقع متميز)</span>
                                            </label>
                                            <select class="form-select" name="وصف المقر (موقع متميز)"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">هل
                                                    موقع
                                                    الجمعيه مميز (نعم)
                                                </option>
                                                <option value="0" class="form-select-options">هل
                                                    موقع
                                                    الجمعيه مميز (لا)
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                وصف المقر <span class="side-title">(مناسب لممارسة الأنشطة)</span>
                                            </label>
                                            <select class="form-select" name="وصف المقر(مناسب لممارسة الأنشطة)"
                                                    onchange="changeClass(this)">

                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5"
                                                        class="form-select-options">هل مقر الجمعيه مناسب لممارسة أنشطتها
                                                    (نعم)
                                                </option>
                                                <option value="0"
                                                        class="form-select-options">هل مقر الجمعيه مناسب لممارسة أنشطتها
                                                    (لا)
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--                            resources-->
                                    <div class="row margin-top">
                                        <div class="col-sm-12 col-md-12 col-lg-3 color row-title">توصيل المرافق بالمقر
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-9">
                                            <div class="row form-row">
                                                <div class="col-sm-12 col-md-6 col-lg-2  d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            كهرباء
                                                        </label>
                                                        <input class="form-check-input" name="كهرباء" type="checkbox"
                                                               value="0.34"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            مياه
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" value="0.33"
                                                               name="مياه"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            انترنت - تليفون ارضي
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                               name="تليفون ارضي"
                                                               value="0.33"
                                                        >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3 color row-title">الأصول المملوكة
                                            للجمعية
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-9">
                                            <div class="row form-row">
                                                <div class="col-sm-12 col-md-6 col-lg-2  d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            أراضي
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" name="أراضي"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            سيارات
                                                        </label>
                                                        <input class="form-check-input" name="سيارات" type="checkbox"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            أجهزة طبية
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                               name="أجهزة طبية"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            مباني
                                                        </label>
                                                        <input class="form-check-input " type="checkbox" name="مباني"
                                                               value="0.5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            ورش حرفية
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" name="ورش حرفية"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-2 d-flex justify-content-start">
                                                    <div class="form-check">
                                                        <!--                                                    <input type="text" class="others-input" name="أخرى">-->
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            أخرى
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" name="أخرى"
                                                               value="0.5"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center margin-top">
                                        <div class="center-text">
                                            <div class="flex-center  upload-title color">بيان بمشاريع وانشطة الجمعية خلال
                                                الخمسة
                                                اعوام الماضية
                                            </div>
                                            <div class="flex-wrap"id="inputs-container"></div>
                                            <div class="d-flex align-items-center" id="add-input-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill color icon" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                                </svg>
                                                <div class="color">اضافة مشروع اخر</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="margin-top" id="القسم الثاني">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="flex-center evaluation-subTitle">
                                                القسم الثاني : نظام العضوية
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                    <div class="col-12 margin-top">
                                        <label class="form-select-label-1" for="flexCheckDefault">
                                            هل عقدت الجمعية اجتماعات للجمعية العمومية ( عادية / غير عادية ) خلال
                                            الـعامين
                                            السابقين؟
                                        </label>
                                        <select class="form-select"
                                                name="هل عقدت الجمعية اجتماعات للجمعية العمومية الـعامين السابقين؟"
                                                onchange="changeClass(this)">
                                            <option selected disabled class="form-select-options">أختر</option>
                                            <option value="1" name="نعم" class="form-select-options">
                                                نعم
                                            </option>
                                            <option value="0" name="لا" class="form-select-options">
                                                لا
                                            </option>

                                        </select>
                                    </div>
                                </section>
                                <section class="margin-top" id="القسم الثالث">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="flex-center evaluation-subTitle">
                                                القسم الثالث:ادارة البرامج والمشروعات
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                    <div class="col-12 margin-top">
                                        <label class="form-select-label-1" for="flexCheckDefault">
                                            هل لدى الجمعية دراسة لاحتياجات المجتمع خلال العشر سنوات الماضية ؟
                                        </label>
                                        <select class="form-select"
                                                name="هل لدى الجمعية دراسة لاحتياجات المجتمع خلال العشر سنوات الماضية؟"
                                                onchange="changeClass(this)">

                                            <option selected disabled class="form-select-options">أختر</option>
                                            <option value="1" class="form-select-options">
                                                نعم
                                            </option>
                                            <option value="0" class="form-select-options">
                                                لا
                                            </option>

                                        </select>
                                    </div>
                                    <div class="row margin-top">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                متى تم اعدادها ؟
                                            </label>
                                            <select class="form-select select-3-width" name="متى تم اعدادها ؟"
                                                    onchange="changeClass(this)">

                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">من سنه
                                                    الى 3
                                                    سنوات
                                                </option>
                                                <option value="0.5" class="form-select-options">من 4 الي 7
                                                    سنوات
                                                </option>
                                                <option value="0" class="form-select-options">من 8 الي
                                                    10
                                                    سنوات
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                من قام باعدادها ؟ </label>
                                            <select class="form-select select-3-width" name="من قام باعدادها ؟"
                                                    onchange="changeClass(this)">

                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">الجمعيه</option>
                                                <option value="0.5" class="form-select-options">جهه خارجية
                                                </option>
                                                <option value="1" class="form-select-options">كلاهما</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                هل تخصص الجمعية أنشطة للأسر الأكثر احتياجا ؟
                                            </label>
                                            <select class="form-select select-3-width" onchange="changeClass(this)"
                                                    name="هل تخصص الجمعية أنشطة للأسر الأكثر احتياجا؟">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 margin-top">
                                        <label class="form-select-label-1" for="flexCheckDefault">
                                            من الذى يتولى تنفيذ المشاريع والأنشطة داخل الجمعية؟
                                        </label>
                                        <div class="row mt1 align-baseline">

                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    العاملين بالجمعية (أجهزة الإدارة)
                                                </label>
                                                <select class="form-select select-3-width"
                                                        onchange="changeClass(this)"
                                                        name="العاملين بالجمعية (أجهزة الإدارة)">
                                                    <option selected disabled class="form-select-options">أختر
                                                    </option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    بعض / كل أعضاء مجلس إدارة الجمعية </label>
                                                <select name="بعض / كل أعضاء مجلس ادارة الجمعية"
                                                        onchange="changeClass(this)"
                                                        class="form-select select-3-width">
                                                    <option selected disabled class="form-select-options">أختر
                                                    </option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    لجان الجمعية </label>
                                                <select class="form-select select-3-width" name="لجان الجمعية"
                                                        onchange="changeClass(this)">

                                                    <option selected disabled class="form-select-options">أختر
                                                    </option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row margin-top">
                                        <label class="form-select-label-1" for="flexCheckDefault">
                                            من الذى يتولى المتابعة والاشراف على المشاريع والأنشطة داخل الجمعية؟ </label>
                                        <div style="align-items: baseline; display: flex; flex-wrap: wrap">
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    العاملين بالجمعية(أجهزة الإدارة) </label>
                                                <select class="form-select" name="العاملين بالجمعية(أجهزة الإدارة)"
                                                        onchange="changeClass(this)">

                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0" class="form-select-options">نعم</option>
                                                    <option value="0.5" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    بعض / كل أعضاء مجلس إدارة الجمعية </label>
                                                <select class="form-select" name="بعض / كل أعضاء مجلس إدارة الجمعية"
                                                        onchange="changeClass(this)">

                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    لجان الجمعية </label>
                                                <select class="form-select" name="لجان الجممعية"
                                                        onchange="changeClass(this)">
                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    افراد من الجهات المموله لانشطة الجمعية </label>
                                                <select class="form-select"
                                                        name="افراد من الجهات المموله لانشطة الجمعية"
                                                        onchange="changeClass(this)">
                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin-top">
                                        <label class="form-select-label-1" for="flexCheckDefault">
                                            هل لدى الجمعية القدرة على حشد وتعبئة الموارد ؟ </label>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                عام </label>
                                            <select class="form-select" name="عام" onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                موارد مالية </label>
                                            <select name="موارد مالية" class="form-select" onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                موارد بشرية </label>
                                            <select name="موارد بشرية" class="form-select"
                                                    onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <div class="d-flex">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    اخرى </label>
                                            </div>

                                            <select class="form-select"
                                                    onchange="changeClass(this);"
                                                    id="area-select2" name="اخرى">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="0.5" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                                <section class="margin-top" id="القسم الرابع">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="flex-center evaluation-subTitle">
                                                القسم الرابع : الموارد البشرية
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                    <div class="row margin-top">
                                        <div style="align-items: baseline; display: flex; flex-wrap: wrap">
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    هل يوجد عاملين؟ </label>
                                                <select name="هل يوجد عاملين؟" class="form-select select-3-width"
                                                        onchange="changeClass(this)">

                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="1" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1 section-4-font-size"
                                                       for="flexCheckDefault">
                                                    هل لدى الجمعية هيكل تنظيمي محدّث ومعتمد من مجلس الإدارة ؟ </label>
                                                <select class="form-select select-3-width"
                                                        onchange="changeClass(this)"
                                                        name="هل لدى الجمعية هيكل تنظيمي محدّث ومعتمد من مجلس الإدارة ؟">

                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <label class="form-select-label-1" for="flexCheckDefault">
                                                    هل لدى الجمعية لائحة عمل داخلية مكتوبة ومعتمدة ؟
                                                </label>
                                                <select class="form-select select-3-width"
                                                        name="هل لدى الجمعية لائحة عمل داخلية مكتوبة ومعتمدة ؟"
                                                        onchange="changeClass(this)">

                                                    <option selected disabled class="form-select-options">أختر</option>
                                                    <option value="0.5" class="form-select-options">نعم</option>
                                                    <option value="0" class="form-select-options">لا</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                                <section class="margin-top" id="القسم الخامس">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="flex-center evaluation-subTitle">
                                                القسم الخامس : نظام المعلومات و التوثيق
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                هل يوجد نظام لحفظ المعلومات (الأرشفة) ؟ </label>
                                            <select name="هل يوجد نظام لحفظ المعلومات (الأرشفة) ؟"
                                                    class="form-select select-3-width" onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 section-4-font-size label-width"
                                                   for="flexCheckDefault">
                                                هل تنتظم الجمعية فى إخطار الجهة الادارية لمحاضر إجتماعات مجلس الادارة
                                                والجمعية العمومية فى المواعيد المحددة </label>
                                            <select class="form-select select-3-width" onchange="changeClass(this)"
                                                    name="هل تنتظم الجمعية فى إخطار الجهة الادارية لمحاضر إجتماعات مجلس الادارة والجمعية العمومية فى المواعيد المحددة">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">نعم</option>
                                                <option value="0" class="form-select-options">لا</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                                <section class="margin-top" id="القسم السادس">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="flex-center evaluation-subTitle">
                                                القسم السادس : نظام القيادة واتخاذ القرار
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                    <div class="row margin-top">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 mt2" for="flexCheckDefault">
                                                طريقة إتخاذ القرارات داخل مجلس الإدارة </label>
                                            <select name="طريقة إتخاذ القرارات داخل مجلس الإدارة"
                                                    class="form-select select-3-width" onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">بالاجماع</option>
                                                <option value="0.5" class="form-select-options">
                                                    بالاغلبيه
                                                    (50%+عضو)
                                                </option>
                                                <option value="0" class="form-select-options">مايراه الرئيس
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 section-4-font-size label-width"
                                                   for="flexCheckDefault">
                                                نسبة أعضاء مجلس الإدارة الذين أنتظموا فى حضورالجلسات خلال العام الماضي
                                            </label>
                                            <select name="نسبة أعضاء مجلس الإدارة الذين أنتظموا فى حضورالجلسات خلال العام الماضي"
                                                    class="form-select select-3-width" onchange="changeClass(this)">
                                                <option selected disabled class="form-select-options">أختر</option>
                                                <option value="1" class="form-select-options">اكثر من %90
                                                </option>
                                                <option value="0.5" class="form-select-options">من %90
                                                    الى
                                                    اقل من %70
                                                </option>
                                                <option value="0.25" class="form-select-options">من %70 الى
                                                    %50
                                                </option>
                                                <option value="0" class="form-select-options">اقل من %50
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="evaluation-form-step" id="step-2">
                                <div class="d-flex justify-content-center align-content-center">
                                    <!-- Start Title -->
                                    <div class="row justify-content-center">
                                        <div class="center-text flex-center d-flex flex-column">
                                            <div class="evaluation-title flex-center">
                                                التقييم الذاتي مالي
                                            </div>
                                            <div class="flex-center evaluation-subTitle main-subtitle">
                                                القسم السابع: النظام المالي
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Title -->
                                </div>
                                <section id="القسم السابع">
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                وجود لائحة مالية لتنظيم السياسات والاجراءات والنظام المالي داخل
                                                الجمعية
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود لائحة مالية"
                                                           value="6"
                                                           onchange="changeRadioClass('وجود لائحة مالية')">
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود لائحة مالية"
                                                           value="3"
                                                           onchange="changeRadioClass('وجود لائحة مالية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود لائحة مالية"
                                                           value="0"
                                                           onchange="changeRadioClass('وجود لائحة مالية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1"
                                                   for="flexCheckDefault">
                                                قيود يومية مستخدمة ومحدثة </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قيود يومية مستخدمة ومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('قيود يومية مستخدمة ومحدثة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قيود يومية مستخدمة ومحدثة"
                                                           value="0.5"
                                                           onchange="changeRadioClass('قيود يومية مستخدمة ومحدثة')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قيود يومية مستخدمة ومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('قيود يومية مستخدمة ومحدثة')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                سند صرف شيك / نقدية مستخدم ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند صرف شيك / نقدية مستخدم ومحدث"
                                                           value="1"
                                                           onchange="changeRadioClass('سند صرف شيك / نقدية مستخدم ومحدث')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند صرف شيك / نقدية مستخدم ومحدث"
                                                           value="0.5"
                                                           onchange="changeRadioClass('سند صرف شيك / نقدية مستخدم ومحدث')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند صرف شيك / نقدية مستخدم ومحدث"
                                                           value="0"
                                                           onchange="changeRadioClass('سند صرف شيك / نقدية مستخدم ومحدث')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                صورة الشيك محتفظ بها بشكل دوري </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="صورة الشيك محتفظ بها بشكل دوري"
                                                           value="1"
                                                           onchange="changeRadioClass('صورة الشيك محتفظ بها بشكل دوري')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="صورة الشيك محتفظ بها بشكل دوري"
                                                           value="0.5"
                                                           onchange="changeRadioClass('صورة الشيك محتفظ بها بشكل دوري')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="صورة الشيك محتفظ بها بشكل دوري"
                                                           value="0"
                                                           onchange="changeRadioClass('صورة الشيك محتفظ بها بشكل دوري')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة"
                                                           value="0.5"
                                                           onchange="changeRadioClass('كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة"
                                                           value="0.5"
                                                           onchange="changeRadioClass('مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">دورة الشراء (طلب
                                                شراء
                                                - عروض أسعار - محضر بت - أمر توريد - محضر فحص - أذن أضافه مخزني )
                                                مستخدمة
                                                ومحدثة
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="عروض أسعار مستخدمةومحدثة"
                                                           value="2"
                                                           onchange="changeRadioClass('عروض أسعار مستخدمةومحدثة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="عروض أسعار مستخدمةومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('عروض أسعار مستخدمةومحدثة')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="عروض أسعار مستخدمةومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('عروض أسعار مستخدمةومحدثة')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1"
                                                   for="flexCheckDefault">
                                                سند قبض شيك / نقدية مستخدم ومحدث</label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند قبض"
                                                           value="2"
                                                           onchange="changeRadioClass('سند قبض')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند قبض"
                                                           value="1"
                                                           onchange="changeRadioClass('سند قبض')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند قبض"
                                                           value="0"
                                                           onchange="changeRadioClass('سند قبض')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                سند التحصيل (كشف، ايصال،...) مستخدم ومحدث
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند التحصيل"
                                                           value="2"
                                                           onchange="changeRadioClass('سند التحصيل')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند التحصيل"
                                                           value="1"
                                                           onchange="changeRadioClass('سند التحصيل')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سند التحصيل"
                                                           value="0"
                                                           onchange="changeRadioClass('سند التحصيل')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                قسيمة إيداع بنكي محتفظ بها بشكل دوري
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قسيمة إيداع بنكي"
                                                           value="2"
                                                           onchange="changeRadioClass('قسيمة إيداع بنكي')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قسيمة إيداع بنكي"
                                                           value="1"
                                                           onchange="changeRadioClass('قسيمة إيداع بنكي')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="قسيمة إيداع بنكي"
                                                           value="0"
                                                           onchange="changeRadioClass('قسيمة إيداع بنكي')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                كشف حساب بنكي شهري محدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف حساب بنكي"
                                                           value="2"
                                                           onchange="changeRadioClass('كشف حساب بنكي')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف حساب بنكي"
                                                           value="1"
                                                           onchange="changeRadioClass('كشف حساب بنكي')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="كشف حساب بنكي"
                                                           value="0"
                                                           onchange="changeRadioClass('كشف حساب بنكي')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                مذكرة تسوية بنكية مستخدم ومحدث
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مذكرة تسوية"
                                                           value="1"
                                                           onchange="changeRadioClass('مذكرة تسوية')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مذكرة تسوية"
                                                           value="0.5"
                                                           onchange="changeRadioClass('مذكرة تسوية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="مذكرة تسوية"
                                                           value="0"
                                                           onchange="changeRadioClass('مذكرة تسوية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                إتفاقيات التعاون  موجوده ومحدثة
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إتفاقيات التعاون  موجوده ومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('إتفاقيات التعاون  موجوده ومحدثة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إتفاقيات التعاون  موجوده ومحدثة"
                                                           value="0.5"
                                                           onchange="changeRadioClass('إتفاقيات التعاون  موجوده ومحدثة')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إتفاقيات التعاون  موجوده ومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('إتفاقيات التعاون  موجوده ومحدثة')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                محاضر جرد الاصول الثابتة مستخدمة ومحدثة
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="محاضر جرد الاصول"
                                                           value="2"
                                                           onchange="changeRadioClass('محاضر جرد الاصول')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="محاضر جرد الاصول"
                                                           value="1"
                                                           onchange="changeRadioClass('محاضر جرد الاصول')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="محاضر جرد الاصول"
                                                           value="0"
                                                           onchange="changeRadioClass('محاضر جرد الاصول')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        


                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                الموازنة التقديرية (الخطة المالية) مستخدمة ومحدثة
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الموازنة التقديرية"
                                                           value="2"
                                                           onchange="changeRadioClass('الموازنة التقديرية')"


                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الموازنة التقديرية"
                                                           value="1"
                                                           onchange="changeRadioClass('الموازنة التقديرية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الموازنة التقديرية"
                                                           value="0"
                                                           onchange="changeRadioClass('الموازنة التقديرية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Start Title -->
                                <div class="row justify-content-center">
                                    <div class="center-text flex-center d-flex flex-column">
                                        <div class="flex-center evaluation-subTitle step2-subtitle-mt">
                                            القسم الثامن : الدفاتر المالية
                                        </div>
                                    </div>
                                </div>
                                <!-- End Title -->
                                <section id="القسم الثامن">
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                دفتر اليومية الامريكية مستخدم ومحدث
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر اليومية الامريكية"
                                                           value="1"
                                                           onchange="changeRadioClass('دفتر اليومية الامريكية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر اليومية الامريكية"
                                                           value="0.5"
                                                           onchange="changeRadioClass('دفتر اليومية الامريكية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر اليومية الامريكية"
                                                           value="0"
                                                           onchange="changeRadioClass('دفتر اليومية الامريكية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1"
                                                   for="flexCheckDefault">
                                                دفتر الإيرادات والمصروفات مستخدم ومحدث</label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الإيرادات والمصروفات"
                                                           value="2"
                                                           onchange="changeRadioClass('دفتر الإيرادات والمصروفات')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الإيرادات والمصروفات"
                                                           value="1"
                                                           onchange="changeRadioClass('دفتر الإيرادات والمصروفات')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الإيرادات والمصروفات"
                                                           value="0"
                                                           onchange="changeRadioClass('دفتر الإيرادات والمصروفات')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                دفتر البنك مستخدم ومحدث
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر البنك"
                                                           value="2"
                                                           onchange="changeRadioClass('دفتر البنك')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر البنك"
                                                           value="1"
                                                           onchange="changeRadioClass('دفتر البنك')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر البنك"
                                                           value="0"
                                                           onchange="changeRadioClass('دفتر البنك')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                دفتر الخزينة مستخدم ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الخزينة"
                                                           value="2"
                                                           onchange="changeRadioClass('دفتر الخزينة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الخزينة"
                                                           value="1"
                                                           onchange="changeRadioClass('دفتر الخزينة')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر الخزينة"
                                                           value="0"
                                                           onchange="changeRadioClass('دفتر الخزينة')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                سجل الأصول الثابتة مستخدم ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل الأصول الثابتة"
                                                           value="2"
                                                           onchange="changeRadioClass('سجل الأصول الثابتة')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل الأصول الثابتة"
                                                           value="1"
                                                           onchange="changeRadioClass('سجل الأصول الثابتة')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل الأصول الثابتة"
                                                           value="0"
                                                           onchange="changeRadioClass('سجل الأصول الثابتة')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                دفتر عهدة المخازن (118) _ اذن أضافة مخزنى (112) - أذن صرف مخزنى (111)
                                                مستخدمة ومحدثة
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر عهدة المخازن"
                                                           value="2"
                                                           onchange="changeRadioClass('دفتر عهدة المخازن')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر عهدة المخازن"
                                                           value="1"
                                                           onchange="changeRadioClass('دفتر عهدة المخازن')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="دفتر عهدة المخازن"
                                                           value="0"
                                                           onchange="changeRadioClass('دفتر عهدة المخازن')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                سجل العضوية والأشتراكات مستخدم ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل العضوية والأشتراكات"
                                                           value="2"
                                                           onchange="changeRadioClass('سجل العضوية والأشتراكات')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل العضوية والأشتراكات"
                                                           value="1"
                                                           onchange="changeRadioClass('سجل العضوية والأشتراكات')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل العضوية والأشتراكات"
                                                           value="0"
                                                           onchange="changeRadioClass('سجل العضوية والأشتراكات')"

                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                سجل المساهمات النقدية والعينية مستخدم ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل المساهمات النقدية"
                                                           value="1"
                                                           onchange="changeRadioClass('سجل المساهمات النقدية')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل المساهمات النقدية"
                                                           value="0.5"
                                                           onchange="changeRadioClass('سجل المساهمات النقدية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="سجل المساهمات النقدية"
                                                           value="0"
                                                           onchange="changeRadioClass('سجل المساهمات النقدية')">
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Start Title -->
                                <div class="row justify-content-center">
                                    <div class="center-text flex-center d-flex flex-column">
                                        <div class="flex-center evaluation-subTitle step2-subtitle-mt">
                                            القسم التاسع : الرقابة الداخلية
                                        </div>
                                    </div>
                                </div>
                                <!-- End Title -->
                                <section id="القسم التاسع">
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">وجود فصل بين
                                                الوظائف
                                                والمسئوليات المختلفة داخل الجمعية
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود فصل بين الوظائف"
                                                           value="2"
                                                           onchange="changeRadioClass('وجود فصل بين الوظائف')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود فصل بين الوظائف"
                                                           value="1"
                                                           onchange="changeRadioClass('وجود فصل بين الوظائف')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود فصل بين الوظائف"
                                                           value="0"
                                                           onchange="changeRadioClass('وجود فصل بين الوظائف')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                الرقابة المستندية من حيث ترقيم المستندات وتسلسلها </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المستندية من حيث ترقيم المستندات وتسلسلها"
                                                           value="2"
                                                           onchange="changeRadioClass('الرقابة المستندية من حيث ترقيم المستندات وتسلسلها')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المستندية من حيث ترقيم المستندات وتسلسلها"
                                                           value="1"
                                                           onchange="changeRadioClass('الرقابة المستندية من حيث ترقيم المستندات وتسلسلها')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المستندية من حيث ترقيم المستندات وتسلسلها"
                                                           value="0"
                                                           onchange="changeRadioClass('الرقابة المستندية من حيث ترقيم المستندات وتسلسلها')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                الرقابة المحاسبية والمراجعة الداخلية </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المحاسبية والمراجعة الداخلية"
                                                           value="2"
                                                           onchange="changeRadioClass('الرقابة المحاسبية والمراجعة الداخلية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المحاسبية والمراجعة الداخلية"
                                                           value="1"
                                                           onchange="changeRadioClass('الرقابة المحاسبية والمراجعة الداخلية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الرقابة المحاسبية والمراجعة الداخلية"
                                                           value="0"
                                                           onchange="changeRadioClass('الرقابة المحاسبية والمراجعة الداخلية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل"
                                                           value="2"
                                                           onchange="changeRadioClass('وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل')"

                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل"
                                                           value="1"
                                                           onchange="changeRadioClass('وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل"
                                                           value="0"
                                                           onchange="changeRadioClass('وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية"
                                                           value="2"
                                                           onchange="changeRadioClass('الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية"
                                                           value="1"
                                                           onchange="changeRadioClass('الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية"
                                                           value="0"
                                                           onchange="changeRadioClass('الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                إجراءات الصرف وتسوية السلف داخل الجمعية </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إجراءات الصرف وتسوية السلف داخل الجمعية"
                                                           value="2"
                                                           onchange="changeRadioClass('إجراءات الصرف وتسوية السلف داخل الجمعية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إجراءات الصرف وتسوية السلف داخل الجمعية"
                                                           value="1"
                                                           onchange="changeRadioClass('إجراءات الصرف وتسوية السلف داخل الجمعية')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="إجراءات الصرف وتسوية السلف داخل الجمعية"
                                                           value="0"
                                                           onchange="changeRadioClass('إجراءات الصرف وتسوية السلف داخل الجمعية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-7 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                الاجراءات الخاصة بمراقبة ومتابعة وسياسة الحفاظ على الاصول الثابتة
                                                للجمعية </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية"
                                                           value="2"
                                                           onchange="changeRadioClass('الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية"
                                                           value="1"
                                                           onchange="changeRadioClass('الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية')"

                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية"
                                                           value="0"
                                                           onchange="changeRadioClass('الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <!-- Start Title -->
                                <div class="row justify-content-center">
                                    <div class="center-text flex-center d-flex flex-column">
                                        <div class="flex-center evaluation-subTitle step2-subtitle-mt">
                                            القسم العاشر : التقارير المالية
                                        </div>
                                    </div>
                                </div>
                                <!-- End Title -->
                                <section id="القسم العاشر">
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                ميزان مراجعة شهري
                                                موجود ومحدث
                                            </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="ميزان مراجعة شهري"
                                                           value="2"
                                                           onchange="changeRadioClass('ميزان مراجعة شهري')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="ميزان مراجعة شهري"
                                                           value="1"
                                                           onchange="changeRadioClass('ميزان مراجعة شهري')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="ميزان مراجعة شهري"
                                                           value="0"
                                                           onchange="changeRadioClass('ميزان مراجعة شهري')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                تقارير مالية (شهري، ربع سنوي، نصف سنوي ، سنوى) موجوده ومحدثة </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="تقارير مالية موجوده ومحدثة"
                                                           value="2"
                                                           onchange="changeRadioClass('تقارير مالية موجوده ومحدثة')">
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="تقارير مالية موجوده ومحدثة"
                                                           value="1"
                                                           onchange="changeRadioClass('تقارير مالية موجوده ومحدثة')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="تقارير مالية موجوده ومحدثة"
                                                           value="0"
                                                           onchange="changeRadioClass('تقارير مالية موجوده ومحدثة')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                الميزانية العمومية موجوده ومحدثة </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الميزانية العمومية"
                                                           value="2"
                                                           onchange="changeRadioClass('الميزانية العمومية')"
                                                    >
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="avg form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الميزانية العمومية"
                                                           onchange="changeRadioClass('الميزانية العمومية')"
                                                           value="1">
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="الميزانية العمومية"
                                                           onchange="changeRadioClass('الميزانية العمومية')"
                                                           value="0">
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top flex-align-base">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1" for="flexCheckDefault">
                                                حساب الإيرادات والمصروفات موجود ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب الإيرادات والمصروفات"
                                                           value="2"
                                                           onchange="changeRadioClass('حساب الإيرادات والمصروفات')">
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب الإيرادات والمصروفات"
                                                           value="1"
                                                           onchange="changeRadioClass('حساب الإيرادات والمصروفات')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب الإيرادات والمصروفات"
                                                           value="0"
                                                           onchange="changeRadioClass('حساب الإيرادات والمصروفات')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label class="form-select-label-1 "
                                                   for="flexCheckDefault">
                                                حساب المقبوضات والمدفوعات موجود ومحدث </label>
                                            <div class="d-flex">
                                                <div class="form-check levels-choices">
                                                    <input class="good form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب المقبوضات والمدفوعات"
                                                           value="2"
                                                           onchange="changeRadioClass('حساب المقبوضات والمدفوعات')">
                                                    <span class="levels-text good-text color">جيد</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="avg form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب المقبوضات والمدفوعات"
                                                           value="1"
                                                           onchange="changeRadioClass('حساب المقبوضات والمدفوعات')"
                                                    >
                                                    <span class="levels-text avg-text color">متوسط</span>

                                                </div>
                                                <div class="form-check levels-choices">
                                                    <input class="weak form-check-input levels-choices-input"
                                                           type="radio"
                                                           name="حساب المقبوضات والمدفوعات"
                                                           value="0"
                                                           onchange="changeRadioClass('حساب المقبوضات والمدفوعات')"
                                                    >
                                                    <span class="levels-text bad-text color">ضعيف</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="center-text" style="display: inline">
                                    <button  type="button" id="nextBtn" class="nextButton flex-center" onclick="nextPrev(1)" style="display: inline">
                                    </button>
                                    <button  type="submit" id="submit" class="nextButton flex-center d-none btn-primary "  style="display: inline">تأكيد
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <!-- end page navigation-->
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