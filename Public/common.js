//判断对象是否存在
function isset(e){
    return typeof(e)!="undefined" ? true : false;
}

var loading = {
    loadingHtml:[
        "<div id='loading-wrap' style='width:100%;height:100%;position:absolute;top:0;left:0;z-index:99995;text-align:center;'><i class='fa fa-refresh fa-spin' style='z-index:1;font-size:30px;margin-top:100px;'></i><div style='width:100%;height:100%;position:fixed;top:0;left:0;background:#999;opacity:0.5;z-index:-1;'></div></div>"
    ],

    show:function(id){
        this.hide();
        $(document.body).append(this.loadingHtml[id-1]);
    },
    hide:function(){
        var obj = $("#loading-wrap");
        obj.remove();
    }
}

var cf_alert = {
    autoMessage:function(msg, callback){
        var d = dialog({
                content: msg
            }).showModal();
        setTimeout(function () {
            d.close().remove();
            if(typeof(callback) == 'undefined') return;
            callback();
        }, 1000);
    },
    confirm:function(title, content, callback){
        dialog({
            title: title,
            content: content,
            ok: function(){
              callback();
            },
            cancel: function(){return;},
            okValue: '确定',
            cancelValue: '取消'
        }).showModal();
    }
}

var del = {
    btn:'',
    confirm_warp:{},
    confirm:function(t){
        this.btn = t;
        var id = $(t).attr('d-id');
        var url = $(t).attr('d-url');
        var title = $(t).attr('d-title');
        if(!title){
            title = '是否删除?';
        }
        this.confirm_warp = dialog({
            title: title,
            content: '<button type="button" class="btn btn-danger btn-flat" onclick="del.submit(\''+url+'\','+id+')">YES</button></div>',
            quickClose: true
        }).show(t);
    },
    submit:function(url, id){
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {id:id},
            success: function(rs){
                if(isset(rs.status)){
                    if(rs.status == "success"){
                        cf_alert.autoMessage(rs.info, function(){
                            $(del.btn).parents('tr').remove();
                            del.confirm_warp.close().remove();
                        });
                    }else{
                        cf_alert.autoMessage(rs.info);
                    }
                }else{
                    cf_alert.autoMessage('数据异常');
                }
            },
            error: function(){
                cf_alert.autoMessage('网络异常');
            },
            beforeSend: function(){
              loading.show(1);
            },
            complete: function(){
                loading.hide();
            }
        })
    }
}

var formSubmit = {
    check:function(formObj, submitObj, rules){
        var form = formObj.Validform({
        btnSubmit:submitObj,
        tiptype:2,
        beforeSubmit:function(form){
            formSubmit.detail(form);
            return false;
        }
      });
      form.addRule(rules);
    },
    detail:function(formObj, callback){
        $.ajax({
            url: formObj.attr('action'),
            type: "post",
            dataType: "json",
            data: formObj.serialize(),
            success: function(rs){
                if(isset(rs.status)){
                    if(rs.status == "success"){
                        cf_alert.autoMessage(rs.info, function(){
                            if(typeof(callback) == 'undefined'){
                                window.location.href = rs.url;
                            }else{
                                callback(rs);
                            }
                        });
                    }else{
                        cf_alert.autoMessage(rs.info);
                    }
                }else{
                    cf_alert.autoMessage('数据异常');
                }
            },
            error: function(){
                cf_alert.autoMessage('网络异常');
            },
            beforeSend: function(){
              loading.show(1);
            },
            complete: function(){
                loading.hide();
            }
        })
    },
    set_status:function(t){
        var id = $(t).attr('d-id');
        var url = $(t).attr('d-url');
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {id:id},
            success: function(rs){
                if(isset(rs.status)){
                    if(rs.status == "success"){
                        cf_alert.autoMessage(rs.info, function(){
                            window.location.href = rs.url;
                        });
                    }else{
                        cf_alert.autoMessage(rs.info);
                    }
                }else{
                    cf_alert.autoMessage('数据异常');
                }
            },
            error: function(){
                cf_alert.autoMessage('网络异常');
            },
            beforeSend: function(){
              loading.show(1);
            },
            complete: function(){
                loading.hide();
            }
        })
    }
}

var dates = {
    rangeDate: function(id){
        $(id).daterangepicker({
          format: 'YYYY/MM/DD',
          opens: 'center',
          locale: {applyLabel:'确定',cancelLabel:'取消',fromLabel:'从',toLabel:'到'}
        });
    }
}

function datatable(obj, url, columns){
    $(obj).DataTable({
        "bSort": false,
        "iDisplayLength": 10,
        "aLengthMenu": [10,30,100],
        "bStateSave": true,
        "bProcessing": true,
        "oLanguage": {"sProcessing":"正在加载...","oPaginate": {"sFirst":"首页","sPrevious": "上一页","sNext": "下一页","sLast":"尾页"},"sZeroRecords":"无数据","sInfo":"显示 _START_ - _END_ 共 _TOTAL_ 条数据","sLengthMenu":"显示 _MENU_ 条数据","sSearch":"模糊查询"},
        "bServerSide": true,
        "sAjaxSource": url,
        "sServerMethod": "POST",
        "sPaginationType": "full_numbers",
        "columns": columns,
        "fnDrawCallback":function(){
            $('tbody input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        }
    });
}

