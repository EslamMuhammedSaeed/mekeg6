<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/admin/export" method="post">
        @csrf
        <label for="">من</label>
        <input type="date" name='startDate'>
        <label for="">إلى</label>
        <input type="date" name='endDate'>
        <label for="">المحافظة</label>
        <input type="text" name='govern'>
        <input type="submit" value="تحديث" name="submit">

    </form>
    <div>
        @forelse ($foundations as $foundation)
            {{-- @foreach ($foundation as $field)
                {{$field}}
            @endforeach --}}
            {{$foundation->name}}
        @empty
            لا يوجد
        @endforelse
        
    </div>
</body>
</html>