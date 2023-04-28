@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3> QUản lý sinh viên <h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end">Thêm mới</a>
            </div>
        </div>
    </div>
<div class="card-body">
    @if(Session::has('thongbao'))
        <div class="alert alert-success">
            {{ Session::get('thongbao') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT </th>
                <th> Mã SV</th>
                <th> Họ Tên</th>
                <th> Ngày sinh</th>
                <th> GIới tính</th>
                <th> Địa chỉ</th>
                <th> SDT </th>
                <th>Thao tác </th>
            </tr>
            
        </thead>

<tbody>
    <?php $id=1; ?>
    
        @foreach ($sinhvien as $sv)
        <tr>
            <td> {{ ++$id }}</td>
            <td>{{ $sv->maSV }}</td>
            <td>{{ $sv->hoten }}</td>
            <td>{{ $sv->ngaysinh}}</td>
            <td>{{ $sv->gioitinh }}</td>
            <td>{{ $sv->diachi }}</td>
            <td>{{ $sv->sdt }}</td>
            <td>
                <form action="{{ route('sinhvien.destroy',$sv->id) }}" method="POST">
                <a href="{{ route('sinhvien.edit',$sv->id) }}" class="btn btn-info">Sửa</a>
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger">Xóa </button> 
            </form>
            </td>
        </tr>
        
            
        @endforeach


</tbody>

    </table>
</div>
</div>

</div>
@endsection