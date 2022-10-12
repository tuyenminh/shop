
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên kiểu mặt</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kieumats as $key => $kieumat)
        <tr>
                    <td>{{ $kieumat->id }}</td>
                    <td>{{ $kieumat->ten }}</td>
                    <td>{{ $kieumat->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/kieumats/edit/{{ $kieumat->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $kieumat->id }} , '/admin/kieumats/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $kieumats->links() !!}
    </di>
@endsection
