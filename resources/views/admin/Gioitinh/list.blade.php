
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên giới tính</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gioitinhs as $key => $gioitinh)
        <tr>
                    <td>{{ $gioitinh->id }}</td>
                    <td>{{ $gioitinh->ten }}</td>
                    <td>{{ $gioitinh->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/gioitinhs/edit/{{ $gioitinh->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $gioitinh->id }} , '/admin/gioitinhs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $gioitinhs->links() !!}
    </di>
@endsection
