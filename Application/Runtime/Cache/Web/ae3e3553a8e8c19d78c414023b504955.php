<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>我的主页</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/look/Public/Web/css/normalize.css">
        <link rel="stylesheet" href="/look/Public/Web/css/font-awesome.css">
        <link rel="stylesheet" href="/look/Public/Web/css/bootstrap.min.css">
        <link rel="stylesheet" href="/look/Public/Web/css/templatemo-style.css">
        <script src="/look/Public/Web/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-bg"></div>
        <div class="site-bg-overlay"></div>

        <!-- TOP HEADER -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="phone-info">联系我: <a href="#">QQ:312503324</a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .top-header -->


        <div class="visible-xs visible-sm responsive-menu">
            <a href="#" class="toggle-menu">
                <i class="fa fa-bars"></i> 展示 菜单
            </a>
            <div class="show-menu">
                <ul class="main-menu">
                    <li>
                        <a class="show-1 active homebutton" href="#"><i class="fa fa-home"></i>主页</a>
                    </li>
                    <li>
                        <a class="show-2 aboutbutton" href="#"><i class="fa fa-user"></i>关于我</a>
                    </li>
                    <li>
                        <a class="show-3 projectbutton" href="#"><i class="fa fa-camera"></i>成果</a>
                    </li>
                    <li>
                        <a class="show-5 contactbutton" href="#"><i class="fa fa-envelope"></i>联系我</a>
                    </li>
                </ul>
            </div>
        </div>
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Xwy</a></div>
        <div class="container" id="page-content">
            <div class="row">


                
                <div class="col-md-9 col-sm-12 content-holder">
                    <!-- CONTENT -->
                    <div id="menu-container">
                        
                        <div class="logo-holder logo-top-margin">
                            <a href="#" class="site-brand"><img src="/look/Public/Web/images/logo.png" alt=""></a>
                        </div>
                        
                        
                        <div id="menu-1" class="homepage home-section text-center">
                            <div class="welcome-text">
                                <h2>Hello, Welcome to <strong>Frank.Xiao</strong></h2>
                                <p>Xiao.Frank是一个由TP框架开发的微型个人信息展示网站 <span class="orange">Xwy</span><span class="green">Frank</span>您可以浏览关于我自己的信息,包括成果展示并且可以留下您对该网站的意见或者对本人的意见以及您的联系方式,我们将在后台获得您的意见和联系方式.</p>
                                <form action="#" method="get" class="subscribe-form">
                                    <div class="row">
                                        <fieldset class="col-md-offset-2 col-md-6">
                                            <input name="subscribe-email" type="email" class="email" id="subscribe-email" placeholder="填写您的意见">
                                        </fieldset>
                                        <fieldset class="col-md-4 button-holder">
                                            <input name="submit" type="submit" class="button default" id="submit" value="Submit">
                                        </fieldset>
                                    </div>
                                    <p class="subscribe-text">请留下您的意见,并在结尾写下您的联系方式.谢谢!</p>
                                </form>
                            </div>
                        </div>

                        <div id="menu-2" class="content about-section">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="box-content profile">
                                        <h3 class="widget-title">关于我</h3>
                                        <div class="profile-thumb">
                                            <img src="/look/Public/Web/images/1.jpg" alt="">
                                        </div>
                                        <div class="profile-content">
                                            <h5 class="profile-name"><?php echo ($data["name"]); ?></h5>
                                            <span class="profile-role"><?php echo ($data["position"]); ?></span>
                                            <p><?php echo ($data["description"]); ?>.<br><br>
											Change icons by <a rel="nofollow" href="#/font-awesome-icon-world-map/">Font Awesome</a> (version 4). Example: <span class="blue">&lt;i class=&quot;fa fa-refresh&quot;&gt;&lt;/i&gt;</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="box-content">
                                        <h3 class="widget-title">我的背景</h3>
                                        <p><?php echo ($data["background"]); ?>.</p>
                                        <div class="about-social">
                                            <ul>
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="box-content">
                                        <h3 class="widget-title">工作室</h3>
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/7.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>获取自然美</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <div class="box-content">
                                        <h3 class="widget-title">我的开发技能</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <span><?php echo ($skills["0"]); ?> 80%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span><?php echo ($skills["1"]); ?> 95%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span><?php echo ($skills["2"]); ?> 70%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span>PHP mySQL 50%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="menu-3" class="content gallery-section">
                            <div class="box-content">
                                <h3 class="widget-title">过去的项目</h3>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/1.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Great Nature Capture</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/2.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Another Image Caption</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/3.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Great Nature Capture</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/4.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Another Image Caption</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/5.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Great Nature Capture</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item">
                                            <img src="/look/Public/Web/images/6.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Another Image Caption</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-pages">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="menu-4" class="content contact-section">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="box-content">
                                        <h3 class="widget-title">Send Us A Message</h3>
                                        <form class="contact-form">
                                            <fieldset>
                                                <input type="text" class="name" id="name" placeholder="Name...">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="email" class="email" id="email" placeholder="Email...">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="text" class="subject" id="subject" placeholder="Subject...">
                                            </fieldset>
                                            <fieldset>
                                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message.."></textarea>
                                            </fieldset>
                                            <fieldset>
                                                <input type="submit" class="button" id="button" value="Send Message">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="box-content">
                                        <h3 class="widget-title">Stay In Touch</h3>
                                        <p>Sed ullamcorper, risus a tincidunt efficitur, massa mauris ultricies leo, eu interdum eros erat non augue. <br><br>
										Suspendisse ornare sollicitudin lectus non egestas. Nam fermentum imperdiet ligula congue venenatis. </p>
                                        <div class="about-social">
                                            <ul>
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-3 hidden-sm">
                    
                    <nav id="nav" class="main-navigation hidden-xs hidden-sm">
                        <ul class="main-menu">
                            <li>
                                <a class="show-1 active homebutton" href="#"><i class="fa fa-home"></i>主页</a>
                            </li>
                            <li>
                                <a class="show-2 aboutbutton" href="#"><i class="fa fa-user"></i>关于我</a>
                            </li>
                            <li>
                                <a class="show-3 projectbutton" href="#"><i class="fa fa-camera"></i>项目成果</a>
                            </li>
                            <li>
                                <a class="show-5 contactbutton" href="#"><i class="fa fa-envelope"></i>联系我</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

        <!-- SITE-FOOTER -->
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright &copy; 2084 Company Name | More  <a href="http://www.cssmoban.com/" target="_blank" title="模板之家"></a> - Collect from </p>
                    </div>
                </div>
            </div>
        </div> <!-- .site-footer -->

        <script src="/look/Public/Web/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/look/Public/Web/js/plugins.js"></script>
        <script src="/look/Public/Web/js/main.js"></script>
		<!-- templatemo 439 rectangle -->
    </body>
</html>