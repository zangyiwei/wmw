<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo ($shopname); ?>-商家中心-<?php echo ($title); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="<?php echo ($web["key"]); ?>" name="description" />
	<meta content="<?php echo ($web["des"]); ?>" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--引入Buttons按钮样式 与bootstrap核心css有冲突-->
<link href="http://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="__ROOT__/templates/new/bootstrap32/css/buttons.css">

<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/new/bootstrap32/css/bootstrap.min.css" rel="stylesheet">
<!-- Loading Flat UI -->
<link href="__ROOT__/templates/new/css/flat-ui.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/new/css/head.css" rel="stylesheet">
<link href="__ROOT__/templates/new/css/shop.css" rel="stylesheet">
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


<body>


<!--top开始-->
<div class="top-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 hidden-xs">
        <span>美食送到家！</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=# onclick="javascript:addFavorite2()"><span style="color:red;">加入收藏</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-phone"></span> <span><a href="<?php echo U('page/i/','id=mobile');?>" title="手机订餐">手机版</a></span>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span> <span><a href="<?php echo U('Member/index/');?>">我的订单</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">联系客服 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow kf"></span>
          <ul class="dropdown-menu dropdown-menu-right kf">
          <li><a href="<?php echo U('page/i/','id=sess');?>">服务费用</a></li>
          <li><a href="<?php echo U('Article/l/','id=13');?>">常见问题</a></li>
          </ul>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">我是商家 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow shop"></span>
          <ul class="dropdown-menu dropdown-menu-right shop">
          <li><a href="<?php echo U('page/i/','id=hezuo');?>">我想合作</a></li>
          <li><a href="<?php echo U('page/i/','id=ad');?>">广告投放</a></li>
          </ul>
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="<?php echo U('page/i/','id=law');?>">法律条款</a></li>
          <li><a href="<?php echo U('page/i/','id=about');?>">关于我们</a></li>
          </ul>
        </span>
      </div>
    </div>
  </div>
</div>
<!--top结束-->

<!--top AD开始-->
<div class="container hidden-xs">
  <div class="alert alert-success alert-dismissible" role="alert" style="text-align: center;">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <img  alt="【全国】世界杯" src="http://p0.meituan.net/0.0.90/tuanpic/__46752036__6614165.jpg" width="1000" height="60">
  </div>
</div>
<!--top AD结束-->

<!--top search结束-->
<div class="container">
<div class="row">
  <div class="col-lg-4 hidden-xs">
    <span style="font-size:28px;color:#2db8ad"><a href="/">临沂订餐</a></span>
  </div>
  <div class="col-lg-5 col-xs-12 search">
    <div class="input-group">
      <input type="text" class="form-control" name="id" placeholder="请输入关键词">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit">搜索</button>
      </span>
    </div>
  </div>
  <div class="col-lg-3 hidden-xs">
    <a href="#"><img src="http://s0.meituan.net/www/css/i/header-commitment.vee85ff0e.png"></a>
  </div>
</div>
</div>
<!--top search结束-->



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



     
<!-- begin container -->


<!--top 简介开始-->
<div class="container">
	<div class="row top-content">
	<?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-4">
			<div class="pull-left">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<p><?php echo ($vo["sname"]); ?></p>
			<small>营业时间：<span class="label label-default" id="dingdan"><?php echo ($vo["opentime"]); ?>:00--<?php echo ($vo["closetime"]); ?>:00</span>
                <span id="s1" style="display:none;"><?php echo ($vo["opentime"]); ?></span>
				<span id="s2" style="display:none;"><?php echo ($vo["closetime"]); ?></span>
				
						<script>
							var myDate = new Date();
							var data1 = document.getElementById("s1").innerText;
							var data2 = document.getElementById("s2").innerText;
							var data3 = '{$vo.closetime}';
							//var button_obj = document.getElementById("dingdan");
							var current = myDate.getHours();
							//alert("data1="+data3);
							if(data1<current && current<data2) 
								{
									document.write('<span class="label label-success">正常营业!</span>');
								}else
								{
									document.write('<span class="label label-danger">打烊啦!</span>');
								}

						</script>
					
					</small>
			</div>
		</div>
		<div class="col-lg-4 hidden-xs">
		</div>
		<div class="col-lg-4 hidden-xs">
			<div class="pull-right">
			<i class="fa fa-truck"></i> <small>送餐速度：30分钟</small><br>
			<i class="fa fa-phone"></i> <small>送餐电话：<?php echo ($vo["sphone"]); ?></small><br>
			<i class="fa fa-map-marker"></i> <small>餐厅地址：<?php echo ($address); ?></small>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<!--top 简介结束-->
