<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class="container-fluid">
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
                    <h1 class="title-login-last">
                        Chào mừng <b>Hạnh Đỗ</b> đến với trang xét duyệt CV của VIETIS
                    </h1>
                    <h2 class="title-2">Hướng dẫn sử dụng VIETIS CV</h2>
                    <ol class="list-guide">
                        <li>
                            Đăng nhập bằng tài khoản Google để sử dụng VIETIS CV
                        </li>
                        <li>
                            Upload CV lên hệ thống để thực hiện check
                        </li>
                        <li>
                            Submit và chờ thông báo kết quả
                        </li>
                        <li>
                            Check email để xem thông tin hẹn phỏng vấn tại VIETIS
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 no-padding border-left">
            <div class="header">
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                                <img alt="" class="img-circle" src="{{ asset('images/avatar3_small.jpg') }}">
                                <span class="username username-hide-on-mobile"> Nick </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li class="divider"> </li>

                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="page-upload">
                <h1 class="page-title"> Upload hồ sơ để xét duyệt
                    <small>(Yêu cầu đúng định dạng file pdf, doc, docx)</small>
                </h1>
                <div class="row">
                    <div class="col col-xs">
                        <form id="fileupload" action="../assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data" class="">

                            <div class="row fileupload-buttonbar">
                                <div class="col col-xs">
                                    <div class="btn green fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span> Add files... </span>
                                        <input type="file" name="files">
                                    </div>
                                    <button type="reset" class="btn warning cancel">
                                        <i class="fa fa-ban-circle"></i>
                                        <span> Cancel upload </span>
                                    </button>
                                </div>
                            </div>
                            @yield('upload-content')
                        </form>
                    </div>
                </div>
            </div>
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