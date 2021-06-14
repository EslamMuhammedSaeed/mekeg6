@extends('vendor.voyager.master')

@section('content')


<div class="" style="font-family: 'Almarai', sans-serif ">
    <h3>
    بيان بالجمعيات التي تم اجراء تقييم ذاتي لها
    </h3>
</div>
<form  action="/admin/export_foundation_PDF" method="post" style="font-family: 'Almarai', sans-serif ">
    @csrf
    <label for="">الرقم الكودى</label>
    <input class="form-control" type="number" name='id' style="width: 200px">

    <input class="btn btn-success" type="submit" value="تحميل" name="submit">

</form>
@endsection
