
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên loại mặt số</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loaimatsos as $key => $loaimatso)
        <tr>
                    <td>{{ $loaimatso->id }}</td>
                    <td>{{ $loaimatso->ten }}</td>
                    <td>{{ $loaimatso->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/loaimatsos/edit/{{ $loaimatso->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $loaimatso->id }} , '/admin/loaimatsos/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $loaimatsos->links() !!}
    </di>
@endsection
