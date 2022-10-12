
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên chất liệu dây</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chatlieudays as $key => $chatlieuday)
        <tr>
                    <td>{{ $chatlieuday->id }}</td>
                    <td>{{ $chatlieuday->ten }}</td>
                    <td>{{ $chatlieuday->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/chatlieudays/edit/{{ $chatlieuday->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $chatlieuday->id }} , '/admin/chatlieudays/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $chatlieudays->links() !!}
    </di>
@endsection
