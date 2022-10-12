
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên thương hiệu</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($thuonghieus as $key => $thuonghieu)
        <tr>
                    <td>{{ $thuonghieu->id }}</td>
                    <td>{{ $thuonghieu->ten }}</td>
                    <td>{{ $thuonghieu->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/thuonghieus/edit/{{ $thuonghieu->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $thuonghieu->id }} , '/admin/thuonghieus/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $thuonghieus->links() !!}
    </di>
@endsection
