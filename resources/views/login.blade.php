<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class=" container-fluid
    ">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row justify-content-center row-logo">
                <div class="col-xs-12 col-sm-4">
                    <div class="logo">
                        <img class="images-logo" src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-text">
                <div class="col-xs-12 col-sm-8">
                    <h1 class="title-login">
                        Đăng nhập để xét duyệt CV
                    </h1>
                    <p class="terms-privacy-policy">
                        Khi bạn đăng nhập bằng Google, mặc định bạn đồng ý với Điều khoản dịch vụ và Chính sách bảo mật
                        của VIETIS.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center row-btn">
                <div class="col-xs-12 col-sm-4">
                    <button class="btn red btn-block">Đăng nhập bằng Google</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 no-padding">
            <img class="banner-login" src="{{ asset('images/bg1.jpg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="row">
        <div class="col col-xs-12 col-sm-6">
            <div class="row justify-content-end">
                <div class="col col-xs-12 col-sm-5">
                    <div class="login-footer">
                        <div class="login-copyright">
                            <p>© 2018, VIETIS Corporation. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>

</html>