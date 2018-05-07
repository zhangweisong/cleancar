<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>商家列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/cleancar/Public/manage/http/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/font-awesome/4.4.0/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/cleancar/Public/manage/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/cleancar/Public/manage/css/style.min.css" rel="stylesheet">
    <link href="/cleancar/Public/manage/css/index.css" rel="stylesheet">
	<script type="text/javascript" src="/cleancar/Public/admin/js/jquery.js"></script>
	<script src="/cleancar/Public/admin/js/jquery.min.js"></script>
	<script src="/cleancar/Public/layer/layer.js"></script>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>商家列表</h5>
                </div>
				
                <div class="ibox-content">
				<form name="seachform" id="seachform" action="<?php echo U('seller/sellerlist');?>" method="post">
                   <div class="row khcrj">
                   		<div class="col-sm-12">
						   	<div class="daochu form-group">
                                <a href="<?php echo U('seller/addseller');?>" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">添加商家</span>
                                </a>
							</div>
                            <div class="chaxun form-group">
                                <button class="btn btn-primary " type="submit" onclick="$('#flag').val('chaxun');$('#seachform').submit();">
                                    <i class="fa fa-search"></i>&nbsp;&nbsp;<span class="bold"  >查询</span>
                                </button>
                            </div>
                        </div>
                   		<div class="col-sm-12">
                           <dl class="riqi form-group">
                                <dt class="control-label ">日期</dt>
                               <dd>
                                   <input name="info[starttime]" placeholder="开始日期" class="laydate-icon form-control layer-date" id="start"    value="<?php echo ($starttime); ?>" >
					               <input name="info[endtime]" placeholder="结束日期"   class="laydate-icon form-control layer-date" id="end"     value="<?php echo ($endtime); ?>" >
					
                                </dd>
                            </dl>

                            <dl class="shoujihao form-group">
                                <dt>商家名称</dt>
                                <dd>
                                    <input type="text" class="form-control" name="info[sellername]" maxlength="20" value="<?php echo ($sellername); ?>">
                                </dd>
                            </dl>
                        </div>
						
                    </div>
					 <input name="flag" id="flag" type="hidden" value="no">
				</form>
                    <div class="table-responsive">
                    	<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>商家名称</th>
                                    <th>商家地址</th>
									<th>登录名</th>
									<th>实景照片</th>
                                    <th>联系人</th>
                                    <th>联系电话</th>
									<th>经办人</th>
                                    <th>加入时间</th>
                                    <th>账户余额</th>
									<th>账号状态</th>
									<th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
						    <?php if(is_array($sellerlist)): $i = 0; $__LIST__ = $sellerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$seller): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($seller["sellername"]); ?></td>
                                    <td><?php echo ($seller["selleraddress"]); ?></td>
									<td><?php echo ($seller["username"]); ?></td>
									 <td style="width:  200px;">
									<?php
 $seller_images=explode("|",$seller['seller_images']); ?>
								   <?php if(is_array($seller_images)): foreach($seller_images as $key=>$vo): ?><a href="<?php echo ($vo); ?>"><img style="height: 30px;width:30px;" src="<?php echo ($vo); ?>"/></a><?php endforeach; endif; ?> 
									</td>  
                                    <td><?php echo ($seller["sellerlinkman"]); ?></td>
                                    <td><?php echo ($seller["sellerlinkphone"]); ?></td>
									<td><?php echo ($seller["admin_realname"]); ?></td>
									<td><?php echo (date("Y-m-d H:i:s",$seller["seller_addtime"])); ?></td>
									<td><?php echo ($seller["money"]); ?></td>
									<td><?php echo ($type[$seller['seller_able']]); ?></td>
									<td>  
									    <a href="<?php echo U('seller/editseller',array('seller_id'=>$seller['seller_id']));?>" ><button class="btn btn-primary " type="button">
                                             <span class="bold" >编辑</span>
                                        </button></a>
										<a href="<?php echo U('seller/del_seller',array('seller_id'=>$seller['seller_id']));?>" onclick="{if(confirm('确认删除?')){return true;}return false;}"><button class="btn btn-primary " type="button">
                                             <span class="bold" >删除</span>
                                        </button></a>
										<a href="<?php echo U('seller/addactive',array('seller_id'=>$seller['seller_id']));?>" ><button class="btn btn-primary " type="button">
                                         <span class="bold" >添加活动</span>
                                        </button></a>
										<a href="<?php echo U('seller/chongzhi',array('seller_id'=>$seller['seller_id']));?>" ><button class="btn btn-primary " type="button">
                                         <span class="bold" >重置密码</span>
                                        </button></a>
                                        <a href="<?php echo U('seller/seller_able',array('seller_id'=>$seller['seller_id']));?>" ><button class="btn btn-primary " type="button">
                                         <span class="bold" >
										        <?php if( $seller['seller_able'] == 1 ): ?><span class="bold" >禁用</span>
												<?php else: ?>
													<span class="bold" >开启</span><?php endif; ?></span>
                                        </button></a>
										<a href="<?php echo U('seller/seller_xq',array('seller_id'=>$seller['seller_id']));?>" ><button class="btn btn-primary " type="button">
                                         <span class="bold" >详情</span>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div> 
                    <div class="fixed-table-pagination" style="display: block;">
       	            <?php echo ($pageshow); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/cleancar/Public/manage/http/js/bootstrap.min.js"></script>

<script src="/cleancar/Public/manage/js/plugins/layer/laydate/laydate.js"></script>
<script>
    
    var start = {
        elem: "#start", //需显示日期的元素选择器
        format: "YYYY-MM-DD hh:mm:ss", //日期格式
        min: "2017-01-01 23:59:59",
        max: "2099-06-16 23:59:59",
		istime: false, //是否开启时间选择
        istime: true,  //是否显示清空
        istoday: false,  //是否显示今天
        choose: function (datas) {
            end.min = datas;
            end.start = datas
        }
    };
    var end = {
        elem: "#end",
        format: "YYYY-MM-DD hh:mm:ss",
        min: laydate.now(),
        max: "2099-06-16 23:59:59",
		istime: false, //是否开启时间选择
        istime: true,
        istoday: false,
        choose: function (datas) {
            start.max = datas
        }
    };
    laydate(start);
    laydate(end);
	
	
	//弹窗,查看商家详情
	function dingdan(seller_id){
		layer.open({
			type: 2,
			title: '查看详情',
			maxmin: true,
			shadeClose: true, //点击遮罩关闭层
			area : ['800px' , '520px'],
			content: "<?php echo U('seller/seller_xq');?>&seller_id="+seller_id
		});
	}

</script>


<script type="text/javascript" src="/cleancar/Public/manage/http/js/stats.js" charset="UTF-8"></script>
</body>

</html>