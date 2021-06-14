@extends('vendor.voyager.master')
@section('css')
@endsection

@section('content')

<div style="background-color: #f9f9f9">
    <div class="text-center" style="font-family: 'Almarai', sans-serif ">
        <h3>
        إضافة تقييم ميدانى
        </h3>
    </div>
    <form  action="/admin/add_evaluation" method="post" style="font-family: 'Almarai', sans-serif ">
        @csrf
        <div style="margin-bottom: 30px">
            <label for="" >الجمعية</label>
       
            <select class="form-control" name="id" id="id" style="width: 300px">
                <option value=""></option>
                @forelse ($foundations as $foundation)
                    <option value="{{$foundation->id}}"> {{$foundation->id}} : {{$foundation->name}}</option>
                @empty
                    <option value=""></option>
                @endforelse
            </select>
        </div>
       

        <div class="" style="font-family: 'Almarai', sans-serif ; margin-top: 10px " >
            <h4>
            التقييم الفنى
            </h4>
        </div>
        
        
            
        <div class="row" style=" margin-top: 10px">
            <div class="col-md-4">
                <label for="">القسم الأول : البيانات الأساسية</label>
                <input class="form-control" type="number" name='evalTechSec1' style="width: 300px" required>
            </div>
            <div class="col-md-4">
                <label for="">القسم الثانى : نظام العضوية</label>
                <input class="form-control" type="number" name='evalTechSec2' style="width: 300px" required>
            </div>
            <div class="col-md-4">
                <label for="">القسم الثالث : إدارة البرامج و المشروعات</label>
                <input class="form-control" type="number" name='evalTechSec3' style="width: 300px" required>
            </div>
        </div>


        <div class="row" style="">
            <div class="col-md-4">
                <label for="">القسم الرابع : إدارة الموارد البشرية</label>
                <input class="form-control" type="number" name='evalTechSec4' style="width: 300px" required>
            </div>
            <div class="col-md-4">
                <label for="">القسم الخامس : نظام المعلومات و التوثيق</label>
                <input class="form-control" type="number" name='evalTechSec5' style="width: 300px" required>
            </div>    
            <div class="col-md-4">
                <label for="">القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية</label>
                <input class="form-control" type="number" name='evalTechSec6' style="width: 300px" required>
            </div>
        </div>

        <div class="" style="font-family: 'Almarai', sans-serif ; margin-top: 5px " >
            <h4>
            التقييم المالي
            </h4>
        </div>

        <div class="row" style=" margin-top: 10px">
            <div class="col-md-4">
                <label for="">القسم الأول  : وجود نظام محاسبة و رقابة داخلية</label>
                <input class="form-control" type="number" name='evalFinSec1' style="width: 300px" required>
            </div>
            <div class="col-md-4">    
                <label for="">القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة</label>
                <input class="form-control" type="number" name='evalFinSec2' style="width: 300px" required>
            </div>
            <div class="col-md-4">    
                <label for="">القسم الثالث : النقدية(الخزينة و البنك)</label>
                <input class="form-control" type="number" name='evalFinSec3' style="width: 300px" required>
            </div>
        </div>
        
        <div class="row" style=" margin-top: 10px">
            <div class="col-md-4"> 
                <label for="">القسم الرابع : المخازن</label>
                <input class="form-control" type="number" name='evalFinSec4' style="width: 300px" required>
            </div>
            <div class="col-md-4"> 
                <label for="">القسم الخامس : متابعة مصروفات الجمعية</label>
                <input class="form-control" type="number" name='evalFinSec5' style="width: 300px" required>
            </div>
             <div class="col-md-4"> 
                <label for="">القسم السادس : الأصول الثابتة</label>
                <input class="form-control" type="number" name='evalFinSec6' style="width: 300px" required>
             </div>
        </div>         

        <div class="row" style=" margin-top: 10px">
            <div class="col-md-4">
                <label for="">القسم السابع : المشتريات و مصروفات الأنشطة</label>
                <input class="form-control" type="number" name='evalFinSec7' style="width: 300px">
            </div>
            <div class="col-md-4">
                <label for="">القسم الثامن : المبيعات و الإيرادات</label>
                <input class="form-control" type="number" name='evalFinSec8' style="width: 300px">
            </div>
            <div class="col-md-4">
                <label for="">القسم التاسع : التقارير المالية</label>
                <input class="form-control" type="number" name='evalFinSec9' style="width: 300px">
            </div>
        </div>

        
        <input class="btn btn-success" type="submit" value="تسجيل" name="submit" style="margin-bottom: 20px">

    </form>
</div>
@endsection

@section('javascript')

@endsection