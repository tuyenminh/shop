
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">Mã</th>
                <th>Tên hình dáng mặt</th>
                <th>Ngày tạo</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hinhdangmats as $key => $hinhdangmat)
        <tr>
                    <td>{{ $hinhdangmat->id }}</td>
                    <td>{{ $hinhdangmat->ten }}</td>
                    <td>{{ $hinhdangmat->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/hinhdangmats/edit/{{ $hinhdangmat->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $hinhdangmat->id }} , '/admin/hinhdangmats/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $hinhdangmats->links() !!}
    </di>
@endsection
