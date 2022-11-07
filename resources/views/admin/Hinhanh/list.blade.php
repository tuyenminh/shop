
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 50px;">STT</th>
                <th>Mã đồng hồ</th>
                <th>Ảnh</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hinhanhs as $key => $hinhanh)
        <tr>
                    <td>{{ $hinhanh->id }}</td>
                    <td>{{ $hinhanh->dongho->dh_ma}}</td>
                    <td>{{ $hinhanh->ha_ten }}</td>
                    <td>
                        <a href="{{ $hinhanh->ha_ten }}" target="_blank">
                            <img src="{{ $hinhanh->ha_ten }}" height="50px">
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/hinhanhs/edit/{{ $hinhanh->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $hinhanh->id }} , '/admin/hinhanhs/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $hinhanhs->links() !!}
 
@endsection
