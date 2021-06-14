<table>
    <thead>
    <tr style="background-color: yellowgreen">
        <th style="background-color: #DDEBF7"><b>المحافظة</b></th>
        <th style="background-color: #DDEBF7"><b>إجمالى عدد الجمعيات</b></th>
        <th style="background-color: #DDEBF7"><b>أ</b></th>
        <th style="background-color: #DDEBF7"><b>ب</b></th>
        <th style="background-color: #DDEBF7"><b>ج</b></th>
        <th style="background-color: #DDEBF7"><b>د</b></th>


    </tr>
    </thead>
    <tbody>
        @foreach ($governs as $govern)
        <tr>
            <td>{{ $govern->govern }}</td>
            <td>{{ $govern->count }}</td>

            <td>{{ $govern->A }}</td>
            <td>{{ $govern->B }}</td>
            <td>{{ $govern->C }}</td>
            <td>{{ $govern->D }}</td>
  
        </tr>
        @endforeach
    
    </tbody>
</table>