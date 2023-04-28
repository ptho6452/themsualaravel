@extends('layout')
@section('content')
<div class="card">
    <div class="card-body">
        @foreach ($sinhvien as $sv)
        <tr>
       
            <td>{{ $sv->maSV }}</td>
            <td>{{ $sv->hoten }}</td>
            <td>{{ $sv->ngaysinh}}</td>
            <td>{{ $sv->gioitinh }}</td>
            <td>{{ $sv->diachi }}</td>
            <td>{{ $sv->sdt }}</td>
          
       
        </tr>
        
            
        @endforeach

    </div>
</div>