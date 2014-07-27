<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>我的外卖_<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="{key}" name="description" />
<meta content="{des}" name="author" />

<!--引入Buttons按钮样式 与bootstrap核心css有冲突-->
<link href="http://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="__ROOT__/templates/new/bootstrap32/css/buttons.css">

<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/new/bootstrap32/css/bootstrap.min.css" rel="stylesheet">
<!-- Loading Flat UI -->
<link href="__ROOT__/templates/new/css/flat-ui.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/new/css/head.css" rel="stylesheet">
<!--nav css-->
<link type="text/css" rel="stylesheet" href="__ROOT__/templates/new/css/tmall-nav.css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	
	    <script src="__ROOT__/Public/js/jquery.js"></script>
    	<script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	
 		<script src="__ROOT__/Public/js/sco.ajax.js"></script> 

	
</head>
<!-- BEGIN BODY -->
<body>



<!--top开始-->
<div class="top-container hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <span>发现身边的美食！</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=# onclick="javascript:addFavorite2()"><span class="like">加入收藏</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-phone"></span> <a href="#"><span class="mobile">手机版</span></a>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span> <span><a href="<?php echo U('Member/index/');?>">我的订单</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">联系客服 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow kf"></span>
          <ul class="dropdown-menu dropdown-menu-right kf">
          <li><a href="#">申请退款</a></li>
          <li><a href="#">常见问题</a></li>
          </ul>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">我是商家 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow shop"></span>
          <ul class="dropdown-menu dropdown-menu-right shop">
          <li><a href="#">我想合作</a></li>
          <li><a href="#">广告投放</a></li>
          </ul>
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">在线帮助</a></li>
          <li><a href="#">关于我们</a></li>
          </ul>
        </span>
      </div>
    </div>
  </div>
</div>
<!--top结束-->



<script type="text/javascript">
	function addFavorite2() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
	        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	    }
	    else if (ua.indexOf("msie 8") > -1) {
	        window.external.AddToFavoritesBar(url, title); //IE8
	    }
	    else if (document.all) {
	  try{
	   window.external.addFavorite(url, title);
	  }catch(e){
	   alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	  }
	    }
	    else if (window.sidebar) {
	        window.sidebar.addPanel(title, url, "");
	    }
	    else {
	  alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	    }
	}
</script>



     

<div class=" container " style="margin-top:10px">
<div class="panel panel-default" >
  <div class="panel-body">
<div class="row">
  <div class="col-lg-2 col-md-2" >

 <ul class="list-group list-unstyled" style="font-size:14px;">
	<li class="list-group-item " style="background-color: #F5F5F5;"><i class="fa fa-th-large"></i> 我的外卖</li>
  
 
 </ul>

   </div>   
	  <div class="col-lg-10 col-md-10 col-xs-12 " >
	  
 

		
	

  <h3>我的订单</h3>


		
         <table class="table ta">
        <thead>
          <tr>
            <th>订单号</th>
           
            <th>下单时间</th>
            <th>订单金额</th>
			<th>订单状态</th>
			<th>结束时间</th>
			<th>操作</th>
          </tr>
        </thead>
        <tbody>
		<?php if(is_array($orderlist)): $i = 0; $__LIST__ = $orderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["oid"]); ?></td>
           
            <td><?php if(empty($vo["order_ctime"])): else: ?> <?php echo (date("Y-m-d H:i",$vo["order_ctime"])); endif; ?></td>
            <td><?php echo ($vo["orderprice"]); ?></td>
			<td><?php switch($vo["orderstatus"]): case "4": ?>已完成<?php break;?>
													<?php case "5": ?>送货中<?php break;?>
                                                    <?php default: ?> 提交成功<?php endswitch;?></td>
            <td><?php if(empty($vo["order_endtime"])): else: ?> <?php echo (date("Y-m-d H:i",$vo["order_endtime"])); endif; ?></td>
			<td>
			 <a href="<?php echo U('Member/orderdetail/','id='.$vo['oid']);?>" data-target="#ajax_target" data-trigger="ajax">查看</a>
			
			</td>
           
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     
        </tbody>
      </table>
	   
	  
      
	    <div class="row">
					  <div class="col-md-7 col-sm-12">
					  </div>
					  <div class="col-md-5 col-sm-12">
					          

                              <ul class="pagination pull-right">
							    <?php echo ($page); ?>
                                
                             </ul>


					  </div>
					  
					  
					  </div>
			 
	
			  <div id="ajax_target">
			  
			  	
				
			  </div>
			 
			 
			 
			 
			 
			 
			 
			 </div>
			 </div> 
			 
			 
			 
			 
			 </div>
			 </div>

 	 </div>
			 </div>   
</div><!-- end container -->




<!--网站底部-->
<hr>
<div class="container hidden-xs">
	<div class="row">
		<div class="col-lg-3 foot">
			<p><a title="支付方式" href="<?php echo U('page/i/','id=pays');?>">支付方式</a></p>
			<p><a title="服务费用" href="<?php echo U('page/i/','id=sess');?>">服务费用</a></p>
		</div>
		<div class="col-lg-3 foot">
			<p><a title="网站介绍" href="<?php echo U('page/i/','id=about');?>">网站介绍</a></p>
			<p><a title="招贤纳士" href="<?php echo U('page/i/','id=add');?>">招贤纳士</a></p>
		</div>
		<div class="col-lg-3 foot">
			<p><a title="订单查询" href="<?php echo U('Member/index/');?>">订单查询</a></p>
			<p><a title="订单查询" href="<?php echo U('Article/l/','id=15');?>">常见问题</a></p>
		</div>
		<div class="col-lg-3 foot">
		<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><a  href="<?php echo ($vo["link"]); ?>"> <?php echo ($vo["linkname"]); ?> </a></p><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>

<!--版权-->
<div class="copy">
<p align="center">© 2014 <?php echo ($name); ?> - <?php echo ($icp); ?></p>
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/">民伟网络</a>驱动</p>
</div>

<!--手机版底部导航-->
<div class="container navbar-fixed-bottom visible-xs mobile-nav">
  <div class="row ">
  
		<div class="col-md-3 col-xs-3">
		<a class="icon-btn" href="<?php echo U('Index/index/');?>">
		<span class="glyphicon glyphicon-home"></span>首页
		</a>
		</div>
	 	<div class=" col-xs-3">
		 <div class="btn-group dropup">
		 	<a class="icon-btn dropdown-toggle" data-toggle="dropdown" >
			<span class="glyphicon glyphicon-th"></span>分类
			</a>
			<ul class="dropdown-menu" style="min-width:245px;" role="menu">
				<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> 
					<a class="btn" href="<?php echo U('index/flist/','id='.$sub['fcid']);?>" ><?php echo ($sub["fcname"]); ?></a>
					</li>
					<li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
		 </div>
		</div>
		<div class="col-md-3 col-xs-3">
		 	<div class="btn-group dropup">
		 	<a class="icon-btn" href="<?php echo U('Member/index/');?>">
			<span class="glyphicon glyphicon-user"></span>我的订单
			</a>
			</div>
		</div>

		 <div class="col-md-3 col-xs-3">
		 	<a class="icon-btn" href="<?php echo U('Cart/index/');?>">
				
				<div id="ajax_target"><span class="glyphicon glyphicon-shopping-cart"></span>购物车<span class="badge" ><?php echo ($total_items); ?></span></div>
			</a>
		 </div>
  </div>

</div>
<!--全局js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__ROOT__/templates/ui/bootstrap/js/bootstrap.min.js"></script> 
	


</body>
<!-- END BODY -->
</html>