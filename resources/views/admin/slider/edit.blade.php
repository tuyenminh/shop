@extends('admin.main')

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="menu">Tiêu đề</label>
                        <input type="text" name="name" value="{{ $slider->name }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="menu">Đường dẫn</label>
                        <input type="text" name="url" value="{{ $slider->url }}" class="form-control" placeholder="">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="menu">Ảnh sản phẩm</label>
                    <input type="file" name="file" id="upload" class="form-control">
                    <div id= "image_show">
                        <a href="{{ $slider->thumb }}">
                            <img src="{{ $slider->thumb }}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" value="{{ $slider->thumb }}" id="thumb">
                </div>
                  <div class="form-group">
                        <label for="">Sắp xếp</label>
                        <input type="number" name="sort_by" value="{{ $slider->sort_by }}" id="sort_by" class="form-control">
                    </div>
                    <div class="form-group">
                    <lable>Kích hoạt</lable>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                            {{ $slider->active == 1 ? 'checked' : '' }}>
                          <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                            {{ $slider->active == 0 ? 'checked' : '' }}>
                          <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật silder</button>
                </div>
                @csrf
              </form>

@endsection