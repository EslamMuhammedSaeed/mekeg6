@extends('vendor.voyager.master')
@section('css')
@endsection

@section('content')

<div style="background-color: #f9f9f9">
    <div class="text-center" style="font-family: 'Almarai', sans-serif ">
        <h3>
        إضافة تدخل لمؤسسة
        </h3>
    </div>
    <form  action="/admin/add_support" method="post" style="font-family: 'Almarai', sans-serif ">
        @csrf
        <div style="margin-bottom: 30px">
            <label for="" >الجمعية</label>
       
            <select class="form-control" name="foundation_id" id="foundation_id" style="width: 300px">
                <option value=""></option>
                @forelse ($foundations as $foundation)
                    <option value="{{$foundation->id}}"> {{$foundation->id}} : {{$foundation->name}}</option>
                @empty
                    <option value=""></option>
                @endforelse
            </select>
        </div>

        <div style="margin-bottom: 30px">
            <label for="" >التدخل</label>
       
            <select class="form-control" name="support_id" id="support_id" style="width: 300px">
                <option value=""></option>
                @forelse ($supports as $support)
                    <option value="{{$support->id}}"> {{$support->interference}} </option>
                @empty
                    <option value=""></option>
                @endforelse
            </select>
        </div>
       

               <input class="btn btn-success" type="submit" value="تسجيل" name="submit" style="margin-bottom: 20px">

    </form>
</div>

<div>
    <div class="text-center" style="font-family: 'Almarai', sans-serif ">
        <h3>
        التدخلات المضافة
        </h3>
    </div>
    <table class="table" style="background-color: #f9f9f9">
        <thead class="thead-dark">
          <tr>
            <th>المؤسسة</th>
            <th>التدخل</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($foundations as $foundation)
            @forelse ($foundation->supports as $support)
                <tr>
                    <td>{{$foundation->name}}</td>
                    <td>{{$support->interference}}</td>
                    <td><a href="{{route('delete_support',[$foundation->id,$support->id])}}" class="btn btn-success">إلغاء</a></td>
                </tr>
            @empty
                
        @endforelse
        
        @endforeach
        </tbody>
      </table>
    {{-- @foreach ($foundations as $foundation)
        @forelse ($foundation->supports as $support)
            {{$foundation->name}} : {{$support->interference}}
        @empty
            
        @endforelse
        
    @endforeach --}}
</div>
@endsection

@section('javascript')

@endsection