<?php if (!defined('THINK_PATH')) exit();?><style>
    .box tr > th:first-child{width:39px;}
    .box tr > th:first-child,.box tr > td:first-child{text-align:center}
    tbody .btn-group>.btn{width:35px;}
    .box table.dataTable thead > tr > th:first-child{padding-left:0 !important;padding-right:0 !important}
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <?php if($data['title']): ?><div class="box-header">
                    <h3 class="box-title"><?php echo ($data['title']); ?></h3>
                </div><?php endif; ?>
            <div class="box-body">
                <table id="lists" class="table table-hover">
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <?php if(is_array($data['thead'])): $i = 0; $__LIST__ = $data['thead'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo ($vo); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="<?php echo count($data['thead'])+1;?>" style="text-align: left;">
                            <div class="btn-group">
                                <?php if(in_array('add', explode(',', $data['buttons']))): ?><button type="button" class="btn btn-default btn-sm" onclick="tableButton.add()">添加</button><?php endif; ?>
                                <?php if(in_array('del', explode(',', $data['buttons']))): ?><button type="button" class="btn btn-default btn-sm" d-url="<?php echo ($data['delUrl']); ?>" onclick="formSubmit.dels(this)">批量删除</button><?php endif; ?>
                            </div>
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>