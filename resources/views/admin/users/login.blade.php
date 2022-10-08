<!DOCTYPE html>
<html lang="en">
<head>

  @include ('admin.head')
</head>
<body class="hold-transition login-page">
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10"></div>
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/admin/users/login/store" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0">  HỆ THỐNG BÁN ĐỒNG HỒ</span></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Điền vào tài khoản của bạn</h5>
                  @include ('admin.alert')
                  <div class="form-outline mb-4">
                    <input type="email" name= "email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name= "password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Mật khẩu</label>
                  </div>
                  <div class="icheck-primary">
              <input type="checkbox" name="remember"id="remember">
              <label for="remember">
                Nhớ tài khoản của bạn 
              </label>
            </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Đăng nhập</button>
                  </div>
                  @csrf
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- /.login-box -->
  @include ('admin.footer')

</body>
</html>
