<section class="foundation-profile-section mt-5">
    <div class="container-fluid">
        <div class="notifications-title mb-2"><h4>ملف المنظمة الأهلية</h4></div>
        <div class="container foundation-profile-container text-right shadow-sm">
            <div class="row">
                <div class="col-md-7">
                    <p style="color: rgb(3, 105, 17)">الكود التعريفى للمنظمة الأهلية : {{$foundation->id}}</p>
                    <p>أنشئت عام {{$foundation->recordYear}}</p>
                    <p>مسجلة برقم : {{$foundation->recordNumber}} </p>
                    <p>تاريخ الإشهار: {{$foundation->recordDate}}</p>
                    <p>{{$foundation->description}}</p>
                </div>
                <div class="col-sm-5">
                    <p>العنوان : {{$foundation->govern}}</p>
                    <p>موبايل : {{$foundation->mobilePhone}}</p>
                    <p>البريد الإلكترونى : {{Auth::user()->email}}</p>
                </div>
            </div>
            <div class="row text-center mt-3 mb-2">
                <a class="btn btn-mekeg d-block mx-auto" href="{{route('foundation.edit')}}">تعديل ملف المنظمة الأهلية</a>
            </div>
        </div>
    </div>
</section>