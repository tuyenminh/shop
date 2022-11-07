
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">STT</th>
                <th style= "width: 200px;">Mã đồng hồ</th>
                <th style= "width: 50px;">Thương hiệu</th>
                <th style= "width: 50px;">Giới tính</th>
                <th style= "width: 50px;">Loại mặt số</th>
                <th style= "width: 50px;">Loại máy</th>
                <th style= "width: 50px;">Đường kính mặt</th>
                <th style= "width: 50px;">Kiểu mặt</th>
                <th style= "width: 50px;">Hình dáng mặt</th>
                <th style= "width: 50px;">Chất liệu mặt kính</th>
                <th style= "width: 50px;">Chất liệu dây</th>
                <th style= "width: 50px;">Màu mặt</th>
                <th style= "width: 50px;">Màu dây</th>
                <th style= "width: 50px;">Loại đồng hồ</th>
                <th style= "width: 50px;">Độ chống nước</th>
                <th style= "width: 50px;">Phong cách</th>
                <th style= "width: 50px;">Tiện ích</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donghos as $key => $dongho)
        <tr>
                    <td>{{ $dongho->id }}</td>
                    <td>{{ $dongho->dh_ma }}</td>
                    <td>{{ $dongho->thuonghieu->ten }}</td>
                    <td>{{ $dongho->gioitinh->ten}}</td>
                    <td>{{ $dongho->loaimatso->ten }}</td>
                    <td>{{ $dongho->loaimay->ten }}</td>
                    <td>{{ $dongho->duongkinhmat->ten }}</td>
                    <td>{{ $dongho->kieumat->ten }}</td>
                    <td>{{ $dongho->hinhdangmat->ten }}</td>
                    <td>{{ $dongho->chatlieumatkinh->ten }}</td>
                    <td>{{ $dongho->chatlieuday->ten }}</td>
                    <td>{{ $dongho->maumat->ten }}</td>
                    <td>{{ $dongho->mauday->ten }}</td>
                    <td>{{ $dongho->loaidongho->ten }}</td>
                    <td>{{ $dongho->dochongnuoc->ten }}</td>
                    <td>{{ $dongho->phongcach->ten }}</td>
                    <td>{{ $dongho->tienich->ten }}</td>
                    <td>{{ $dongho->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/donghos/edit/{{ $dongho->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $dongho->id }} , '/admin/donghos/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $donghos->links() !!}
    </di>
@endsection
