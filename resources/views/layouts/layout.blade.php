<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            @yield('content')
        </div>
        <div class="col-xs-12 col-sm-6 no-padding border-left">
            @yield('content-upload')
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>

</html>
