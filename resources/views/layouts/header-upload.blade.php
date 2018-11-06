<div class="header">
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true" aria-expanded="false">
                    <img alt="" class="img-circle" src="images/avatar3_small.jpg">
                    <span class="username username-hide-on-mobile"> Nick </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="page_user_profile_1.html">
                            <i class="icon-user"></i> My Profile </a>
                    </li>
                    <li class="divider"></li>

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
            <form id="fileupload" action="../assets/global/plugins/jquery-file-upload/server/php/"
                  method="POST" enctype="multipart/form-data" class="">


                <div class="row fileupload-buttonbar">
                    <div class="col col-xs">
                        <div class="btn green fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span> Add files... </span>
                            <input type="file" name="files">
                        </div>
                        <button type="submit" class="btn blue start">
                            <i class="fa fa-upload"></i>
                            <span> Start upload </span>
                        </button>
                        <button type="reset" class="btn warning cancel">
                            <i class="fa fa-ban-circle"></i>
                            <span> Cancel upload </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
