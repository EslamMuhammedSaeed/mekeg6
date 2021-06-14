@extends('foundation.master')
    <!--nav-->

 <!--nav-->
 <!--start main section-->
 @section('content')
 @include('foundation.inc.nav')
     
 
 <main class="mt-5">
     
     <form method="post" action="/foundation/foundation_profile_edit" class="main-form was-validated" enctype="multipart/form-data">
        @csrf
         <div class="form-container container">
             <div class="row">
                 <div class="col-12 col-lg-4 pr-5 pt-5 ">
                     <div id="image_container" class="image-input position-relative">
                            <img id="trial" src="" class="img-fluid rounded-circle h-100">
                            <div class="svg-holder">
                                <svg  width="56" height="52" viewBox="0 0 56 52" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="56" height="52" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(0 -0.039532) scale(0.00198807 0.002141)"/>
                                    </pattern>
                                    <image id="image0" width="503" height="504" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>   
                            </div> 
                            <input id="input-image" class="is-valid" name="image" type="file" accept="image/png, image/gif, image/jpeg" >
                            <div id="input-text" class="input-text ">أﺿﻒ ﺷﻌﺎر المنظمة </div>
                     </div>
                 </div>
                 <div class="col-12  col-lg-8 ">
                   <div class="org-data">
                        <div class="mb-3 ">
                            {{-- <input type="text" name="image"> --}}
                            {{-- <input type="file" name="image"> --}}

                            <label  class="org-name">اﺳﻢ المنظمة الأهلية</label>
                            <input type="text" class="form-control is-valid" id="name" name="name" value="{{$foundation->name}}" placeholder="" required>
                        </div>
                        <div class="mb-3 ">
                            <label  class="org-name">وﺻﻒ ﻣﺨﺘﺼﺮ ﻋﻦ المنظمة الأهلية</label>
                            <textarea class="form-control is-valid" name="description" id="exampleFormControlTextarea1" value="{{$foundation->description}}" required rows="3">{{$foundation->description}}</textarea>
                        </div>
                   </div>
                 </div>
             </div>
             <section class="essential-data">
                 <div class="heading">
                     <h3>اﻟﻤﻌﻠﻮﻣﺎت اﻟﺄﺳﺎﺳﻴﺔ</h3>
                 </div>
                 <div class="row">
                     <div class="col-md-6 col-lg-4">
                          <div class="mb-3 align-margin">
                                <label class="form-label">المحافظة</label>
                                <input type="text" name="govern" value="{{$foundation->govern}}" class="form-control is-valid" required>
                          </div>
                          <div class="mb-3">
                                <label  class="form-label">القرية</label>
                                <input type="text" name="village" value="{{$foundation->village}}" class="form-control is-valid" required>
                          </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="mb-3 align-margin">
                              <label  class="form-label">المركز</label>
                              <input type="text" name="state" value="{{$foundation->state}}" class="form-control is-valid" >
                        </div>
                        <div class="mb-3">
                              <label  class="form-label">اﻟﺠﻬﺔ اﻟﺈدﺍﺭﻳﺔ اﻟﺘﺎﺑﻊ ﻟﻬﺎ اﻟﺠﻤﻌﻴﺔ</label>
                              <input type="text" name="management" value="{{$foundation->management}}" class="form-control is-valid" required>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                         <div class="local-unit">
                            <div class="mb-3">
                                <label  class="form-label">اﻟﻮﺣﺪة اﻟﻤﺤﻠﻴﺔ</label>
                                <input type="text" name="local" value="{{$foundation->local}}" class="form-control is-valid" required>
                            </div>
                            
                            
                         </div>
                     </div>
                 </div>

                 <div class="row mt-5 mb-5">
                     <div class="col-lg-6">
                        <div class="local-unit-date">
                            <h5>رﻗﻢ وﺗﺎرﻳﺦ اﻟﺈﺷﻬﺎر</h5>
                            <div class="row">
                                <div class="col-4">
                                    <label  class="form-label">رﻗﻢ</label>
                                    <input type="number" name="recordNumber" value="{{$foundation->recordNumber}}" class="is-valid w-100" name="number" required>
                                </div>
                                <div class="col-4">
                                    <label  class="form-label">السنة</label>
                                    <input type="number" class="is-valid w-100" name="recordYear" value="{{$foundation->recordYear}}" required>
                                </div>
                                
                            </div>
                        </div>
                     </div>
                 </div>
                 
             </section>  
             <section class="personnel-info">
                 <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="heading">
                            <h3> مسؤول الاتصال الاول</h3>
                        </div>
                        <div class="mb-3 align-margin">
                            <label class="form-label">الاسم</label>
                            <input type="text" class="form-control is-valid" name="firstPersonName" value="{{$foundation->firstPersonName}}" required>
                        </div>
                        <div class="mb-3">
                                <label  class="form-label">اﻟﺼﻔﺔ اﻟﻮﻇﻴﻔﻴﺔ</label>
                                <input type="text" class="form-control is-valid" name="firstPersonRole" value="{{$foundation->firstPersonRole}}" required>
                        </div>
                        <div class="mb-3">
                                <label  class="form-label">رقم الموبايل(واتساب)</label>
                                <input type="tel" class="form-control is-valid" name="firstPersonPhone" value="{{$foundation->firstPersonPhone}}" required>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="heading">
                            <h3> مسؤول الاتصال اﻟﺜﺎﻧﻲ</h3>
                        </div>
                        <div class="mb-3 align-margin">
                            <label class="form-label">الاسم</label>
                            <input type="text" name="secondPersonName" value="{{$foundation->secondPersonName}}" class="form-control background">
                        </div>
                        <div class="mb-3">
                                <label  class="form-label">اﻟﺼﻔﺔ اﻟﻮﻇﻴﻔﻴﺔ</label>
                                <input type="text" name="secondPersonRole" value="{{$foundation->secondPersonRole}}" class="form-control background">
                        </div>
                        <div class="mb-3">
                                <label  class="form-label">رقم الموبايل(واتساب)</label>
                                <input type="tel" name="secondPersonPhone" value="{{$foundation->secondPersonPhone}}" class="form-control background">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                            <div class="heading">
                                <h3>  مسؤول اﻟﺎﺗﺼﺎل اﻟﺜﺎﻟﺚ </h3>
                            </div>
                            <div class="mb-3 align-margin">
                                <label class="form-label">الاسم</label>
                                <input type="text" name="thirdPersonName" value="{{$foundation->thirdPersonName}}" class="form-control" >
                            </div>
                            <div class="mb-3">
                                    <label  class="form-label">اﻟﺼﻔﺔ اﻟﻮﻇﻴﻔﻴﺔ</label>
                                    <input type="text" name="thirdPersonRole" value="{{$foundation->thirdPersonRole}}" class="form-control" >
                            </div>
                            <div class="mb-3">
                                    <label  class="form-label">رقم الموبايل(واتساب)</label>
                                    <input type="tel" name="thirdPersonPhone" value="{{$foundation->thirdPersonPhone}}" class="form-control">
                            </div>
                     </div>
                 </div>
             </section>
             <section class="org-contact-info">
                <div class="heading">
                    <h3>ﻫﺎﺗﻒ المنظمة الأهلية</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3 align-margin">
                            <label class="form-label">ارضي</label>
                            <input type="text" name="landPhone" value="{{$foundation->landPhone}}" class="form-control is-valid" >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3 align-margin">
                            <label class="form-label">موبايل</label>
                            <input type="text" name="mobilePhone" value="{{$foundation->mobilePhone}}" class="form-control is-valid" required >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3 align-margin">
                            <label class="form-label">فاكس</label>
                            <input type="text" name="fax" value="{{$foundation->fax}}" class="form-control " >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3 align-margin">
                            <label class="form-label">اﻟﻤﻮﻗﻊ اﻟﺈﻟﻜﺘﺮوﻧﻲ</label>
                            <input type="text" name="email" value="{{$foundation->email}}" class="form-control background" >
                        </div>
                    </div>
                </div>
             </section>
             
             <div class="button-holder mb-5">
                <input type="submit" class="btn btn-success" value="حفظ">
             </div>
         </div>
     </form>
 </main>
 <!--end main section-->





    <!--start js files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
@endsection