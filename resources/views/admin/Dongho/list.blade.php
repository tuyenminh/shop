
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <!-- <th>Tên đường kính mặt</th> -->
                <th>Thương hiệu</th>
                <th>Giới tính</th>
                <th>Loại mặt số</th>
                <th>Loại máy</th>
                <th>Đường kính mặt</th>
                <th>Kiểu mặt</th>
                <th>Hình dáng mặt</th>
                <th>Chất liệu mặt kính</th>
                <th>Chất liệu dây</th>
                <th>Màu mặt</th>
                <th>Màu dây</th>
                <th>Loại đồng hồ</th>
                <th>Độ chống nước</th>
                <th>Phong cách</th>
                <th>Tiện ích</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donghos as $key => $dongho)
        <tr>
                    <td>{{ $dongho->id }}</td>
                    <td>{{ $dongho->th_id }}</td>
                    <td>{{ $dongho->gt_id }}</td>
                    <td>{{ $dongho->lms_id }}</td>
                    <td>{{ $dongho->lm_id }}</td>
                    <td>{{ $dongho->dkm_id }}</td>
                    <td>{{ $dongho->km_id }}</td>
                    <td>{{ $dongho->hdm_id }}</td>
                    <td>{{ $dongho->clmk_id }}</td>
                    <td>{{ $dongho->cld_id }}</td>
                    <td>{{ $dongho->mm_id }}</td>
                    <td>{{ $dongho->md_id }}</td>
                    <td>{{ $dongho->ldh_id }}</td>
                    <td>{{ $dongho->dcn_id }}</td>
                    <td>{{ $dongho->pc_id }}</td>
                    <td>{{ $dongho->ti_id }}</td>
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
