<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>个人主页<small> Profile!</small></h1>
  </section>
  <!-- Main content -->

    <div class="box box-info">

      <!-- form start -->
      <form class="form-horizontal " method="post" action="{:U('Admin/profile')}">
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