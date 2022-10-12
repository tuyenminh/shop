
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên màu mặt</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maumats as $key => $maumat)
        <tr>
                    <td>{{ $maumat->id }}</td>
                    <td>{{ $maumat->ten }}</td>
                    <td>{{ $maumat->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/maumats/edit/{{ $maumat->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $maumat->id }} , '/admin/maumats/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $maumats->links() !!}
    </di>
@endsection
