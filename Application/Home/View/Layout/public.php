<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Look!</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <include file="Include:public" />
</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <include file="Include:header,Include:left" />
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
                {__CONTENT__}
            </section>
        </div>
        <include file="Include:footer" />
    </div>
</body>
</html>