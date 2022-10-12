
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên độ chống nước</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dochongnuocs as $key => $dochongnuoc)
        <tr>
                    <td>{{ $dochongnuoc->id }}</td>
                    <td>{{ $dochongnuoc->ten }}</td>
                    <td>{{ $dochongnuoc->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/dochongnuocs/edit/{{ $dochongnuoc->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $dochongnuoc->id }} , '/admin/dochongnuocs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $dochongnuocs->links() !!}
    </di>
@endsection
