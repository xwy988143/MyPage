
<div class="row">
    <!-- Left col -->
    <div class="col-md-11">
        <!-- MAP & BOX PANE -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">体坛要闻</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="row">
                    <div class="col-md-11">
                        <div class="pad">
                            <volist name="res" id="vo">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="{$vo['picUrl']}" alt="新闻图片">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{$vo['description']}</h4>
                                    <a target="_blank" href="{$vo['url']}">{$vo['title']}</a>
                                </div>
                            </div>
                                </volist>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>