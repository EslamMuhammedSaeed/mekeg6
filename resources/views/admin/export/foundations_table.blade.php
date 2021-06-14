<table>
    <thead>
    <tr style="background-color: yellowgreen">
        <th style="background-color: #B2B2B2"><b>الرقم الكودى</b></th>
        <th style="background-color: #B2B2B2"><b>اسم الجمعية</b></th>
        <th style="background-color: #9BBB59"><b>المحافظة</b></th>
        <th style="background-color: #9BBB59"><b>المركز</b></th>
        <th style="background-color: #9BBB59"><b>القرية</b></th>
        <th style="background-color: #FFCCCC" ><b>رقم الاشهار</b></th>
        <th style="background-color: #FFCCCC"><b>سنة الاشهار</b></th>
        <th style="background-color: #FFCCCC"><b>الجهة الإدارية</b></th>
        <th style="background-color: #FFCCCC"><b>نطاق العمل</b></th>
        <th style="background-color: #FFCCCC"><b>ميادين العمل</b></th>
        <th style="background-color: #92D050"><b>مسئول اتصال أول</b></th>
        <th style="background-color: #92D050"><b>الصفة</b></th>
        <th style="background-color: #92D050"><b>التليفون</b></th>
        <th style="background-color: #92D050"><b>مسئول اتصال  ثان</b></th>
        <th style="background-color: #92D050"><b>الصفة</b></th>
        <th style="background-color: #92D050"><b>التليفون</b></th>
        <th style="background-color: #92D050"><b>مسئول اتصال ثالث</b></th>
        <th style="background-color: #92D050"><b>الصفة</b></th>
        <th style="background-color: #92D050"><b>التليفون</b></th>
        <th style="background-color: #92D050"><b>الموقع الإلكترونى</b></th>
        <th style="background-color: #DDEBF7"><b>تاريخ التقييم</b></th>
        <th style="background-color: #DDEBF7"><b>إجمالى نتيجة التقييم</b></th>
        <th style="background-color: #DDEBF7"><b>التصنيف</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة التقييم الفنى</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة التقييم المالى</b></th>
        <th style="background-color: #DDEBF7"><b> نتيجة القسم الأول</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم الثانى</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم الثالث</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم الرابع</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم الخامس</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم السادس</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم السابع</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم الثامن</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم التاسع</b></th>
        <th style="background-color: #DDEBF7"><b>نتيجة القسم العاشر</b></th>





    </tr>
    </thead>
    <tbody>
    @foreach($foundations as $foundation)
        <tr>
            <td>{{ $foundation->id }}</td>
            <td>{{ $foundation->name }}</td>
            <td>{{ $foundation->govern }}</td>
            <td>{{ $foundation->local }}</td>
            <td>{{ $foundation->village }}</td>
            <td>{{ $foundation->recordNumber }}</td>
            <td>{{ $foundation->recordYear }}</td>
            <td>{{ $foundation->management }}</td>
            <td>{{ $foundation->workScope }}</td>
            <td>{{ $foundation->workFields }}</td>
            <td>{{ $foundation->firstPersonName }}</td>
            <td>{{ $foundation->firstPersonRole }}</td>
            <td>{{ $foundation->firstPersonPhone }}</td>
            <td>{{ $foundation->secondPersonName }}</td>
            <td>{{ $foundation->secondPersonRole }}</td>
            <td>{{ $foundation->secondPersonPhone }}</td>
            <td>{{ $foundation->thirdPersonName }}</td>
            <td>{{ $foundation->thirdPersonRole }}</td>
            <td>{{ $foundation->thirdPersonPhone }}</td>
            <td>{{ $foundation->email }}</td>

            <td>{{ $foundation->autoEvaluationDate }}</td>
            <td>{{ $foundation->autoEvaluationTotal }}</td>
            <td>{{ $foundation->autoEvaluationClass }}</td>

            <td>{{ $foundation->autoEvaluationTech }}</td>
            <td>{{ $foundation->autoEvaluationFin }}</td>
            <td>{{ $foundation->autoEvaluationSec1 }}</td>
            <td>{{ $foundation->autoEvaluationSec2 }}</td>
            <td>{{ $foundation->autoEvaluationSec3 }}</td>
            <td>{{ $foundation->autoEvaluationSec4 }}</td>
            <td>{{ $foundation->autoEvaluationSec5 }}</td>
            <td>{{ $foundation->autoEvaluationSec6 }}</td>
            <td>{{ $foundation->autoEvaluationSec7 }}</td>
            <td>{{ $foundation->autoEvaluationSec8 }}</td>
            <td>{{ $foundation->autoEvaluationSec9 }}</td>
            <td>{{ $foundation->autoEvaluationSec10 }}</td>


        </tr>
    @endforeach
    </tbody>
</table>