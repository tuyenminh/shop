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
                        <input type="text" name="dh_ma" value= "{{ $dongho->dh_ma}}" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Thương hiệu</label>
                            <select class="form-control" name="th_id"> 
                            @foreach($thuonghieus as $thuonghieu)
                                <option value="{{ $thuonghieu->id}}">{{ $dongho->th_id == $thuonghieu->id ? '' : ''}}
                                {{ $thuonghieu->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại đồng hồ</label>
                            <select class="form-control" name="ldh_id"> 
                            @foreach($loaidonghos as $loaidongho)
                                <option value="{{ $loaidongho->id}}">{{ $dongho->ldh_id == $dongho->id ? '' : ''}}
                                {{ $loaidongho->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Phong cách</label>
                            <select class="form-control" name="pc_id"> 
                            @foreach($phongcachs as $phongcach)
                                <option value="{{ $phongcach->id}}">{{ $dongho->pc_id == $dongho->id ? '' : ''}}
                                {{ $phongcach->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Chất liệu mặt kính</label>
                            <select class="form-control" name="clmk_id"> 
                            @foreach($chatlieumatkinhs as $chatlieumatkinh)
                                <option value="{{ $chatlieumatkinh->id}}">{{ $dongho->clmk_id == $dongho->id ? '' : ''}}
                                {{ $chatlieumatkinh->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Đường kính mặt</label>
                            <select class="form-control" name="dkm_id"> 
                            @foreach($duongkinhmats as $duongkinhmat)
                                <option value="{{ $duongkinhmat->id}}">{{ $dongho->dkm_id == $dongho->id ? '' : ''}}
                                {{ $duongkinhmat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Độ chống nước</label>
                            <select class="form-control" name="dcn_id"> 
                            @foreach($dochongnuocs as $dochongnuoc)
                                <option value="{{ $dochongnuoc->id}}">{{ $dongho->dcn_id == $dongho->id ? '' : ''}}
                                {{ $dochongnuoc->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Màu mặt</label>
                            <select class="form-control" name="mm_id"> 
                            @foreach($maumats as $maumat)
                                <option value="{{ $maumat->id}}">{{ $dongho->mm_id == $dongho->id ? '' : ''}}
                                {{ $maumat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Tiện ích</label>
                            <select class="form-control" name="ti_id"> 
                            @foreach($tienichs as $tienich)
                                <option value="{{ $tienich->id}}">{{ $dongho->ti_id == $dongho->id ? '' : ''}}
                                {{ $tienich->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại mặt số</label>
                            <select class="form-control" name="lms_id"> 
                            @foreach($loaimatsos as $loaimatso)
                                <option value="{{ $loaimatso->id}}">{{ $dongho->lms_id == $dongho->id ? '' : ''}}
                                {{ $loaimatso->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Loại máy</label>
                            <select class="form-control" name="lm_id"> 
                            @foreach($loaimays as $loaimay)
                                <option value="{{ $loaimay->id}}">{{ $dongho->lm_id == $dongho->id ? '' : ''}}
                                {{ $loaimay->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Hình dáng mặt</label>
                            <select class="form-control" name="hdm_id"> 
                            @foreach($hinhdangmats as $hinhdangmat)
                                <option value="{{ $hinhdangmat->id}}">{{ $dongho->hdm_id == $dongho->id ? '' : ''}}
                                {{ $hinhdangmat->ten}}</option>
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
                                <option value="{{ $chatlieuday->id}}">{{ $dongho->cld_id == $dongho->id ? '' : ''}}
                                {{ $chatlieuday->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Kiểu mặt</label>
                            <select class="form-control" name="km_id"> 
                            @foreach($kieumats as $kieumat)
                                <option value="{{ $kieumat->id}}">{{ $dongho->km_id == $dongho->id ? '' : ''}}
                                {{ $kieumat->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Màu dây</label>
                            <select class="form-control" name="md_id"> 
                            @foreach($maudays as $mauday)
                                <option value="{{ $mauday->id}}">{{ $dongho->md_id == $dongho->id ? '' : ''}}
                                {{ $mauday->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Giới tính</label>
                            <select class="form-control" name="gt_id"> 
                            @foreach($gioitinhs as $gioitinh)
                                <option value="{{ $gioitinh->id}}">{{ $dongho->gt_id == $dongho->id ? '' : ''}}
                                {{ $gioitinh->ten}}</option>
                            @endforeach

                            </select>
                      </div>
                    </div> 
                     
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật đồng hồ</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection