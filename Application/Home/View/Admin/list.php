<include file="Include:datatable" />
      <div class="row">
        <!-- Left col -->
        <div class="col-md-11">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">账号信息</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-11">
                  <div class="pad">
<table id="example" class="display table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
        </tbody>
    </table>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  $(document).ready(function() {
  $('#example').dataTable( {
            "bSort": false,
        "iDisplayLength": 10,
        "aLengthMenu": [10,30,100],
        "bStateSave": true,
        "bProcessing": true,
        "oLanguage": {"sProcessing":"正在加载...","oPaginate": {"sFirst":"首页","sPrevious": "上一页","sNext": "下一页","sLast":"尾页"},"sZeroRecords":"无数据","sInfo":"显示 _START_ - _END_ 共 _TOTAL_ 条数据","sLengthMenu":"显示 _MENU_ 条数据","sSearch":"模糊查询"},
    "pagingType":   "full_numbers",
  } );
} );
</script>