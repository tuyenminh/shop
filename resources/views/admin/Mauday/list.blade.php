
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên màu dây</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maudays as $key => $mauday)
        <tr>
                    <td>{{ $mauday->id }}</td>
                    <td>{{ $mauday->ten }}</td>
                    <td>{{ $mauday->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/maudays/edit/{{ $mauday->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $mauday->id }} , '/admin/maudays/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $maudays->links() !!}
    </di>
@endsection
