
@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>sửa sinh vien</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('sinhvien.index') }}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('sinhvien.update',$sinhvien->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã sinh viên</strong>
                            <input type="text" name="masv" value="{{ $sinhvien->maSV }}" class="form-control" placeholder="Nhập mã sinh viên">
                        </div>
                        <div class="form-group">
                            <strong>Họ tên</strong>
                            <input type="text" name="hoten"  value="{{ $sinhvien->hoten }}" class="form-control" placeholder="Nhập họ tên">
                        </div>
                        <div class="form-group">
                            <strong>Ngày sinh</strong>
                            <input type="date" name="ngaysinh"  value="{{ $sinhvien->ngaysinh }}" class="form-control" placeholder="Nhập ngày sinh">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã sinh viên</strong>
                            <select name="gioitinh" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam" {{ $sinhvien->gioitinh=="Nam"?'selected':'' }}>Nam</option>
                                    <option value="Nu"  {{ $sinhvien->gioitinh=="Nu"?'selected':'' }}>Nu</option>

                            </select>
                            <div class="form-group">
                                <strong>đ ịa chỉ</strong> 
                                <input type="text" name="diachi" class="form-control" value="{{ $sinhvien->diachi }}" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="sdt" class="form-control" value="{{ $sinhvien->sdt }}" placeholder="Nhập số điện thoại ">
                            </div>

              
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection