<php>
  $array['title'] = '文章列表';//标题
  $array['thead'] = '标题,分类,状态,概要,发布时间,操作';//表头信息
  $array['dataUrl'] = U('Home/Admin/getArticle');//数据地址
  $array['editUrl'] = U('Home/Admin/editArticle');//修改地址
  $array['delUrl'] = U('Home/Admin/delArticle');//删除地址
  $array['buttons'] = 'del';
</php>
{:W('table/index', array($array))}
<include file="Include:datatable" />

<script>
  $(function(){
    var columns = [
      { "data": function(a){
        return '<input class="ids" value="'+a.id+'" type="checkbox">';
      } },
      { "data": "title" },
      { "data": "type" },
      { "data": "status" },
      { "data": "content" },
      { "data": "time" },
      { "data": function(a){
        return '<div class="btn-group"><a href="{$array['editUrl']}&id='+a.id+'" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a><a href="{$array['delUrl']}&id='+a.id+'"  class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a></div>';
      } }
    ]
    datatable('#lists', "{$array['dataUrl']}", columns);
  })
</script>