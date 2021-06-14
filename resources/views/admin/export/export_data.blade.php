@extends('vendor.voyager.master')

@section('content')


<div class="" style="font-family: 'Almarai', sans-serif ">
    <h3>
    بيان بالجمعيات التي تم اجراء تقييم ذاتي لها
    </h3>
</div>
<form  action="/admin/export" method="post" style="font-family: 'Almarai', sans-serif ">
    @csrf
    <label for="">من</label>
    <input class="form-control" type="date" name='startDate' style="width: 200px">
    <label for="">إلى</label>
    <input class="form-control" type="date" name='endDate' style="width: 200px">
    <label for="">المحافظة</label>
    <input class="form-control" type="text" name='govern' style="width: 200px">
    {{-- <label for="workScope">نطاق العمل</label>
    <input type="text" name='workScope'> --}}
    <input class="btn btn-success" type="submit" value="تحميل" name="submit">

</form>
@endsection
