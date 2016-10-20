
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>添加文章<small> Passage</small></h1>
  </section>
  <!-- Main content -->

    <div class="box box-info">

      <!-- form start -->
      <form class="form-horizontal " method="post" action="{:U('Admin/doPublish')}">
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
                <input type="text" name="title"  class="form-control" maxlength="25">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">排序</label>
            <div class="col-xs-5">
              <div class="input-group">
                <input type="text" name="sort"  class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">状态</label>
            <div class="col-xs-3">
              <div class="input-group">
                <input type="radio" name="status" value="1"/>已审核
                <input type="radio" name="status" value="0"/>未审核
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">内容</label>
            <div class="col-xs-9">
              <textarea class="form-control" rows="9" name="content" id="content"></textarea>
              <script type="text/javascript">CKEDITOR.replace('content');</script>
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
//
//  function hit(){
//    cf_alert.confirm('提示', '确认发布?', function(){
//      var url="{:U('Admin/doPublish')}";
//for(instance in CKEDITOR.instances){
//
//CKEDITOR.instances[instance].updateElement();
//}
//      $.post(url,$(".article").serialize(),function(res){
//        if(res)
//        {
//          dialog({
//            title:"系统消息",
//            content:"添加成功"
//          }).showModal();
//        }else{
//          alert('添加失败');
//        }
//      },'json')
//    })
//  };

</script>