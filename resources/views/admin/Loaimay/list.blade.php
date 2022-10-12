
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên loại máy</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loaimays as $key => $loaimay)
        <tr>
                    <td>{{ $loaimay->id }}</td>
                    <td>{{ $loaimay->ten }}</td>
                    <td>{{ $loaimay->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/loaimays/edit/{{ $loaimay->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $loaimay->id }} , '/admin/loaimays/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $loaimays->links() !!}
    </di>
@endsection
