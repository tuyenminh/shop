
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên loại đồng hồ</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loaidonghos as $key => $loaidongho)
        <tr>
                    <td>{{ $loaidongho->id }}</td>
                    <td>{{ $loaidongho->ten }}</td>
                    <td>{{ $loaidongho->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/loaidonghos/edit/{{ $loaidongho->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $loaidongho->id }} , '/admin/loaidonghos/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $loaidonghos->links() !!}
    </di>
@endsection
