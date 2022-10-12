
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên chất liệu mặt kính</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chatlieumatkinhs as $key => $chatlieumatkinh)
        <tr>
                    <td>{{ $chatlieumatkinh->id }}</td>
                    <td>{{ $chatlieumatkinh->ten }}</td>
                    <td>{{ $chatlieumatkinh->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/chatlieumatkinhs/edit/{{ $chatlieumatkinh->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $chatlieumatkinh->id }} , '/admin/chatlieumatkinhs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $chatlieumatkinhs->links() !!}
    </di>
@endsection
