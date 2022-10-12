
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên phong cách</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phongcachs as $key => $phongcach)
        <tr>
                    <td>{{ $phongcach->id }}</td>
                    <td>{{ $phongcach->ten }}</td>
                    <td>{{ $phongcach->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/phongcachs/edit/{{ $phongcach->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $phongcach->id }} , '/admin/phongcachs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $phongcachs->links() !!}
    </di>
@endsection
