@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="description" class="form-control"></textarea>
                  </div>
                
                  <div class="form-group">
                    <label for="">Mô tả chi tiết</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="parent_id"> 
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Giá gốc</label>
                    <input type="text" name="price" id="price" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Giá giảm</label>
                    <input type="text" name="price_sale" id="price_sale" class="form-control">
                  </div>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Chọn ảnh sản phẩm:
                        <input type="file" name="thumb" id="thumb">
                        <input type="submit" value="Upload Image" name="thumb" id= "thumb">
                    </form>
                    <div class="form-group">
                    <lable>Kích hoạt</lable>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                          <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                          <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection