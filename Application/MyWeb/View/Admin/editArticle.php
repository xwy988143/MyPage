<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">表单</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal article" action="{:U('Article/edit_passage')}">
        <div class="box-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">所属类型</label>
                <div class="col-xs-3">
                    <select name="type" class="form-control">
                        <volist name="types" id="vo">
                            <option>{$vo.title}</option>
                        </volist>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">文章名称</label>
                <div class="col-xs-5">
                    <div class="input-group">
                        <input type="text" name="title" value="{$data.title}"  class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">状态</label>
                <div class="col-xs-3">
                    <div class="input-group">
                        <input type="radio"<if condition="$data['status'] eq 1">checked="true"</if>  name="status" value="1"/>已审核
                        <input type="radio"<if condition="$data['status'] eq 0">checked="true"</if>  name="status" value="0"/>未审核
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">内容</label>
                <div class="col-xs-9">
                    <textarea class="form-control" rows="9" name="content">{$data.content}</textarea>
                </div>
            </div>

        </div><!-- /.box-body -->
        <div class="box-footer">
            <input type="hidden" name="id" value="{$data.id}">
            <button type="button" class="btn btn-info btn-flat" onclick="Edit()" id="detail_submit">修改</button>
        </div><!-- /.box-footer -->
    </form>
</div>
<script type="text/javascript">
        function Edit(){
            cf_alert.confirm('系统提示', '确认修改?', function(){
                var url="{:U('Admin/doEdit')}";

                $.post(url,$(".article").serialize(),function(res){
                    if(res)
                    {
                        dialog({
                            title:"系统消息",
                            content:"修改成功"
                        }).showModal();
                        window.location.href= "{:U('Admin/article')}";
                    }else{
                        alert('操作失败');
                    }
                },'json')
            })
        };
</script>
