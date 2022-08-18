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
                        <label for="menu">Tên sản phẩm</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nhập tên sản phẩm">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Danh mục</label>
                          <select class="form-control" name="menu_id"> 
                            @foreach($menus as $menu)
                              <option value="{{ $menu->id}}" {{ $product->menu_id == $menu->id ? 'selected' : ''}}>
                                {{ $menu->name}}</option>
                            @endforeach
                        
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Giá gốc</label>
                        <input type="number" name="price" value="{{ $product->price }}" id="price" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Giá giảm</label>
                        <input type="number" name="price_sale" value="{{ $product->price_sale }}" id="price_sale" class="form-control">
                      </div>
                    </div>
                  </div>
                 
                    <div class="form-group">
                      <label for="">Mô tả</label>
                      <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                    </div>
                  
                  <div class="form-group">
                    <label for="">Mô tả chi tiết</label>
                    <textarea name="content" id="content" class="form-control">{{ $product->content }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="menu">Ảnh sản phẩm</label>
                    <input type="file" name="file" id="upload" class="form-control">
                    <div id= "image_show">
                        <a href="" target="_blank">
                            <img src="{{ $product->thumb }}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" id="thumb" value="{{ $product->thumb }}">
                  </div>
                    <div class="form-group">
                    <lable>Kích hoạt</lable>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                            {{ $product->active == 1 ? ' checked=""' : '' }}>
                          <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                          {{ $product->active == 0 ? ' checked=""' : '' }}>
                          <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection