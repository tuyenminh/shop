
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên đường kính mặt</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($duongkinhmats as $key => $duongkinhmat)
        <tr>
                    <td>{{ $duongkinhmat->id }}</td>
                    <td>{{ $duongkinhmat->ten }}</td>
                    <td>{{ $duongkinhmat->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/duongkinhmats/edit/{{ $duongkinhmat->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $duongkinhmat->id }} , '/admin/duongkinhmats/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $duongkinhmats->links() !!}
    </di>
@endsection
