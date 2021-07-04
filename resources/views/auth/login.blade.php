<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ONTA - Online Travel Agent</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('back/assets/images/onta.ico') }}" width="100px" type="image/x-icon">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>

                    @foreach ($errors->all() as $error)
                    <div class="alert alert-light-danger alert-dismissible show fade">
                        {{ $error }}
                    </div>
                    @endforeach

                    <form method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="email" type="email" class="form-control form-control-xl" placeholder="Email"
                                autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password" class="form-control form-control-xl"
                                placeholder="Password" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        
                    </div>
                    <footer>
                        <div class="footer text-center clearfix mb-0 text-muted">
                            <p>2021 &copy; ONTA - Online Travel Agent</p>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
