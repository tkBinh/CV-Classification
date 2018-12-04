<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../source/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../source/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="../source/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../source/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../source/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../source/css/custom.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="page login-page">
    <div class="container">
        @if(count($errors) >0)
            <div class="alert alert-danger alert-dismissible text-center" style="margin-top: 1%">
            <span class="text-center" style="text-align: center">Tài khoản của bạn không có quyền truy cập !!! Vui lòng liên hệ bộ
                phận <a
                        href="#">admin</a></span>
            </div>
        @endif
        @if(session('logout_message'))
            <div class="alert alert-success alert-dismissible text-center" style="margin-top: 1%">
                <span class="text-center" style="text-align: center">Đăng xuất thành công</span>
            </div>
        @endif
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <div class="logo text-uppercase"><span>VietIS CV</span><br/><strong
                            class="text-primary">administration</strong></div>
                <br/>
                @if(\Illuminate\Support\Facades\Session::has('login'))
                    Logged
                @endif
                <button class="btn btn-success btn-lg"><i class="fab fa-google"></i> <a style="text-decoration:
                none; color: white;" href="{{route('google.login')}}">Đăng nhập bằng google</a></button>
            </div>
            <div class="copyrights text-center">
                <p>Design by <a href="https://vietis.com.vn" class="external">VietIS</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="../source/vendor/jquery/jquery.min.js"></script>
<script src="../source/vendor/popper.js/umd/popper.min.js"></script>
<script src="../source/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../source/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="../source/vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="../source/vendor/chart.js/Chart.min.js"></script>
<script src="../source/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="../source/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Main File-->
<script src="../    source/js/front.js"></script>
</body>
</html>