<!--商家菜单开始-->
<div class="container shopmenu">
	<div class="row">
		<div class="col-lg-9 menu">
			<div class="contaner">
				<div class="row">
				<?php if(is_array($foodlist)): $i = 0; $__LIST__ = $foodlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 food">
						<img src="<?php echo ($url); echo ($vo["fpic"]); ?>">
						<br>
						<small><?php echo ($vo["fname"]); ?></small>
						<span class="label label-success">￥<?php echo ($vo["fprice"]); ?></span>
						<a href="<?php echo U('Cart/cartadd/','id='.$vo['fid']);?>" data-target="#ajax_target" data-trigger="ajax" class="button button-rounded button-flat-highlight"><i class="fa fa-shopping-cart"></i> 加入购物车</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<div class="col-lg-3 notice">
		<div class="panel panel-inkfc hidden-xs">
               <div class="panel-heading"><span class="glyphicon glyphicon-shopping-cart"></span>我的菜单</div>
                <div class="panel-body">
                 <div id="ajax_target"><div id="test"></div></div>
                 </div>
         </div>

			<div class="pinned">
			<div class="panel">
			<h6> <i class="fa fa-bell"></i> 订餐公告</h6>
			<small><?php echo ($notice); ?></small>
			</div>
			</div>
			<div class="kuaidi">
				<small><strong>起送金额：</strong><?php echo ($startpay); ?>元</small><br>
				<small><strong>配送费用：</strong><?php echo ($pspay); ?>元</small>
			</div>
		</div>
	</div>
</div>


<!--在线客服-->
<link href="__ROOT__/templates/kfc/css/kf.css" rel="stylesheet" type="text/css"/>

<div id="service" class="hidden-xs">
	<a href="#" class="srvLog" target="_blank">在线帮助</a>
	<a class="srvCns" href="tencent://message/?uin=1207491516&Site=企业网站&Menu=yes">在线咨询</a>
	<a href="<?php echo U('page/i/','id=hezuo');?>" class="srvDj" target="_blank">申请合作</a>
	<a href="<?php echo U('Article/l/','id=15');?>" class="mscBtn" id="audioBtn" title="最新优惠">最新优惠</a>
	<a class="goTop" id="goTop" title="返回顶部" style="display:none">返回顶部</a>
</div>

<!--在线客服-->

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



<p align="center">© 2014 <?php echo ($name); ?> 　<?php echo ($icp); ?> 　　</p>
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/">民伟网络</a>驱动</p>


<div class="container navbar-fixed-bottom visible-xs" style="background-color:#FFF;">
  <div class="row ">
  
       <div class="col-md-3 col-xs-3"><a class="icon-btn" href="<?php echo U('Index/index/');?>">
								<i class="fa fa-home"></i>
								<div>首页</div>
							</a></div>
	 <div class=" col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn dropdown-toggle" data-toggle="dropdown" >
								<i class="fa fa-th-large"></i>
								<div>分类</div>
							</a>
							<ul class="dropdown-menu" style="min-width:245px;" role="menu">
							<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> <a class="btn" href="<?php echo U('index/flist/','id='.$sub['fcid']);?>" ><?php echo ($sub["fcname"]); ?></a></li>
							   <li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                             </ul>
							</div>
							</div>
	<div class="col-md-3 col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn" href="<?php echo U('Member/index/');?>">
								<i class="fa fa-user"></i>
								<div>我的订单</div>
							</a>
							</div>
							</div>

	 <div class="col-md-3 col-xs-3">
	 <a class="icon-btn" href="<?php echo U('Cart/index/');?>">
								<i class="fa fa-shopping-cart"></i>
								<div>购物车</div>
								<div id="ajax_target"><span class="badge" ><?php echo ($total_items); ?></span></div>
							</a>
	 </div>
  </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__ROOT__/templates/new/bootstrap32/js/bootstrap.min.js"></script> 
<!--钉-->
<script src="__ROOT__/templates/new/bootstrap32/js/jquery.pin.js"></script> 
<script>
      $(".pinned").pin({containerSelector: ".container", minWidth: 940});
</script>

<!-- Load JS here for greater good =============================-->
    <script src="__ROOT__/templates/new/js/jquery-1.8.3.min.js"></script>
    <script src="__ROOT__/templates/new/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.ui.touch-punch.min.js"></script>
    <script src="__ROOT__/templates/new/js/bootstrap-select.js"></script>
    <script src="__ROOT__/templates/new/js/bootstrap-switch.js"></script>
    <script src="__ROOT__/templates/new/js/flatui-checkbox.js"></script>
    <script src="__ROOT__/templates/new/js/flatui-radio.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.tagsinput.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.placeholder.js"></script>
    <script src="__ROOT__/templates/new//js/tmall-nav.js" /></script>
    <script src="__ROOT__/templates/new//js/unslider.min.js"></script>


<script type="text/javascript">
	$('.banner').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 3000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false,              //  Support responsive design. May break non-responsive designs
	arrows: true
});
</script>

<script>
(function() {
    // 返回顶部按钮自动隐藏
    $(window).scroll(function(){
        if ($(window).scrollTop()>200){
            $('#goTop').fadeIn();
        }else if($(window).scrollTop()<200){
            $('#goTop').fadeOut();
        }
    });

    // 返回顶部按钮
    $('#goTop').click(function() {
        $("html, body").animate({scrollTop:0}, 200);
    });

    // 语音开关
    var music = document.getElementById("bgMusic");

    $("#audioBtn").click(function(){

        if(music.paused){
            music.play();
            $("#audioBtn").removeClass("pause").addClass("play");
        }else{
            music.pause();
            $("#audioBtn").removeClass("play").addClass("pause");
        }
    });
})();
</script>





<script type="text/javascript"> 
$(document).ready(function(){   
	$('#test').load('/index.php?m=Cart&a=cart');
	
	});
</script>


  
	<!-- END CORE PLUGINS -->
</body>
<!-- END BODY -->
</html>