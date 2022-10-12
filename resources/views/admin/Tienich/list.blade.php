
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên tiện ích</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tienichs as $key => $tienich)
        <tr>
                    <td>{{ $tienich->id }}</td>
                    <td>{{ $tienich->ten }}</td>
                    <td>{{ $tienich->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/tienichs/edit/{{ $tienich->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $tienich->id }} , '/admin/tienichs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $tienichs->links() !!}
    </di>
@endsection
