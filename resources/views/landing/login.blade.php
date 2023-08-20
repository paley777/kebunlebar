<style>
    body#LoginForm {
        background-image: url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding: 10px;
    }

    .form-heading {
        color: #fff;
        font-size: 23px;
    }

    .panel h2 {
        color: #444444;
        font-size: 18px;
        margin: 0 0 8px 0;
    }

    .panel p {
        color: #777777;
        font-size: 14px;
        margin-bottom: 30px;
        line-height: 24px;
    }

    .login-form .form-control {
        background: #f7f7f7 none repeat scroll 0 0;
        border: 1px solid #d4d4d4;
        border-radius: 4px;
        font-size: 14px;
        height: 50px;
        line-height: 50px;
    }

    .main-div {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 2px;
        margin: 10px auto 30px;
        max-width: 38%;
        padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
        margin-bottom: 10px;
    }

    .login-form {
        text-align: center;
    }

    .forgot a {
        color: #777777;
        font-size: 14px;
        text-decoration: underline;
    }

    .login-form .btn.btn-primary {
        background: #064708 none repeat scroll 0 0;
        border-color: #064708;
        color: #ffffff;
        font-size: 14px;
        width: 100%;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }

    .forgot {
        text-align: left;
        margin-bottom: 30px;
    }

    .botto-text {
        color: #ffffff;
        font-size: 14px;
        margin: auto;
    }

    .login-form .btn.btn-primary.reset {
        background: #064708 none repeat scroll 0 0;
    }

    .back {
        text-align: left;
        margin-top: 10px;
    }

    .back a {
        color: #444444;
        font-size: 13px;
        text-decoration: none;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link
    href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->


<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body id="LoginForm" style="font-family: 'Epilogue', sans-serif;">
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <img src="{{ asset('storage/images/logo__small.png') }}"
                        style="max-height: 100px;object-fit: cover;">
                    <h2>Portal Administrator Sistem Informasi Desa Kebun Lebar</h2>
                    <p>Masukkan email dan password Anda.</p>
                    @if (session()->has('loginError'))
                        <div class="container">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="container">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                </div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email Anda" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password Anda"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <br>
                    <br>
                </form>
                <a href="/">Kembali ></a>
            </div>
            <p class="botto-text">Pemerintah Desa Kebun Lebar | Universitas Bengkulu</p>
        </div>
    </div>
</body>

</html>
