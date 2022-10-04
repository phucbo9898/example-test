<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
</head>
<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="{{asset('upload/front-end/logo.svg')}}"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="{{route('fe.postLogin')}}" method="post">
            <!-- Email input -->
            @csrf
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible" style="width: 285px; height: 60px;">
                {{Session::get('error')}}
                {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
            </div>
            @endif
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-outline mb-6">
                <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example13">Email address</label>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert" style="color:red; display:block !important; margin-top:10px;">{{$errors->first('email')}}</span>
                @endif
            </div>

            <!-- Password input -->
            <div class="form-outline mb-6">
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert" style="color:red; display:block !important; margin-top:10px;">{{$errors->first('password')}}</span>

              @endif
            </div>

            <div class="">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
            </div>

            <!-- Submit button -->
            <div style="position: relative; margin-left:168px;">
              <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:54%;">Sign in</button>
            </div>
            <div style="text-align:center;">
              <a href="#!">Forgot password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
</body>
</html>
