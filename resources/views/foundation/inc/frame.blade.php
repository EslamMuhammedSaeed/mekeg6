@include('foundation.inc.nav')
<div class="container-fluid " style="margin-top: 76px">

    
    @include('foundation.inc.sidebar')
    
    <div id="main">
        <button class="openbtn" onclick="openNav()" onmousemove="openNav()" onmouseout="closeNav()">☰</button> 
        @include('foundation.inc.notification')
        {{-- <section class="notifications-section mt-5">
             
            <div class="container-fluid">
                <div class="notifications-title"><h4>الإشعارات</h4></div>
                <div class="notifications-container container text-right">

                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>
                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>
                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>
                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>
                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>
                    <div class="notification my-3 mx-3">
                        <p>الإشعار الأول</p>
                    </div>

                </div>
            </div>
        </section> --}}
        @include('foundation.inc.foundation_profile')
        {{-- <section class="foundation-profile-section mt-5">
            <div class="container-fluid">
                <div class="notifications-title mb-2"><h4>ملف المؤسسة</h4></div>
                <div class="container foundation-profile-container text-right shadow-sm">
                    <div class="row">
                        <div class="col-md-7">
                            <p>أنشئت عام {{$foundation->recordYear}}</p>
                            <p>مسجلة برقم : {{$foundation->recordNumber}} </p>
                            <p>تاريخ الإشهار: {{$foundation->recordDate}}</p>
                            <p>{{$foundation->description}}</p>
                        </div>
                        <div class="col-sm-5">
                            <p>العنوان : 34 ﺷارع ﻓﺘﺤﻲ اﺑﺮاﻫﻴﻢ - مدينة نصر</p>
                            <p>موبايل : {{$foundation->mobilePhone}}</p>
                            <p>البريد الإلكترونى : {{Auth::user()->email}}</p>
                        </div>
                    </div>
                    <div class="row text-center mt-3 mb-2">
                        <a class="btn btn-mekeg d-block mx-auto" href="#">تعديل ملف المؤسسة</a>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('foundation.inc.joined_trainings')
        {{-- <section class="joined-trainings-section mt-5">
             
            <div class="container-fluid">
                <div class="joined-trainings-title"><h4>الدوارات التدريبية قيد التنفيذ</h4></div>
                <div class="joined-trainings-container container text-right">

                    <div class="joined-training my-3 mx-3 shadow-sm">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="joined-training-title">أسس التقييم و المتابعة و إدارة المشروعات</p>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-mekeg-light" href="#">الذهاب للتدريب</a>
                            </div>
                        </div>
                    </div>
                    <div class="joined-training my-3 mx-3 shadow-sm">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="joined-training-title">أسس التقييم و المتابعة و إدارة المشروعات</p>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-mekeg-light" href="#">الذهاب للتدريب</a>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section> --}}
        @include('foundation.inc.foundation_assessment')
        {{-- <section class="foundation-assessment-section mt-5">
            <div class="container-fluid">
                <div class="foundation-assessment-title mb-3"><h4>التقييم المؤسسى</h4></div>
                <div class="container foundation-assessment-container text-right shadow-sm">
                    <div class="row px-3">
                        إﺗﻤﺎﻣﻚ ﻟﻌﻤﻠﻴﺔ اﻟﺘﻘﻴﻴﻢ اﻟﻤﺆﺳﺴﻰ وإﻧﺸﺎء ﻣﻠﻒ ﻟﻤﺆﺳﺴﺘﻚ ﻳﻤﻜﻨﻚ ﻣﻦ اﻟﺤﺼﻮل ﻋﻠﻰ اﺳﺘﺸﺎرات ﻓﻨﻴﺔ ﻓﻰ ﻣﺠﺎﻟﺎت اﻟﺘﻨﻤﻴﺔ اﻟﻤﺠﺘﻤﻌﻴﺔ وﺍﻟﺎﺷﺘراك ﻓﻰ اﻟﺪوﺭات اﻟﺘﺪرﻳﺒﻴﺔ وﺍﻟﻤﺴارات اﻟﻤﻘﺪﻣﺔ ﻣﻦ ﻗﻄﺎع إﺩﺍﺭة اﻟﺠﻤﻌﻴﺎت ﺑﺎﻟﻤﺆﺳﺴﺔ.
                    </div>
                    <div class="row text-center mt-3 mb-2">
                        <a class="btn btn-mekeg d-block mx-auto" href="#">التقييم الذاتى</a>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('foundation.inc.foundation_consultations')
        {{-- <section class="next-consultations-section mt-5 mb-5">
             
            <div class="container-fluid">
                <div class="next-consultations-title mb-3"><h4>الاستشارات القادمة</h4></div>
                <div class="next-consultations-container container text-right">

                    <div class="next-consultation my-3 mx-3 shadow-sm">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="next-consultation-title">ﻛﻴﻔﻴﺔ اﻟﺒﺪء وﺗﺨﻄﻲ اﻟﻌﻮاﺋﻖ</p>
                                <p class="next-consultation-text">مجال الاستشارة : مالية</p>
                                <p class="next-consultation-text">موعد الاستشارة : 12/5/2021</p>
                            </div>
                            <div class="col-md-3" style="margin-top: 35px">
                                <a class="btn btn-mekeg-light" href="#">الذهاب للاستشارة</a>
                            </div>
                        </div>
                    </div>
                    <div class="next-consultation my-3 mx-3 shadow-sm">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="next-consultation-title">ﻛﻴﻔﻴﺔ اﻟﺒﺪء وﺗﺨﻄﻲ اﻟﻌﻮاﺋﻖ</p>
                                <p class="next-consultation-text">مجال الاستشارة : مالية</p>
                                <p class="next-consultation-text">موعد الاستشارة : 12/5/2021</p>
                            </div>
                            <div class="col-md-3" style="margin-top: 35px">
                                <a class="btn btn-mekeg-light" href="#">الذهاب للاستشارة</a>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section> --}}
    </div>
</div>    





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


   