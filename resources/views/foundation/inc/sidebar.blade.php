<div id="mySidebar" class="sidebar col-col-hidden" onmouseover="openNav()" onmouseout="closeNav()" style="z-index: 3">
    <div class="container-fluid  mx-0 nav-header text-right text-white">
        <img class="" width="40px" height="40px" src="{{ filter_var($foundation->image, FILTER_VALIDATE_URL) ? $foundation->image : Voyager::image( $foundation->image ) }}" alt="" style="border-radius:50%">
        <p class="hide">{{$foundation->name}}</p>
        
    </div>
  {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> --}}
    <div class="side-link">
        <a href="/foundation/main_page">
            <i class="fa fa-home" aria-hidden="true" style="font-size: 18px"></i>
            <span class="nav-col">الصفحة الرئيسية</span>
        </a>
    </div>
    
    <div class="side-link">
        <a href="{{route('foundation.notifications')}}">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <span class="nav-col">الإشعارات</span>
        </a>
    </div>
     <div class="side-link">
        <a href="{{route('foundation.edit')}}">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            <span class="nav-col">إدارة ملف المنظمة الأهلية</span>
        </a>
    </div>
    <div class="dropdown-main-container">
        <div class="side-link">
            <button type="button" data-toggle="collapse" data-target="#demo" >
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-col">إدارة التقييم</span>
                <i class="fa fa-angle-down dropdownIcon" aria-hidden="true"></i>

            </a>
        </div>
        @if ($foundation->autoEvaluationDone == 1)
        <div id="demo" class="dropdown-container collapse">
            <div class="side-link dropdown">
                <a href="{{route('foundation.autoEvalResult')}}" >
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span class="nav-col">نتيجة التقييم الذاتى</span>
                    
                </a>
            </div>
            @if ($foundation->evalDone == 1)
            <div class="side-link dropdown">
                <a href="/foundation/evaluation_result" >
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <span class="nav-col">نتيجة التقييم الميدانى</span>
                </a>
            </div>
            @endif
            {{-- <div class="side-link dropdown">
                <a href="#" >
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="nav-col">خطة بناء القدرات</span>
                </a>
            </div> --}}
        </div>
        @else
        <div id="demo" class="dropdown-container collapse">
            <div class="side-link dropdown">
                <a href="/foundation/auto_evaluation" >
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span class="nav-col"> التقييم الذاتى</span>
                    
                </a>
            </div>            
        </div>
        @endif
            
        
    </div>
    
    {{-- ===== == --}}
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
    {{-- <a href="#demo" data-toggle="collapse">Collapsible</a>

    <div id="demo" class="collapse">
    Lorem ipsum dolor text....
    </div> --}}
</div>