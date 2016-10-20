<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="__PUBLIC__/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
           <volist name="menu" id="vo">
            <li class="treeview active ">
                <a href="{$vo['href']}"><i class="fa fa-link"></i> <span>{$vo['title']}</span>
<!--             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
 -->                </a>
<!--                 <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul> -->
            </li>
            </volist>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
