@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên đường kính mặt</label>
                    <input type="text" name="ten" value= "{{ $duongkinhmat->ten}}" class="form-control" placeholder="">
                  </div>   
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật đường kính mặt mới</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection