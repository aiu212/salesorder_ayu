<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login Sales Order</title>

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
          rel="stylesheet"
          type="text/css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"
          rel="stylesheet">

    <!-- SB Admin -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>"
          rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            min-height:100vh;
            background:
            linear-gradient(
                rgba(6,18,40,0.85),
                rgba(6,18,40,0.92)
            ),
            url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1400');

            background-size:cover;
            background-position:center;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .login-card{
            width:100%;
            border:none;
            border-radius:28px;
            overflow:hidden;
            background:#ffffff;
            box-shadow:
                0 20px 60px rgba(0,0,0,0.25);
        }

        .left-side{
            background:
            linear-gradient(
                rgba(2,6,23,0.75),
                rgba(2,6,23,0.75)
            ),
            url('https://images.unsplash.com/photo-1550009158-9ebf69173e03?q=80&w=1200');

            background-size:cover;
            background-position:center;
            min-height:650px;
            position:relative;
        }

        .overlay-content{
            position:absolute;
            bottom:35px;
            left:40px;
            color:white;
        }

        .overlay-content h2{
            font-size:38px;
            font-weight:800;
            margin-bottom:10px;
        }

        .overlay-content p{
            color:rgba(255,255,255,0.8);
            width:85%;
            line-height:1.7;
        }

        .right-side{
            padding:45px 55px;
        }

        .brand-logo{
            width:70px;
            height:70px;
            border-radius:20px;
            background:linear-gradient(135deg,#06b6d4,#2563eb);
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
            margin-bottom:20px;
            box-shadow:0 10px 25px rgba(37,99,235,0.3);
        }

        .brand-logo i{
            font-size:30px;
            color:white;
        }

        .welcome-text{
            font-size:38px;
            font-weight:800;
            color:#0f172a;
            margin-bottom:10px;
        }

        .sub-text{
            color:#64748b;
            font-size:15px;
            margin-bottom:40px;
        }

        .form-control-user{
            height:58px;
            border-radius:16px !important;
            border:1px solid #dbe2ea;
            background:#f8fafc;
            font-size:15px;
            padding-left:20px;
            transition:0.3s;
        }

        .form-control-user:focus{
            background:white;
            border-color:#06b6d4;
            box-shadow:
                0 0 0 0.2rem rgba(6,182,212,0.15);
        }

        .btn-user{
            height:58px;
            border-radius:16px;
            font-size:16px;
            font-weight:700;
            background:linear-gradient(135deg,#0891b2,#2563eb);
            border:none;
            transition:0.3s;
        }

        .btn-user:hover{
            transform:translateY(-2px);
            box-shadow:
                0 15px 30px rgba(37,99,235,0.25);
        }

        .custom-control-label{
            color:#64748b;
        }

        .login-footer{
            margin-top:40px;
            text-align:center;
            font-size:14px;
            color:#94a3b8;
        }

        .small-link{
            color:#0891b2;
            font-weight:500;
            text-decoration:none;
        }

        .small-link:hover{
            color:#0f172a;
            text-decoration:none;
        }

        .alert{
            border-radius:14px;
        }

        @media(max-width:991px){

            .left-side{
                display:none;
            }

            .right-side{
                padding:45px 30px;
            }

            .welcome-text{
                font-size:32px;
            }
        }

    </style>
</head>

<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-11 col-lg-12">

            <div class="card login-card">

                <div class="row no-gutters">

                    <!-- LEFT -->
                    <div class="col-lg-6 left-side">

                        <div class="overlay-content">

                            <h2>Sales Order System</h2>

                            <p>
                                Sistem pengelolaan sales order alat elektronik yang modern, cepat, dan efisien untuk mendukung operasional perusahaan.
                            </p>

                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="col-lg-6">

                        <div class="right-side">

                            <div class="text-center">

                                <div class="brand-logo">
                                    <i class="fas fa-microchip"></i>
                                </div>

                                <h1 class="welcome-text">
                                    Welcome Back
                                </h1>

                                <p class="sub-text">
                                    Login untuk masuk ke dashboard sales order
                                </p>

                            </div>

                            <?php if ($this->session->flashdata('error')): ?>

                                <div class="alert alert-danger">
                                    <?= $this->session->flashdata('error'); ?>
                                </div>

                            <?php endif; ?>

                            <form class="user"
                                  method="post"
                                  action="<?= site_url('login/proses');?>">

                                <div class="form-group">

                                    <input type="text"
                                           name="username"
                                           class="form-control form-control-user"
                                           placeholder="Masukkan username"
                                           required>

                                </div>

                                <div class="form-group">

                                    <input type="password"
                                           name="password"
                                           class="form-control form-control-user"
                                           placeholder="Masukkan password"
                                           required>

                                </div>

                                <div class="form-group">

                                    <div class="custom-control custom-checkbox small">

                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customCheck">

                                        <label class="custom-control-label"
                                               for="customCheck">

                                            Remember Me

                                        </label>

                                    </div>

                                </div>

                                <button type="submit"
                                        class="btn btn-primary btn-user btn-block">

                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Login Sekarang

                                </button>

                            </form>

                            <hr>

                            <div class="text-center mb-2">

                                <a class="small-link" href="#">
                                    Forgot Password?
                                </a>

                            </div>

                            <div class="login-footer">

                                © <?= date('Y'); ?> 2026 PT Maju Jaya — Sales Order System

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