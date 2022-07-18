@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
                  </div>

                  <div class="form-group">
                    <label for="">Danh mục cha</label>
                    <select class="form_control" name="parent_id"> 
                        <option value="0">Danh mục cha</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="decription" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="">Mô tả chi tiết</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <lable>Kích hoạt</lable>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="1" type="radio" id="active" name="customRadio">
                          <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="0" type="radio" id="no_active" name="customRadio" checked>
                          <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo danh mục</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection