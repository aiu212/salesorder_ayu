<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login Perpustakaan</title>

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
          rel="stylesheet"
          type="text/css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
          rel="stylesheet">

    <!-- SB Admin -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#4e73df,#224abe);
        }

        .login-card{
            border-radius:25px;
            overflow:hidden;
        }

        .bg-login-image{
            background:
                linear-gradient(
                    rgba(0,0,0,0.3),
                    rgba(0,0,0,0.3)
                ),
                url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1200');

            background-position:center;
            background-size:cover;
        }

        .welcome-text{
            font-size:32px;
            font-weight:800;
            color:#4e73df;
        }

        .sub-text{
            color:#777;
            margin-bottom:30px;
        }

        .form-control-user{
            height:55px;
            border-radius:50px !important;
            font-size:15px;
            padding-left:20px;
            transition:0.3s;
        }

        .form-control-user:focus{
            box-shadow:0 0 0 0.2rem rgba(78,115,223,0.2);
        }

        .btn-user{
            height:55px;
            border-radius:50px;
            font-size:16px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-user:hover{
            transform:translateY(-2px);
            box-shadow:0 10px 20px rgba(0,0,0,0.15);
        }

        .login-footer{
            margin-top:30px;
            text-align:center;
            font-size:14px;
            color:#888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 login-card">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- LEFT IMAGE -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            </div>

                            <!-- RIGHT LOGIN -->
                            <div class="col-lg-6">
                                <div class="p-5"> 
                                    <div class="text-center mb-4">
                                        <h1 class="welcome-text">
                                            Welcome Back!
                                        </h1>
                                        <p class="sub-text">
                                            Login untuk masuk ke sistem perpustakaan
                                        </p>
                                    </div>

                                    <?php if ($this->session->flashdata('error')): ?>

                                        <div class="alert alert-danger">
                                            <?= $this->session->flashdata('error'); ?>
                                        </div>

                                    <?php endif; ?>

                                    <form class="user"
                                          method="post" action="<?= site_url('login/proses');?>">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-sign-in-alt mr-2"></i>
                                            Login
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">
                                            Forgot Password?
                                        </a>
                                    </div>

                                    <div class="text-center">
                                        <a class="small" href="#">
                                            Create an Account!
                                        </a>
                                    </div>
                                    <div class="login-footer">
                                        © <?= date('Y'); ?> Perpustakaan Digital
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>
</body>
</html>