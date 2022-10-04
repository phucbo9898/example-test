<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form action="{{route('cms.postLogin')}}" method="post">
        @csrf
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible" style="width: 255px; height: 50px; margin-left: 20px;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('error')}}
        </div>
        @endif
      <div class="form-group has-feedback">
        <input type="email" name="email"  class="form-control" placeholder="Email" style="border-color:#3e434e;">
        {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert" style="color:red;">{{$errors->first('email')}}</span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password"  name="password" class="form-control" placeholder="Password" style="border-color:#3e434e;">
        {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert" style="color:red;">{{$errors->first('password')}}</span>
        @endif
      </div>
      <div class="row">
        <div class="" style="margin-left: 15px">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="" style="margin-left: 66px; margin-top: 15px;">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 78%;">Login</button>
        </div>
        <!-- /.col -->
        <div style="text-align: center;">
          <a href="#" style="">I forgot my password?</a><br>
        </div>
      </div>
    </form>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
