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
                        <label for="">Thương hiệu</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($thuonghieus as $thuonghieu)
                                <option value="{{ $thuonghieu->id}}">{{ $thuonghieu->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Giới tính</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($gioitinhs as $gioitinh)
                                <option value="{{ $gioitinh->id}}">{{ $gioitinh->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại đồng hồ</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($loaidonghos as $loaidongho)
                                <option value="{{ $loaidongho->id}}">{{ $loaidongho->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Phong cách</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($phongcachs as $phongcach)
                                <option value="{{ $phongcach->id}}">{{ $phongcach->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Chất liệu mặt kính</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($chatlieumatkinhs as $chatlieumatkinh)
                                <option value="{{ $chatlieumatkinh->id}}">{{ $chatlieumatkinh->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Đường kính mặt</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($duongkinhmats as $duongkinhmat)
                                <option value="{{ $duongkinhmat->id}}">{{ $duongkinhmat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Độ chống nước</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($dochongnuocs as $dochongnuoc)
                                <option value="{{ $dochongnuoc->id}}">{{ $dochongnuoc->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Màu mặt</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($maumats as $maumat)
                                <option value="{{ $maumat->id}}">{{ $maumat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Tiện ích</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($tienichs as $tienich)
                                <option value="{{ $tienich->id}}">{{ $tienich->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại mặt số</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($loaimatsos as $loaimatso)
                                <option value="{{ $loaimatso->id}}">{{ $loaimatso->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại máy</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($loaimays as $loaimay)
                                <option value="{{ $loaimay->id}}">{{ $loaimay->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Hình dáng mặt</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($hinhdangmats as $hinhdangmat)
                                <option value="{{ $hinhdangmat->id}}">{{ $hinhdangmat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Chất liệu dây</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($chatlieudays as $chatlieuday)
                                <option value="{{ $chatlieuday->id}}">{{ $chatlieuday->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Kiểu mặt</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($kieumats as $kieumat)
                                <option value="{{ $kieumat->id}}">{{ $kieumat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Màu dây</label>
                            <select class="form-control" name="cld_id"> 
                            @foreach($maudays as $mauday)
                                <option value="{{ $mauday->id}}">{{ $mauday->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                     
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm đồng hồ</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection