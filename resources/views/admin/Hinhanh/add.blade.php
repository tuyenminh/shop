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
                            <select class="form-control" name="dongho_id"> 
                            @foreach($donghos as $dongho)
                                <option value="{{ $dongho->id}}">{{ $dongho->dh_ma}}</option>
                            @endforeach
                            </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="menu">Ảnh sản phẩm</label>
                          <input type="file" name="file" id="upload" class="form-control">
                            <div id= "image_show"></div>
                          <input type="hidden" name="ha_ten" id="thumb">
                      </div>   
                    </div>
                  </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm hình ảnh</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection