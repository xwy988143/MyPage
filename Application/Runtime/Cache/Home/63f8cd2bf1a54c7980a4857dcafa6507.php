<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Look!</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/static/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/static/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/look/Public/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/look/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/look/Public/plugins/iconfont/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/look/Public/dist/css/AdminLTE.min.css" />
<link rel="stylesheet" type="text/css" href="/look/Public/dist/css/skins/_all-skins.min.css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="/look/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="/look/Public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/look/Public/dist/js/app.min.js"></script>

<!--<link rel="stylesheet" type="text/css" href="/look/Public/plugins/artDialog/css/dialog1.css" />-->
<script type="text/javascript" src="/look/Public/plugins/artDialog/dist/dialog-plus.js"></script>

<link rel="stylesheet" type="text/css" href="/look/Public/plugins/iCheck/all.css" />
<script type="text/javascript" src="/look/Public/plugins/iCheck/icheck.min.js"></script>

<link rel="stylesheet" type="text/css" href="/look/Public/plugins/switch/lc_switch.css" />
<script type="text/javascript" src="/look/Public/plugins/switch/lc_switch.min.js"></script>

<link rel="stylesheet" type="text/css" href="/look/Public/plugins/webuploader/webuploader.css" />
<script type="text/javascript" src="/look/Public/plugins/webuploader/webuploader.custom.js"></script>

<script src="/look/Public/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/look/Public/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/look/Public/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<link rel="stylesheet" type="text/css" href="/look/Public/plugins/daterangepicker/daterangepicker-bs3.css" />
<script type="text/javascript" src="/look/Public/plugins/daterangepicker/moment.js"></script>
<script type="text/javascript" src="/look/Public/plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="/look/Public/plugins/jQueryUI/jquery-ui.min.js"></script>
<script type="text/javascript" src="/look/Public/common.js"></script>
<script type="text/javascript" src="/look/Public/plugins/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="/look/Public/plugins/artDialog/css/ui-dialog.css" />
<script type="text/javascript" src="/look/Public/plugins/artDialog/dist/dialog-plus.js"></script>
<link rel="stylesheet" type="text/css" href="/look/Public/plugins/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="/look/Public/plugins/dialog/dialog-cathy.css">
<script type="text/javascript" src="/look/Public/plugins/dialog/modernizr.custom.js"></script>
<script type="text/javascript" src="/look/Public/plugins/dialog/classie.js"></script>
<script type="text/javascript" src="/look/Public/plugins/dialog/dialogFx.js"></script>

<script>
    var menuMainSidebar = {
        set: function () {
            if ($("body").hasClass("sidebar-collapse")) {
                window.localStorage.setItem("menuMainSidebar", "");
            } else {
                window.localStorage.setItem("menuMainSidebar", "sidebar-collapse");
            }
        },
        get: function () {
            var c = window.localStorage.getItem("menuMainSidebar");
            if (c) {
                $("body").addClass(c);
            }
        }
    }

    $(function () {
        if ($("input").hasClass("switch")) {
            $("input.switch").lc_switch();
        } else {
            $('input[type="checkbox"],input[type="radio"]').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        }

        $("thead .iCheck-helper").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                $("input[type='checkbox']").iCheck("uncheck");
                $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
            } else {
                $("input[type='checkbox']").iCheck("check");
                $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
            }
            $(this).data("clicks", !clicks);
        });

        menuMainSidebar.get();

//        $(document).scroll(function () {
//            var scrollTop = $(document).scrollTop();
//            if (scrollTop > 50) {
//                $(".content-header").addClass('content-header-fixed');
//            } else {
//                $(".content-header").removeClass('content-header-fixed');
//            }
//        });
    });
</script>

<style>
    .box {
        border-top: 0;
        border-radius: 0;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    }

    .box-header, .box-header button {
        background-color: #fff;
        color: #666 !important;
        border-bottom: 3px solid #CDDC39;
    }

    body, p, h3 {
        font-family: Helvetica, 'Hiragino Sans GB', 'Microsoft Yahei', '微软雅黑', Arial, sans-serif !important;
    }

    .box-footer > a {
        font-size: 0.9em;
    }

    .bg-yellow, .callout.callout-warning, .alert-warning, .label-warning, .modal-warning .modal-body {
        background-color: #FF9800 !important;
    }

    .alert {
        border: 0;
        margin-bottom: 0;
    }

    .remark {
        color: #E91E63 !important;
        font-size: 0.9em !important;
    }

    .content-header {
        padding: 10px;
        border-bottom: 1px solid #ebebeb;
        background: #fff !important;
    }

    .content-header-fixed {
        position: fixed;
        top: 0;
        left: 230px;
        right: 0;
        z-index: 99999;
        box-shadow: 0 0 5px #888;
        border-bottom:0;
    }

    .sortable-placeholder {
        background-color: #DCE775;
    }

    input:focus,select:focus,textarea:focus{
        border-color: #3c8dbc !important;
    }

    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
        background-color: #CDDC39;
        border-color: #CDDC39;
    }

    .btn-custom1{
        background-color: #fff;
        color: #666 !important;
        border-color: #666;
        border-radius: 2px !important;
    }

    .btn{
        outline: none;
    }

    .form-horizontal .form-group{
        margin-left:0;
        margin-right:0;
    }
</style>
</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Xiao W.Y</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="/look/Public/dist/img/photo1.png" class="img-circle" alt="User Image">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/look/Public/dist/img/photo1.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/look/Public/dist/img/photo1.png" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header><aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/look/Public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo session('username'); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">操作面板<?php echo $_GET['menuid'] ?></li>

            <!-- Optionally, you can add icons to the links -->
           <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="treeview active ">
                <a href="<?php echo ($vo['href']); ?>"><i class="fa fa-link"></i> <span><?php echo ($vo['title']); ?></span>
<!--             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
 -->                </a>
<!--                 <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul> -->
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <a href="javascript:history.go(-1);" class="btn btn-default" style="color:#607D8B;"><i class="icon iconfont">&#xf0033;</i></a>
                    <a href="javascript:history.go(1);" class="btn btn-default" style="color:#607D8B;"><i class="icon iconfont">&#xe716;</i></a>
                    <a href="javascript:window.location.reload();" class="btn btn-default" style="color:#607D8B;"><i class="icon iconfont">&#xe60a;</i></a>
                </h1>
<!--                <ol class="breadcrumb">-->
<!--                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--                    <li><a href="#">Tables</a></li>-->
<!--                    <li class="active">Data tables</li>-->
<!--                </ol>-->
            </section>
            <section class="content">
                <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>个人主页<small> Profile!</small></h1>
  </section>
  <!-- Main content -->

    <div class="box box-info">

      <!-- form start -->
      <form class="form-horizontal " method="post" action="<?php echo U('Admin/profile');?>">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">姓名</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">学历</label>
                <div class="col-xs-5">
                    <div class="input-group">
                        <input type="text" name="degree"  class="form-control" maxlength="25">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">标签</label>
                <div class="col-xs-5">
                    <div class="input-group">
                        <label><input class="form-control" type="checkbox" name="tags[]" value="PHP">PHP</label>
                            <label><input class="form-control" type="checkbox" name="tags[]" value="Swift">Swift</label>
                                <label><input class="form-control" type="checkbox" name="tags[]" value="Mysql">Mysql</label>
                                    <label><input class="form-control" type="checkbox" name="tags[]" value="Java">Java</label>
                                        <label><input class="form-control" type="checkbox" name="tags[]" value="C++">C++</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">职位</label>
                <div class="col-xs-3">
                    <div class="input-group">
                        <input type="text" name="position" class="form-control" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">个人评价</label>
                <div class="col-xs-9">
                    <textarea class="form-control" rows="9" name="description" id="content"></textarea>
                    <script type="text/javascript">CKEDITOR.replace('description');</script>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">背景</label>
                <div class="col-xs-9">
                    <textarea class="form-control" rows="9" name="background" id="content"></textarea>
                    <script type="text/javascript">CKEDITOR.replace('background');</script>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" class="btn btn-info btn-flat" value="确认">
        </div><!-- /.box-footer -->
      </form>
    </div>

  <!-- /.content -->

<script type="text/javascript">

</script>
            </section>
        </div>
        <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Frank.Xiao</a>.</strong> All rights reserved.
</footer>

    </div>
</body>
</html>