@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Mã đồng hồ</label>
                            <select class="form-control" name="dh_ma"> 
                            @foreach($donghos as $dongho)
                                <option value="{{ $dongho->id}}" {{ $hinhanh->dh_ma == $dongho->id ? '' : ''}}>
                                {{ $dongho->dh_ma}}</option>
                            @endforeach
                            </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="menu">Ảnh đồng hồ</label>
                    <input type="file" name="file" id="upload" class="form-control">
                    <div id= "image_show">
                        <a href="{{ $hinhanh->thumb }}">
                            <img src="{{ $hinhanh->thumb }}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" value="{{ $hinhanh->thumb }}" id="thumb">
                  </div>  
                    </div>
                  </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật hình ảnh</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection