<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>厦门小鱼网</title>
<link rel="icon" href="image/site-icon.ico" type="image/x-icon"/>
<script src="../jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
<?php
require_once("_mysqli.class.php");

?>
</head>
<style>
body{
	font-family:'microsoft yahei',Arial,sans-serif;
	padding-right: 0!important;
	padding-left: 0!important;
	
	}
.modal-open{
	overflow:initial !important;
	}
.site-head{
	margin-top:50px;
	}
.page-header{
	background:url(image/bg.jpg) center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  	background-color:#333;
	}	
.page-header .container{
	height:180px;
	}
.side-menu{
	position:fixed;
	margin-top:150px;
	margin-left:83%;
	z-index:300;
	}
.carousel-title{
	background-color:#000;
	opacity:0.7;
	position:relative;
	color:#FFF;
	margin-top:-25px;
	line-height:25px;
	font-size:16px;
	font-weight:bold;
	text-align:center;
	}
.thumb-img{
	width:320px;
	height:260px;
	display:block;
	}
#nav-head{
	line-height:35px;
	font-size:15px;
	text-align:left;
	margin-top:4px;
	padding:0px 0;
	width:1140px;
	border:#CCC solid 1px;
	border-top:none;
	}
#news-item{
	line-height:21px;
	font-size:15px;
	text-align:left;
	}
#news-item div a:last-child{
	color:#666;
	font-size:15px;
	}
.panel-body{
	padding:0px;
	}
.img-title{
	background-color:#000 ;
	opacity:0.7;
	position:relative;
	color:#FFF;
	margin-top:-25px;
	line-height:25px;
	font-size:16px;
	font-weight:bold;
	text-align:center;
	}
.divide{
	display:block;
	height:10px;
	}
.nav-divider{
	margin:0px 0;
	}

</style>
<script type="text/javascript">
	$(document).ready(function() {
		$(".changeCity").click(function(){
			$('#city-list').css("display","block");
		});
		$("#city-list").mouseleave(function(){
			$('#city-list').css("display","none");
		});
		$("#meirong li").click(function(){
			$this=$(this);
			$this.addClass('btn-info');
		});
    });
	
			
</script>
<body>
    <!--导航栏-->
    <div class="navbar navbar-fixed-top navbar-inverse">
    	<div class="container">
        	<ul class="nav navbar-nav col-md-5">
            	<li class="active"><a class="data-toggle" data-toggle="dropdown" href="#">厦门小鱼<span class="caret"></span> </a>
                	<ul class="dropdown-menu pull-left">
                    	<li><a href="#"><i class="icon-food"></i>  美食</a></li>
                        <li><a href="#"><i class=" icon-desktop"></i>  家居</a></li>
                        <li><a href="#"><i class=" icon-heart"></i>  婚庆</a></li>
                        <li><a href="#"><i class=" icon-home"></i>  房产</a></li>
                        <li><a href="#"><i class=" icon-money"></i>  汽车</a></li>
                        <li><a href="#"><i class=" icon-magic"></i>  亲子</a></li>
                        <li><a href="#"><i class=" icon-male"></i>  女性</a></li>
                    </ul>
                </li>
                <li ><a href="yu-shequ.php">社区</a></li>
                <li ><a href="yu-series.php">分类</a></li>
                <li ><a href="#" data-toggle="modal" data-target="#phone">手机</a></li>
            </ul>
            
            <div class="nav navbar-form col-md-4">
            	<div class=" input-group ">
                	<input type="text" placeholder="请输入要搜索的内容"  class=" form-control">
                	<a class="btn btn-default input-group-addon" href="#"><i class="icon-search"></i></a>
                </div>
            </div>
         
         
            <ul class="nav navbar-nav pull-right ">
            	<li><a href="#" data-toggle="modal" data-target="#myModal2" > 登录</a> </li>
                <li><a href="register.php"> 注册</a> </li>
            </ul>
        </div>
    </div>
    <!--登录模态框-->
    <div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="container" style="width:35%;margin-top:13%">
            <div class=" modal-content">
                <div class="modal-header">
                    <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="text-center" id="myModalLabel2">登录小鱼网</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-offset-2 col-md-2 control-label">用户名：</label>
                            <div class="col-md-3"><input class="form-control" type="text" placeholder="请输入用户名"/></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-offset-2 col-md-2 control-label">密码：</label>
                            <div class="col-md-3"><input class="form-control" type="password" placeholder="请输入密码"/></div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-md-offset-5"><input class="btn btn-info"type="submit" value=" 登 录 "></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
    <!--手机客户端模态框-->
    <div class="modal fade" id="phone"  role="dialog" aria-hidden="true" aria-labelledby="yu-app">
        <div class="container" style="margin-top:100px;">
            <div class=" modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="yu-app">小鱼手机客户端</h4>
                </div>
                <div class="modal-body" style="height:600px;">
                    <div class="col-md-5 text-center">
                        <div style="display:block;width:60%;height:500px;border:#CCC solid 1px;border-bottom:none;border-radius:20px 20px 0 0;margin:auto;margin-top:30px;">
                            <div>
                                <i  style="display:block;width:50px;height:12px;border-radius:6px;background-color:#999;margin-left:90px;margin-top:20px;"></i>
                                <i  style="display:block;width:12px;height:12px;border-radius:6px;background-color:#999;margin-left:150px;margin-top:-12px;"></i>
                            </div>
                            <div class="carousel-inner" style="margin-top:18px;">
                                <div class="item active"><img src='image/yu-app1351.png' width='100%' height='445' /></div>
                                <div class="item"><img src='image/yu-app1409.png' width='100%' height='445' /></div>
                                <div class="item"><img src='image/yu-app1428.png' width='100%'height='445' /></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div style="margin-top:50px;">
                            <img src="image/app-text216.png"/>
                        </div>
                        <label>知城事聊生活，话情感养兴致。遇见小鱼网，有可以随心交流的社区圈子，各种热门话题聊到上瘾；任性的生活特惠，让你随时收获"惊喜"。小鱼网客户端，让城市生活更简单。 知城事聊生活，话情感养兴致。遇见小鱼网，有可以随心交流的社区圈子，各种热门话题聊到上瘾；任性的生活特惠，让你随时收获"惊喜"。小鱼网客户端，让城市生活更简单。</label>
                        <div class="col-md-6" style="margin-top:60px;">
                            <div style="margin-top:30px;margin-left:20px;">
                                <button type="button" class="btn btn-info" style="width:150px;height:50px;font-size:16px;">
                                    <i class="icon-apple"></i> IOS客户端下载
                                </button>
                            </div>
                            <div style="margin-top:50px;margin-left:20px;">
                                <button type="button" class="btn btn-info" style="width:150px;height:50px;font-size:16px;">
                                    <i class="icon-android"></i> 安卓客户端下载
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:60px;">
                            <img src="image/bar-code301.png"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-info" data-dismiss="modal" aria-hidden="true">点击前往应用市场下载</a>
                </div>
            </div>
        </div>
    </div>
    <!--网站侧边固定导航栏-->
    <div class="side-menu">
            <div class="btn-group table-bordered small">
                <ul class=" nav nav-list small">
                    <li ><a href="#">热门优惠</a></li>
                    <li><a href="#">吃喝玩乐</a></li>
                    <li><a href="#">房产楼市</a></li>
                    <li><a href="#">家居装饰</a></li>
                    <li><a href="#">小鱼旅游</a></li>
                    <li><a href="#">时尚丽人</a></li>
                    <li><a href="#">妈咪宝贝</a></li>
                    <li><a href="#">小鱼汽车</a></li>
                    <li><a href="#">社区热图</a></li>
                    <li><a href="#">商务合作</a></li>
                    <li><a href="#">问题反馈</a></li>
                    <li class=" nav-divider"></li>
                    <li><a href="#" class="data-toggle" data-toggle="dropdown" id="myCus"><img src="image/cus.png"></a>
                        <ul class="dropdown-menu" aria-labelledby="myCus" style="position:absolute;margin-top:-130px;margin-left:-160px;">
                            <li ><img src="image/mycus.png"/></li>
                        </ul>
                    </li>
                     <li class=" nav-divider"></li>
                    <li><a href="#" class="data-toggle" data-toggle="dropdown" id="myWechat"><img src="image/wechatthumb.png"></a>
                        <ul class="dropdown-menu" aria-labelledby="myWechat" style="position:absolute;margin-top:-90px;margin-left:-160px;">
                            <li ><img src="image/erweima.png"/></li>
                        </ul>
                     </li>   
                    <li class=" nav-divider"></li>
                    <li class=""><a href="#">返回顶部<i class=" glyphicon glyphicon-circle-arrow-up" ></i></a></li>
                </ul>
            </div>
        </div>
    <!--网站主版-->
    <div class="container">
        <!--网站头部logo及图片-->
        <div class="site-head" >
            <div class="page-header">
                <div class="container">
                    <div class="col-md-2" style="margin-top:50px;">
                        <img class="img-responsive" src="image/title.png">
                    </div>
                    <div class="" style="margin-top:70px;">
                        <strong class="city">厦门</strong>
                        <a href="#" class="changeCity" ><span class="text-info">[切换城市]</span></a>
                    </div>
                    <div class=" btn-group" id="city-list" style="display:none;margin-left:130px;" >
                        <a href="#" class="btn btn-default"> 泉州</a>
                        <a href="#" class="btn btn-default"> 晋江</a>
                        <a href="#" class="btn btn-default"> 漳州</a>
                        <a href="#" class="btn btn-default"> 福州</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--网站导航-->
        <div class="container" style="width:1140px;padding:0px 0;">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#" class="btn btn-danger">首页</a></li>
                <li><a href="yu-shequ.php" class="btn btn-success">社区</a></li>
                <li><a href="#" class="btn btn-info">我的空间</a></li>
                <li><a href="#" class="btn btn-danger">手机客户端</a></li>
                <li><a href="#" class="btn btn-info">小鱼温度</a></li>
                <li><a href="#" class="btn btn-success">小鱼婚嫁</a></li>
                <li><a href="#" class="btn btn-warning">小鱼二手车</a></li>
                <li><a href="#" class="btn btn-primary">小鱼旅游</a></li>
                <li class="drop-down pull-right">
                    <a href="#" class="data-toggle" data-toggle="dropdown" id="wechat">
                        <img class="img-responsive wechat" src="image/wechat.png">
                    </a>
                    <ul class="dropdown-menu" role="menu"aria-labelledby="wechat">
                        <li role="presentation"><img src="image/erweima.png" ></li>
                    </ul>
                </li>
            </ul>
        </div>
         <!--网站导航菜单栏-->
        <div class="container" id="nav-head">
            <div class="col-lg-3">
                <div class="col-md-3"><img  src="image/shequ.png"><a href="yu-shequ.php">社区</a></div>
                <div class="text-center">
                    <a href="#">鹭岛生活</a> <a href="#">谈天说地</a> <a href="#"> 小鱼健康</a>
                </div>
                 <div class="text-center">
                    <a href="#">小鱼问答</a> <a href="#"> 美食吃货</a> <a href="#">时尚丽人</a>
                </div>
            </div> 
            <div class="col-lg-3 ">
                <div class="col-md-3"><img  src="image/xiaofei.png"><a href="#">消费</a></div>
                <div class="text-center"><a href="#">房产楼市</a> <a href="#">家居装饰</a></div>
                <div class="text-center"><a href="#">小鱼汽车</a> <a href="#"> 小鱼金融</a></div>
            </div> 
            <div class="col-lg-3">
                <div class="col-md-3"><img  src="image/xiaoyu.png"><a href="#">优惠</a></div>
                <div class="text-center"><a href="#">小鱼卡</a> <a href="#">小鱼城事</a></div>
                <div class="text-center"><a href="#">小鱼币</a> <a href="#">特惠汽车</a></div>
            </div> 
            <div class="col-lg-3">
                <div class="col-md-3"><img  src="image/fenlei.png"><a href="yu-series.php">分类</a></div>
                <div class="text-center"><a href="#">物尽</a> <a href="#">租房</a> <a href="#"> 拼车</a>  <a href="#">二手房</a></div>
                <div class="text-center"><a href="#">求职</a> <a href="#">集市</a> <a href="#">教育</a>  <a href="#">小鱼上门</a></div> 
            </div>
        </div>  
         <!--顶部广告-->
        <div class="row text-center" style="margin-top:20px;margin-bottom:20px;">
            <img src="image/ad255.png" width="1140"/>
        </div> 
        <!--网站内容 分三部分-->
        <div class="container">
            <!--主版左侧-->
            <div class="col-md-4">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                	 <ul class=" carousel-indicators" style="position:absolute;">
                        <li data-target="#myCarousel" data-slide-to="0" class="btn  active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="btn "></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="btn"></li>
                        <li data-target="#myCarousel" data-slide-to="3" class="btn "></li>
                        <li data-target="#myCarousel" data-slide-to="4" class="btn "></li>
                        <li data-target="#myCarousel" data-slide-to="5" class="btn "></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image/accident.jpg">
                            <div class="carousel-title">
                                <a href="#">斑马线不减速，新手司机撞电动车</a>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="image/american.jpg">
                            <div class="carousel-title">
                                <a href="#" >美国国家新闻权威发布特朗普最新支持率调查</a>
                            </div>
                        </div>
                          <div class="item ">
                            <img src="image/baibaihe.jpg">
                            <div class="carousel-title">
                                <a href="#" >白百何泰国幽会小鲜肉男模，此处不好描述</a>
                            </div>
                        </div>
                          <div class="item ">
                            <img src="image/peng.jpg">
                            <div class="carousel-title">
                                <a href="#" >彭丽媛看望藏族学生</a>
                            </div>
                        </div>
                          <div class="item ">
                            <img src="image/turkey.jpg">
                            <div class="carousel-title">
                                <a href="#" >土耳其就加入欧盟开启公投</a>
                            </div>
                        </div>
                          <div class="item ">
                            <img src="image/north.jpg">
                            <div class=" carousel-title" >
                                <a href="#" >美国货轮搁浅北冰洋</a>
                            </div>
                        </div>
                    </div>
                    <a href="#myCarousel" class="carousel-control left " data-slide="prev"></a>
                    <a href="#myCarousel" class="carousel-control right" data-slide="next"></a>
                </div>
                
                   
             
                
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <a href="#"><h4>生活好帮手>>></h4></a>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <a href="#" class="btn btn-default col-md-4"><i class="icon-home icon-blue" style="color:#F90;"></i> 找房子 </a>
                            <a href="#" class="btn btn-default col-md-4"><i class=" icon-check" style="color: #0F3;"></i> 找工作 </a>
                            <a href="#" class="btn btn-default col-md-4"><i class="icon-heart" style="color:  #909;"></i> 优惠购车 </a>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-default col-md-4"><i class="icon-money" style="color: #F00;"></i>  反诈骗 </a>
                            <a href="#" class="btn btn-default col-md-4"><i class="icon-android" style="color: #F0F;"></i> 淘二手 </a>
                            <a href="#" class="btn btn-default col-md-4"><i class=" icon-question" style="color: #00F;"></i> 小鱼问答 </a>
                        </div>
                    </div>
                </div>
                
                <div class="table-bordered">
                    <div class="panel-group" id="folding">
                        <div class="panel">
                            <div class="panel-heading">
                                <a href="#itemOne" data-toggle="collapse"  data-parent="#folding"><h3 class=" panel-title"> 环岛路浪漫出租车婚礼正在进行</h3></a>
                            </div>
                            <div class="collapse panel-collapse in" id="itemOne">
                                <div class="panel-body">
                                    <img src="image/carent.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a href="#itemTwo" data-toggle="collapse" data-parent="#folding"><h3 class=" panel-title"> 今夏游玩好去处，鼓浪屿欢迎你</h3></a>
                            </div>
                            <div class="collapse panel-collapse" id="itemTwo">
                                <div class="panel-body">
                                    <img src="image/gulangyu.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a href="#itemThree" data-toggle="collapse" data-parent="#folding"><h3 class=" panel-title"> 地铁开挖，这个小区的居民因此遭遇用水慌</h3></a>
                            </div>
                            <div class="collapse panel-collapse" id="itemThree">
                                <div class="panel-body">
                                    <img src="image/news.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a href="#itemFour" data-toggle="collapse" data-parent="#folding"><h3 class=" panel-title"> 这个标题我实在编不下去了</h3></a>
                            </div>
                            <div class="collapse panel-collapse" id="itemFour">
                                <div class="panel-body">
                                    <img src="image/xiamenbei.jpg">
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <!--主版中-->
            <div class="col-md-5">
                <div class="panel">
                    <div class="panel-heading"><h4><strong><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></strong></h4></div>
                    <div class="panel-body"><?php echo $arr[4]; ?><a href="#">[详细]</a></div>
                    <div class="panel-heading"><h4><strong><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></strong></h4></div>
                    <div class="panel-body"><?php echo $arr[4]; ?><a href="#">[详细]</a></div>
                    <div class="panel-heading"><h4><strong><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></strong></h4></div>
                    <div class="panel-body"><?php echo $arr[4]; ?><a href="#">[详细]</a></div>
                </div>
                <div class=" text" id="news-item">
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[生活]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[生活]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div class="text-center"><h4><strong><a href="#"></a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></strong></h4></div>
                    <div ><a href="yu-shequ.php">[生活]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[小鱼]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[小鱼]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div class="text-center"><h4><strong><a href="#"></a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></strong></h4></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[娱乐]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[社区]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                    <div ><a href="yu-shequ.php">[娱乐]</a><a href="#"><?php $arr=($db->fetch(1));echo $arr[1]; ?></a></div>
                </div>
            </div>
            <!--主版右侧-->
            <div class="col-md-3">
                <div class="bulletin table-bordered">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#bulletin" data-toggle="tab"> 公告</a></li>
                        <li ><a href="#rule" data-toggle="tab"> 规则</a></li>
                        <li ><a href="#plate" data-toggle="tab"> 版块</a></li>
                        <li ><a href="#tempreture" data-toggle="tab"> 温度</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="bulletin">
                            <p><a href="yu-shequ.php">小鱼社区版主招募</a> <a href="#">小鱼挂牌新三板</a></p>
                            <p><a href="#">全民爆料，周周有奖</a> <a href="#">有问题上小鱼问答</a></p>
                        </div>
                        <div class="tab-pane fade in" id="rule"> 
                            <p><a href="#"> 帖子侵权如何投诉？ </a> <a href="#"> 人气值评分须知 </a></p>
                            <p><a href="#">社区版块结构说明  </a> <a href="#"> 小鱼积分获取规则 </a></p>
                        </div>
                        <div class="tab-pane fade in" id="plate"> 
                            <p><a href="#"> 发现更好的自己！ </a> <a href="#">  鱼鱼们，跑步吧</a></p>
                            <p><a href="#"> 免费广告区有惊喜 </a> <a href="#"> 鱼鱼集市发帖须认证 </a></p>
                        </div>
                        <div class="tab-pane fade in" id="tempreture"> 
                            <p><a href="#"> 版主山鹰怪病后续 </a> <a href="#"> 小鱼志愿者进社区 </a></p>
                            <p><a href="#"> 收闲置衣物 </a> <a href="#"> 点击更多公益活动 </a></p>
                        </div>
                    </div>
                    <div id="log-img" style="border-top:1px solid #CCC;">
                        <div class="panel-heading text-center">欢迎来到小鱼网</div>
                        <div class="panel-body text-center">
                            <a href="#" class=" btn-lg btn-info" data-toggle="modal" data-target="#myModal2">登录</a>
                            <a href="register.php" class="panel-info">注册</a>
                        </div>
                    </div>
                </div>
                
                <div class="carousel slide" id="myCarousel1" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#"><img class="thumb-img" src="image/timg(1).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (2).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (3).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (4).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (5).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (6).jpg"/></a>
                        </div>
                         <div class="item">
                            <a href="#"><img class="thumb-img" src="image/timg (7).jpg"/></a>
                        </div>
                    </div>
                    <a href="#myCarousel1" class="carousel-control left" data-slide="prev"> </a>
                    <a href="#myCarousel1" class="carousel-control right" data-slide="next"> </a>
                </div>
               
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#"><h4 class="panel-title">热门点击</h4></a>
                    </div>
                    <div class="panel-body ">
                        <ul class="list-group li" style="margin-left:9px;margin-top:10px;line-height:25px;">
                            <li class=" list-unstyled"><a href="#"><i class=" icon-bookmark" style="color:#F00"></i> 1. 我是点击排行第一名</a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark" style="color:#FC0"></i> 2.我姓王，隔壁也姓王，这下尴尬了 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark" style="color:#939"></i> 3.厦门萌宠大作战 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 4.我的老师不太冷 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 5.达康书记喊你回家自首 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 6.那些年的赖昌星 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 7.揭秘不为人知的十大XXX </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 8.屡遭调戏，哈士奇怒怼吉娃娃</a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 9.忍无可忍，德牧撕逼雪纳瑞</a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 10.忍禁不禁，博美坐看楼上撕咬</a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 11.那些年我们吃过的黑暗料理 </a></li>
                            <li class=" list-unstyled"><a href="#"><i class="icon-bookmark-empty"></i> 12.我是点击排行最后一名</a></li>
                        </ul>
                    </div>
                </div>
                
                <div><img src="image/timg.png" width="100%"></div>
            </div>
        </div>
        <!--中部广告-->
        <div class="btn btn-group" style="width:100%;padding:0px 0;margin-left:15px;">
            <a href="#" class="col-md-3" style="padding-left:3px;padding-right:3px;"><img src="image/yu-food.png" width="100%"/></a>
            <a href="#" class="col-md-3" style="padding-left:3px;padding-right:3px;"><img src="image/yu-car.png" width="100%"/></a>
            <a href="#" class="col-md-3" style="padding-left:3px;padding-right:3px;"><img src="image/yu-daily.png" width="100%"/></a>
            <a href="#" class="col-md-3" style="padding-left:3px;padding-right:3px;"><img src="image/yu-food.png" width="100%"/></a>
        </div>
     </div>
    <!--分版版面-->    
    <div class="container">           
        <!--小鱼策划-->       
        <div class="panel">
            <div class="panel-heading">
                <h3>小鱼策划</h3>
                <ul class="nav nav-pills ">
                    <li class="active"><a href="#yu-house" data-toggle="tab"> 房产</a></li>
                    <li><a href="#yu-home" data-toggle="tab"> 家装</a></li>
                    <li><a href="#yu-car" data-toggle="tab"> 汽车</a></li>
                    <li><a href="#yu-wedding" data-toggle="tab"> 婚庆</a></li>
                    <li><a href="#yu-news" data-toggle="tab"> 城事</a></li>
                    <li><a href="#yu-food" data-toggle="tab"> 美食</a></li>
                    <li><a href="#yu-travel" data-toggle="tab"> 旅游</a></li>
                    <li><a href="#yu-fashion" data-toggle="tab"> 时尚</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="yu-house">
                    <div class="col-md-4">
                    	<div class="panel">
                        	<div class="panel-heading">
                            	<h4>厦4幅商住用地5月18日拍卖 土拍<i class=" glyphicon glyphicon-triangle-right pull-right text-muted" ></i></h4>
                            </div>
                            <div class="panel-body">
                            	<div>
                                	<img src="img/cehua26221004.png" width="300" height="350">
                                    <div class="img-title" style="width:300px;">厦4幅商住用地拍卖</div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                    	<div class="panel">
                        	<div class="panel-heading">
                            	<h4>鱼大叔购房问答重磅上线 鱼大叔<i class=" glyphicon glyphicon-triangle-right pull-right text-muted" ></i></h4>
                            </div>
                            <div class="panel-body">
                            	<div>
                                	<img src='img/cehua26221021.png' width="300" height="350">
                                    <div class="img-title" style="width:300px;">鱼大叔购房问答重磅上线</div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                    	<div class="panel">
                        	<div class="panel-heading">
                            	<h4>今日推荐 What's new?<i class=" glyphicon glyphicon-triangle-right pull-right text-muted" ></i></h4>
                            </div>
                            <div class="panel-body">
                            	<div class="panel-group" id="cehua">
                                	<div class="panel">
                                    	
                                        	<a href="#house-item1" data-toggle="collapse" data-parent="#cehua"><h5>首付80万！能买到哪些房子呢？</h5></a>
                                       
                                        <div class="collapse panel-collapse in" id="house-item1">
                                        	<img src='img/cehua-house23109.png' width="300" height="180"/>
                                        </div>
                                    </div>
                                    <div class="panel">
                                    	
                                        	<a href="#house-item2" data-toggle="collapse" data-parent="#cehua"><h5>住宅库存充足？今年厦还有哪些楼盘可买!</h5></a>
                                       
                                        <div class="collapse panel-collapse " id="house-item2">
                                        	<img src='img/cehua-house223130.png' width="300" height="180"/>
                                        </div>
                                    </div>
                                    <div class="panel">
                                    	 
                                        	<a href="#house-item3" data-toggle="collapse" data-parent="#cehua"><h5>市建设局:商办类项目不得擅自变为居住用途</h5></a>
                                        
                                        <div class="collapse panel-collapse " id="house-item3">
                                        	<img src='img/cehua-house223150.png' width="300" height="180"/>
                                        </div>
                                    </div>
                                    <div class="panel">
                                    	 
                                        	<a href="#house-item4" data-toggle="collapse" data-parent="#cehua"><h5>房贷新政发布:1笔已结清首付提至40%</h5></a>
                                       
                                        <div class="collapse panel-collapse " id="house-item4">
                                        	<img src='img/cehua-house223205.png' width="300" height="180"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in " id="yu-home">
                    2
                </div>
                 <div class="tab-pane fade in " id="yu-car">
                    3
                </div>
                 <div class="tab-pane fade in " id="yu-wedding">
                    4
                </div>
                 <div class="tab-pane fade in " id="yu-news">
                    5
                </div>
                 <div class="tab-pane fade in " id="yu-food">
                    6
                </div>
                 <div class="tab-pane fade in " id="yu-travel">
                    7
                </div>
                 <div class="tab-pane fade in " id="yu-fashion">
                    8
                </div>
            </div>
        </div>
        
        <!--美食吃货-->
        <div class="panel">
            <div class="panel-heading ">
                <h3 >美食吃货</h3>
                <ul class="nav nav-tabs ">
                    <li><a href="#">找商家</a></li>
                    <li><a href="#"> 小鱼厨房</a></li>  
                    <li><a href="#"> 美食榜单</a></li> 
                    <li><a href="#"> 线下活动</a></li>
                    <li><a href="#"> 美食版块</a></li>
                    <li class="pull-right"><a href="#">  美食休闲商家营销推广请点击>></a></li>
                </ul>
            </div>
            <div class="container">
            	<div class="col-md-2">
                    <ul class="nav nav-list table-bordered text-center" >
                        <li class="active" style="height:72px;"><a href="#eat-what" data-toggle="tab"><h4>呷虾米</h4></a></li>
                        <li class="nav-divider"></li>
                        <li style="height:72px;" ><a href="#kitchen" data-toggle="tab"><h4>下厨房</h4></a></li>
                        <li class="nav-divider"></li>
                        <li style="height:72px;" ><a href="#yu-card" data-toggle="tab"><h4>小鱼卡</h4></a></li>
                        <li class="nav-divider"></li>
                        <li style="height:72px;" ><a href="#buffet" data-toggle="tab"><h4>自助餐</h4></a></li>
                        <li class="nav-divider"></li>
                        <li style="height:72px;" ><a href="#list" data-toggle="tab"><h4>最榜单</h4></a></li>
                    </ul>
                </div>
                <div class="col-md-10" style="margin-left:-45px;">
                	<div class="tab-content">
                        <div class="tab-pane fade in active" id="eat-what">
                            <div class="col-md-4" style="padding-left:2.5px;padding-right:2.5px;">
                            	<div>
                                	<img src='img/meishi72135.png'/ width="100%" height="180">
                                	<div class="img-title">美食天下</div>
                                </div>
                                <div style="margin-top:5px">
                                	<img src='img/meishi172053.png'/ width="100%" height="180">
                                	<div class="img-title">美食天下</div>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding-left:2.5px;padding-right:2.5px;">
                            	<div>
                                	<img src='img/meishi72120.png'/ width="100%" height="370">
                                	<div class="img-title">美食天下</div>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding-left:2.5px;padding-right:2.5px;">
                            	<div>
                                	<img src='img/meishi26172039.png'/ width="100%" height="180">
                                	<div class="img-title">美食天下</div>
                                </div>
                                <div style="margin-top:5px" >
                                	<img src='img/meishi172105.png'/ width="100%" height="180">
                                	<div class="img-title">美食天下</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in " id="kitchen">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="tab-pane fade in " id="yu-card">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="tab-pane fade in " id="buffet">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="tab-pane fade in " id="list">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <!--房产楼市-->       
        <div class="panel">
            <div class="panel-heading">
                <h3>房产楼市</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">房产论坛</a></li>
                    <li><a href="#">新房楼盘</a></li>
                    <li><a href="#">二手房</a></li>
                    <li><a href="#">房屋租赁</a></li>
                    <li class="pull-right"><a href="#">  鱼大叔买房有问题，请找鱼大叔>></a></li>
                </ul>
            </div>
            
            <div class="container">
                <div class="col-md-9">
                    <div class="col-md-5">
                        <div class="carousel" id="ihome" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div><img src="img/jiaju090319.png" width="380" height="220"/></div>
                                </div>
                                <div class="item">
                                    <div><img src="img/jiaju6090409.png" width="380" height="220"/></div>
                                </div>
                                <div class="item">
                                    <div><img src="img/jiaju6090421.png" width="380" height="220"/></div>
                                </div>
                                <a href="#ihome" class="carousel-control left" data-slide="prev"></a>
                                <a href="#ihome" class="carousel-control right" data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                  	<div class="col-md-7">
                          <a href="#" target="_blank"><h4>鱼大叔购房问答重磅上线 有疑问找大叔</h4></a>
                          <p>【鱼大叔购房问答】上线啦！他是聚集了最专业的回答团队，在购房或者是卖房环节有任何疑问都可以问鱼大叔哦！</p>
                          <a href="#" target="_blank"><h4>多图实拍！马銮湾新城配套大起底</h4></a>
                          <p>马銮湾新城正朝着&ldquo;一年形成大开发态势、三年形成骨干路网，五年基础设施基本完善，八年新城框架基本成型&rdquo;的目标稳步迈进。</p>
                          <a href="#" target="_blank"><h4>今年厦门还有哪些楼盘可买!</h4></a>
                          <p>今年厦门还有哪些楼盘将入市呢？到底有没有40个盘？具体有哪些项目？</p>
                    </div>
                    
                    <div class="col-md-1" style="margin-left:5px;width:25px;" >
                        <a href="#house-carousel" class="carousel-control left "data-slide="prev" style="color:#000;">
                            <i class="glyphicon glyphicon-triangle-left" style="font-size:25px;line-height:200px;"></i>
                        </a>
                    </div>
                    
                    <div class="col-md-9" style="margin-left:25px;width:800px;padding:0px 0;" >
                        <div class="carousel" data-ride="carousel" id="house-carousel" >
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-3">
                                        <img src='img/jiaju26090307.png' width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src='img/jiaju426090229.png' width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src='img/jiaju6090241.png' width="100%" height="180"/> 
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src='img/jiaju090319.png' width="100%" height="180"/> 
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3">
                                        <img src="img/jiaju426090229.png" width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <img src="img/jiaju26090307.png" width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="img/jiaju26090209.png" width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="img/jiaju6090500.png" width="100%" height="180"/>
                                        <div class="carousel-title">家装案例参考</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="col-md-1"  style="margin-left:830px;width:25px;margin-top:-190px;" >
                         <a href="#house-carousel" class="carousel-control left" data-slide="prev" style="color:#000;">
                             <i class="glyphicon glyphicon-triangle-right"  style="font-size:25px;line-height:200px;"></i>
                         </a>
                    </div>
                </div>
                <div class="col-md-3">
                    
                        <ul class=" nav nav-tabs">
                        	<li class="active"><a href="#weekend" data-toggle="tab">周末看房团</a></li>
                            <li><a href="#loushi" data-toggle="tab">楼盘直通车</a></li>
                        </ul>
                        <div class="tab-content">
                        	<div class="tab-pane fade in active" id="weekend">
                            	<p class="text-info">每周末出发，报名享独家优惠</p>
                                <div class="form">
                                	<div class="form-group "><input type="text" class="form-control" placeholder="请输入您的姓名"/></div>
                                	<div class="form-group "><input type="text" class="form-control" placeholder="请输入您的手机"/></div>
                                    <div class="form-group col-md-6"><input type="text" class=" form-control" placeholder="验证码"/></div>
                                    <div class="form-group col-md-6"><button type="button" class="btn btn-info">获取验证码</button></div>
                                    <div class="form-group " >
                                        <select class="form-control">
                                            <option>请选择您的路线</option>
                                        </select>
                                    </div>
                                	<div class="form-group text-center"><button type="submit" class=" btn btn-info" >免费报名</button>
                                    </div>
                                </div>
                            </div> 
                            <div class="tab-pane fade in" id="loushi">
                            	<p class="text-info">精选楼盘随时出发，一对一专业服务</p>
                                <div class="form-group">
                                	<div class="form-group "><input type="text" class="form-control" placeholder="请输入您的姓名"/></div>
                                	<div class="form-group "><input type="text" class="form-control" placeholder="请输入您的手机"/></div>
                                	<div class="form-group "><input type="date" class="form-control" placeholder="请选择看房时间"/></div>
                                    <div class="form-group ">
                                        <select class="form-control">
                                            <option>请选择楼盘</option>
                                        </select>
                                    </div>
                                	<div class="form-group text-center"><button type="submit" class=" btn btn-info">免费报名</button></div>
                                
                            </div> 
                            </div> 
                        </div>
                    
                </div>
            </div>
        </div>
        <!--家居装饰-->        
        <div class="panel">
            <div class="panel-heading">
                <h3>家居装饰</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">装修讨论</a></li>
                    <li><a href="#">家装日记</a></li>
                    <li><a href="#">家装互助</a></li>
                    <li><a href="#">案例图库</a></li>
                    <li><a href="#">设计公司</a></li>
                    <li><a href="#">建材品牌</a></li>
                    <li><a href="#">优惠活动</a></li>
                    <li><a href="#">优惠券</a></li>
                    <li class="pull-right"><a href="#">   共有35个优惠活动正在进行，请点击>></a></li>
                </ul>
            </div>
            <div class="container">
            
                <div class="col-md-4" style="margin-top:25px;">
                    <div class="carousel" id="home" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div><img src="img/jiaju090319.png" width="380" height="250"/></div>
                            </div>
                            <div class="item">
                                <div><img src="img/jiaju6090409.png" width="380" height="250"/></div>
                            </div>
                            <div class="item">
                                <div><img src="img/jiaju6090421.png" width="380" height="250"/></div>
                            </div>
                            <a href="#home" class="carousel-control left" data-slide="prev"></a>
                            <a href="#home" class="carousel-control right" data-slide="next"></a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-5">
                    <a href="#" target="_blank"><h3>因为睡眠不足而引发的一场惨案！</h3></a>
                    <p>火速围观！这个故事告诉我们，不好好布置一个家会严重影响到生活的质量，尤其是睡眠的质量。睡眠不足的人容易有起床气，后果很严重...</p>
                    <a href="#" target="_blank"><h3>一个抱枕就能让沙发颜值逆天</h3></a>
                    <p>不起眼的抱枕，简简单单的搭配却能让沙发的颜值逆天。有人说，抱枕在室内装饰界的地位已经等同于手提包在时尚界的地位，你怎么看？</p>
                    <a href="#" target="_blank"><h3>家具常用几种胶水 哪款最毒？！</h3></a>
                    <p>现代社会，大工业背景，人们面对各种各样的怪病，产生了越来越多的担心，环保，已经不是一个矫情的话题，而是一个关乎生</p>
                </div>
                
                <div class="col-md-3">
                    <div class="panel">
                        <strong>免费获取</strong>
                        <div class="panel-body">
                            <h5>户型设计预算方案</h5>
                            <div class="form-group">
                                <input type="text"  class="form-control"  placeholder="请填写您的姓名">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  placeholder="请填写您的联系方式">
                            </div>
                            <div class="form-group">
                            	<button type="submit" class=" btn btn-info">提交</button>
                            </div>
                            <hr/>
                            <h5>橱柜招投标</h5>
                            <div class="form-group">
                            	<input type="text"  class="form-control" placeholder="填写您的手机号码">
                            </div>
                             <div class="form-group">
                            	<button type="submit" class=" btn btn-info">提交</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                <div class="col-md-1" style="width:25px;" >
                    <a href="#home-carousel" class="carousel-control left "data-slide="prev" style="color:#000;">
                        <i class="glyphicon glyphicon-triangle-left" style="font-size:25px;line-height:200px;"></i>
                    </a>
                </div>
                
                <div class="col-md-10" style="margin-left:5px;margin-right:5px;padding:0px 0;width:1090px;" >
                    <div class="carousel" data-ride="carousel" id="home-carousel" >
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-3">
                                    <img src='img/jiaju26090307.png' width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src='img/jiaju426090229.png' width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src='img/jiaju6090241.png' width="100%" height="200"/> 
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src='img/jiaju090319.png' width="100%" height="200"/> 
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-md-3">
                                    <img src="img/jiaju6090421.png" width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                
                                <div class="col-md-3">
                                    <img src='img/jiaju6090409.png' width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src='img/jiaju6090346.png' width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src='img/jiaju6090241.png' width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-md-3">
                                    <img src="img/jiaju426090229.png" width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="img/jiaju26090307.png" width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/jiaju26090209.png" width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/jiaju6090500.png" width="100%" height="200"/>
                                    <div class="carousel-title">家装案例参考</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-md-1" style="margin-left:1120px;margin-top:-195px;width:25px;">
                     <a href="#home-carousel" class="carousel-control left" data-slide="prev" style="color:#000;">
                         <i class="glyphicon glyphicon-triangle-right"  style="font-size:25px;line-height:200px;"></i>
                     </a>
                </div>
            
            </div>
            
        </div>
        <!--小鱼旅游-->
        <div class="panel">
            <div class="panel-heading">
                <h3>小鱼旅游</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">旅游首页</a></li>
                    <li><a href="#">鱼游天下</a></li>
                    <li><a href="#">旅游资讯</a></li>
                    <li><a href="#">线路推荐</a></li>
                    <li class="pull-right"><a href="#">   小鱼旅游达人招募中，请点击 >></a></li>
                </ul>
            </div>
            <div class="container">
            
                <div class="col-md-4" style="margin-top:25px;">
                    <div class="carousel" id="travel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div>
                                    <img src="img/lvyou26090018.png" width="350" height="220"/>
                                    <div class="img-title">五一去哪儿玩</div>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="img/lvyou26085804.png" width="350" height="220"/>
                                    <div class="img-title">武夷风光无限</div>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="img/lvyou26085750.png" width="350" height="220"/>
                                    <div class="img-title">世界那么大</div>
                                </div>
                            </div>
                            <a href="#travel" class="carousel-control left" data-slide="prev"></a>
                            <a href="#travel" class="carousel-control right" data-slide="next"></a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-5">
                    <div><a href="#" target="_blank"><h3>在安溪邂逅神秘又好玩の峡谷森林</h3></a></div>
                    <p>时常有人会问，厦门周边出游去哪儿好？既希望风景优美，又希望好玩有趣。小编一直记着大家的需求，这就来推荐啦！</p>
                    <div><a href="#" target="_blank"><h3>蓝山越，不止于遇见</h3></a></div>
                    <p>据说酒店设计理念源于穿越，从古代到当代，从当代到现代，在厦门这小清新的城市显得独立出众。</p>
                    <div><a href="#" target="_blank"><h3>金滩古林，一片藏在江西的绝世秘境</h3></a></div>
                    <p>第一眼看见金滩古林的照片，就被迷住了，因为其中散发出的静谧、清新。也许，这正是现实版的&ldquo;绿野仙踪&rdquo;。</p>
                   
                </div>
                
                <div class="col-md-3">
                    <div class="panel">
                        <div class="panel-heading"><strong><span class="panel-title">爱游团</span></strong></div>
                        <div class="panel-body">
                            <p>我们召集爱生活、爱旅行、爱分享的鱼鱼，体验旅游特权，分享旅游乐趣。</p>
                            <div class="form-group">
                                <input type="text"  class="form-control"  placeholder="请填写您的姓名">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  placeholder="请填写您的联系方式">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="请选择您期待的旅游路线">
                            </div>
                            <div class="form-group">
                                <button type="submit" class=" btn btn-info">提交</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                <div class="col-md-1" style="width:25px;" >
                    <a href="#travel-carousel" class="carousel-control left "data-slide="prev" style="color:#000;">
                        <i class="glyphicon glyphicon-triangle-left" style="font-size:25px;line-height:200px;"></i>
                    </a>
                </div>
                
                <div class="col-md-10" style="width:1080px;" >
                    <div class="carousel" data-ride="carousel" id="travel-carousel" >
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-3">
                                    <img src="img/lvyou090055.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou090123.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou6085724.png" width="230" height="200"/> 
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou6085942.png" width="230" height="200"/> 
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-md-3">
                                    <img src="img/lvyou6090138.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="img/lvyou26085736.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou26085927.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou26090018.png" width="230" height="200"/>
                                    <div class="carousel-title">大好河山，山水甲天下</div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-md-3">
                                    <img src="img/lvyou712.png" width="230" height="200"/>
                                    <div class="carousel-title">五一游玩好去处</div>
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="img/lvyou5653.png" width="230" height="200"/>
                                    <div class="carousel-title">五一游玩好去处</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou23412.png" width="230" height="200"/>
                                    <div class="carousel-title">五一游玩好去处</div>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/lvyou085821.png" width="230" height="200"/>
                                    <div class="carousel-title">五一游玩好去处</div>
                                </div>
                                
                            </div>
                            
                      </div>
                    </div>
                </div>            
                
                <div class="col-md-1" style="width:25px;">
                     <a href="#travel-carousel" class="carousel-control left" data-slide="next" style="color:#000;">
                         <i class="glyphicon glyphicon-triangle-right"  style="font-size:25px;line-height:200px;"></i>
                     </a>
                </div>
            
            </div>
        </div>
        <!--小鱼丽人-->
        <div class="panel ">
            <div class="panel-heading">
                <h3>小鱼丽人</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">丽人首页</a></li>
                    <li><a href="#">花样闺蜜</a></li>
                    <li><a href="#">时尚资讯</a></li>
                    <li><a href="#">找男友</a></li>
                    <li class="pull-right"><a href="#">   达人招募>></a></li>
                </ul>
            </div>
            <div class="container">
                <div class="col-md-9">
                    <div class="col-md-5" style="margin-top:25px;">
                        <div class="carousel" id="woman" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div><img src="img/liren02.png" width="315" height="220"/></div>
                                </div>
                                <div class="item">
                                    <div><img src="img/liren61232.png" width="315" height="220"/></div>
                                </div>
                                <div class="item">
                                    <div><img src="img/liren61248.png" width="315" height="220"/></div>
                                </div>
                                
                                <a href="#woman" class="carousel-control left" data-slide="prev"></a>
                                <a href="#woman" class="carousel-control right" data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3>面对面锁定心仪的TA</h3>
                        <p>4月1日愚人节，厦门水务集团团委主办了一场青年联谊活动，各大企业优质男女前来参加，主动出击寻找真爱！</p>
                        <h3>国货全系好物排行版!</h3>
                        <p>26款秒杀韩妆的国货好物，便宜好用，性价比超高！别说国货不知道用什么品牌好啦！</p>
                        <h3>厦门做头发最好的理发店集锦</h3>
                        <p>厦门最好的理发店，女神们私藏的理发师，都在这里！</p>
                        <br/>
                    </div>
                    
                    
                    <div class="col-md-1" style="width:20px;" >
                        <a href="#meizhuang" class="carousel-control left "data-slide="prev" style="color:#000;">
                            <i class="glyphicon glyphicon-triangle-left" style="font-size:25px;line-height:200px;"></i>
                        </a>
                    </div>
                    <div class="col-md-10" style="width:800px;padding:0px 0;margin-left:20px;" >
                        <div class="carousel" data-ride="carousel" id="meizhuang" >
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meihzuang164132.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meizhuang63957.png" width="243" height="200"/> 
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                   
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meizhuang64014.png" width="243" height="200"/> 
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                   
                                </div>
                                <div class="item">
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meihzuang5164220.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meizhuang64111.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meizhuang164201.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meizhuang164201.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meihzuang5164220.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                    <div class="col-md-4" style="padding-left:5px;padding-rigth:5px;">
                                        <img src="img/meihzuang164132.png" width="243" height="200"/>
                                        <div class="carousel-title">美肤泉卸妆水</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1" style="width:20px;margin-left:780px;margin-top:-205px;">
                         <a href="#meizhuang" class="carousel-control right" data-slide="next" style="color:#000;">
                             <i class="glyphicon glyphicon-triangle-right"  style="font-size:25px;line-height:200px;"></i>
                         </a>
                    </div>
                  
                    
                    
                </div>
                <div class="col-md-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="text-danger">我要变美</h5>
                            <hr/>
                        </div>
                        <div class="panel-body">
                            <div class=" form-horizontal">
                                <div class="form-group"><input type="text" class="form-control" placeholder="请输入您的姓名"/></div>
                                
                                <div class="form-group"><input type="text" class="form-control" placeholder="请输入您的电话"/></div>
                                
                                <div class="form-group"><input type="text" class="form-control" placeholder="请输入您的年龄"/></div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h5 class="text-danger">变美需求</h5><span class="pull-right small">可多选</span>
                            <hr/>
                        </div>
                        <div class="panel-body">
                            <ul class="list-inline" id="meirong">
                                <li class="btn btn-default col-md-3">祛痘</li>
                                <li class="btn btn-default col-md-3">祛斑</li>
                                <li class="btn btn-default col-md-3">脱毛</li>
                                <li class="btn btn-default col-md-3">洗牙</li>
                                <li class="btn btn-default col-md-3">美发</li>
                                <li class="btn btn-default col-md-3">美甲</li>
                                <li class="btn btn-default col-md-3">美睫</li>
                                <li class="btn btn-default col-md-3">美容SPA</li>
                                <li class="btn btn-default col-md-3">半永久</li>
                                <li class="btn btn-default col-md-3">皮肤管理</li>
                                <li class="btn btn-default col-md-3">整形</li>
                                <li class="btn btn-default col-md-3">减肥</li>
                                <li class="btn btn-default col-md-3">瑜伽</li>
                                <li class="btn btn-default col-md-3">舞蹈</li>
                                <li class="btn btn-default col-md-3"> 健身</li>
                            </ul>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="请输入您的变美预算">
                            </div>
                            <div class="btn btn-success">十秒登记，帮您变美</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--小鱼汽车-->
        <div class="panel">
            <div class="panel-heading">
                <h3>小鱼汽车</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">论坛</a></li>
                    <li><a href="#">二手车</a></li>
                    <li><a href="#">购车优惠</a></li>
                    <li><a href="#">新车</a></li>
                    <li><a href="#">实拍评测</a></li>
                    <li><a href="#">网上4S店</a></li>
                    <li><a href="#">养车心得</a></li>
                    <li><a href="#">小鱼理车</a></li>
                    <li class="pull-right small"><a href="#"> 一个城市 一只车标 免费领取小鱼车标 享车标优惠>></a></li>
                </ul>
            </div>
            <div class=" container">
                <div class="col-md-8">
                    <div class="col-md-5" style="margin-top:25px;">
                        <div class="carousel" data-ride="carousel" id="car">
                            <ul class="carousel-indicators">
                                <li data-target="#car" data-slide-to="0" class="btn btn-info active"></li> 
                                <li data-target="#car" data-slide-to="1" class="btn btn-info"></li> 
                                <li data-target="#car" data-slide-to="2" class="btn btn-info"></li> 
                            </ul>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/1024x0_1_q87_201504152237542765132112.jpg" / width="100%">
                                    <div class="img-title">车天下吉利博瑞</div>
                                </div>
                                <div class="item">
                                    <img src="img/1024x0_1_q87_autohomecar__wKgH1Fj3A4SASS2iAAJ0CCgYbio539.jpg" / width="100%">
                                    <div class="img-title">比亚迪王朝概念车</div>
                                </div>
                                <div class="item">
                                    <img src="img/1024x0_1_q87_autohomecar__wKgH21j2UwqACqdYAALDidd-Yf8468.jpg"/ width="100%">
                                    <div class="img-title">吉利领克01震撼来袭</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="panel">
                            <div class="panel-heading">
                                <a href="#"><h3>轻松买车不吃土</h3></a>
                                <p>首付低，免保险，免购置税，免挂牌费，3.5万开走20万的车，2.5万开走10万+的车<a href="#">[详细]</a></p>
                            </div>
                            <div class="panel-body">
                              <ul class="list-inline ">
                                <li class="col-md-6"><a href="#" target="_blank">美女与野兽自驾进藏</a></li>
                                <li><a href="#" target="_blank">全新途胜的旅行日记</a></li>
                                <li class="col-md-6"><a href="#" target="_blank">3.99万F3，报名即送车展报名</a></li>
                                <li><a href="#" target="_blank">东南DX7智享七重好礼</a></li>
                                <li class="col-md-6"><a href="#" target="_blank">福克斯直降4.68万！</a></li>
                                <li><a href="#" target="_blank">经典轩逸直降2.3万</a></li>
                                <li class="col-md-6"><a href="#" target="_blank">购置税全免，终身免费保养！</a></li>
                                <li><a href="#" target="_blank">10台特价车，等你来抢</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>精选二手车</h3>
                            <a href="#" class="pull-right small">更多精选二手车点击>>></a>
                            <hr/>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4" style="padding-left:4px;padding-right:4px;">
                                <img src="img/1024x0_1_q87_autohomecar__wKgH0Fe-s76AJs2OAAjSwQMh38A201.jpg" width="100%" height="185">
                                <div class="img-title">沃尔沃S80L稀缺准新车</div>
                                <p><span class="text-danger">优惠价：6.50万</span>指导价：12.52万</p>
                            </div>
                            <div class="col-md-4" style="padding-left:4px;padding-right:4px;">
                                <img src="img/5410f98829f20_960x420.jpg" width="100%" height="185">
                                <div class="img-title">梅赛德斯奔驰S300便宜出售</div>
                                <p><span class="text-danger">优惠价：6.50万</span>指导价：12.52万</p>
                            </div>
                            <div class="col-md-4" style="padding-left:4px;padding-right:4px;">
                                <img src="img/1024x0_1_q87_autohomecar__wKgFWVh0WCKAAkOsAAYAW8XOz-I816.jpg" width="100%" height="185">
                                <div class="img-title"> 极品飞度代步买菜</div>
                                <p><span class="text-danger">优惠价：6.50万</span>指导价：12.52万</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#"><h3 class="panel-title"><strong>特惠汽车</strong></h3></a>
                        </div>
                        <div class="panel-body">
                            <div>
                            	<img src="img/1024x0_1_q87_autohomecar__wKgH2ljtqFOAEbECAAnqQ0e28ZA153.jpg" width="100%" height="220">
                                <div class="img-title"> 吉利博越</div>
                            </div>
                            <div style="margin-top:22px;"> 
                            	<img src="img/1024x0_1_q87_autohomecar__wKjByFiEgOuAbxhSAAwXWkDdxgE540.jpg" width="100%" height="220">
                                <div class="img-title"> 奇瑞瑞虎tiggo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--妈咪宝贝-->
        <div class="panel ">
            <div class="panel-heading">
                <h3>妈咪宝贝</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">准妈热议</a></li>
                    <li><a href="#">时尚宝贝</a></li>
                    <li><a href="#">亲子二手</a></li>
                    <li><a href="#">亲子乐园</a></li>
                    <li class="pull-right"><a href="#">本地亲子商户申请入驻，请点击>>></a></li>
                    
                </ul>
            </div>
            <div class=" container">
                <div class="col-md-8">
                    <div class="col-md-5">
                            <img src="img/girl56.png" width="280px">
                        <div class="img-title"><a href="#">五一厦门科技馆要搞事情啊</a></div>
                        <div class="divide"></div>
                            <img src="img/qinzi30.png" width="280px">
                        <div class="img-title"><a href="#">【活动】游乐园精彩活动</a></div>
                      
                        
                    </div>
                    <div class="col-md-7">
                        <img src="img/child.png" height="335px;" />
                        <div class="img-title"><a href="#">【福利】宝宝福利限时赠送，请注意查收</a></div>
                    </div>
                    <div class="row" style="margin-left:5px;">
                        <div class="col-md-3">
                            <img src="img/child-icon4144.png">
                        </div>
                        <div class="col-md-3" style="padding:0px 0;">
                            <p><a href="#">待产包准备大作战</a></p>
                            <p><a href="#">待产包省钱大作战</a></p>
                            <p><a href="#">少儿围棋免费体验报名咯</a></p>
                            <p><a href="#">孕妈咪与宝贝的第一堂课</a></p>
                        </div>
                        <div class="col-md-3">
                            <img src="img/baby-icon4205.png">
                        </div>
                        <div class="col-md-3" style="padding:0px 0;">
                        <p><a href="#">11月寿星宝宝挑礼物咯！</a></p>
                        <p><a href="#">10月寿星宝宝中奖名单公布咯</a></p>
                        <p><a href="#">帮宝宝上首页的活动</a></p>
                        <p><a href="#">小鱼币换写真</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class=" panel-heading">
                            <h3>亲子游园</h3>
                            <hr/>
                            <a href="#"><h4>【提醒】商场安全隐患要牢记</h4></a>
                            <p>家长主动规避掉所有“可能”发生的情况，才能保障孩子的安全！...<a href="#">[详细]</a></p>
                        </div>
                        <div class=" panel-body" style="padding-left:10px;">
                            <p style="overflow:hidden"><a href="#">[亲子]</a>春天第一果、第一菜、第一汤，学会了就赚到啦！</p>
                            <p style="overflow:hidden"><a href="#">[亲子]</a>厦门一女经理产假期间被开除，状告法院获赔13万！</p>
                            <p style="overflow:hidden"><a href="#">[亲子]</a>教育部提课后服务，家长叫好，老师却...厦门会怎么做？</p>
                            <p style="overflow:hidden"><a href="#">[亲子]</a>学区房房价涨得快，身价翻翻翻</p>
                            <p style="overflow:hidden"><a href="#">[谈天]</a>17周多还没胎动，头次胎动啥感觉啊</p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="icon-book" style="font-size:40px;color:#F60;line-height:40px;"></i>
                                <p> <a href="#" >育儿宝典</a></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class=" icon-apple" style="font-size:40px;color: #F00;line-height:40px;"></i>
                                <p><a href="#" >准妈妈教室</a></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class=" icon-gift" style="font-size:40px;color: #06C;line-height:40px;"></i>
                                <p> <a href="#" >妈妈百宝箱</a></p> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--社区热图-->
        <div class="panel ">
            <div class="panel-heading">
                <h3>社区热图</h3>
                <ul class="nav nav-tabs">
                    <li><a href="#">美图汇</a></li>
                    <li><a href="#">摄影展</a></li>
                    <li><a href="#">游天下</a></li>
                    <li><a href="#">写真馆</a></li>
                    <li><a href="#">晒婚照</a></li>
                    <li><a href="#">家装秀</a></li>
                    <li><a href="#">宝宝秀</a></li>
                    <li><a href="#">萌宠物</a></li>
                    <li><a href="#">赏花草</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="container" style="padding:0px;width:1140px;margin-left:-5px;" >
                    <div class="col-md-3" style="padding-left:2.5px;padding-right:2.5px;">
                        <div>
                            <img src="img/3-160111133S6.jpg" width="100%" height="320"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                        <div style="margin-top:5px;">
                            <img src="img/0167dc55a9ebed32f875495ee2ec4e.jpg@900w_1l_2o_100sh.jpg" width="100%" height="240"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-left:2.5px;padding-right:2.5px;">
                        <div> 
                            <img src="img/caef76094b36acafda18da2975d98d1000e99c6f.jpg" width="100%" height="240"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                        <div style="margin-top:5px;"> 
                           <img src="img/8b82b9014a90f603f015d0923012b31bb151edba.jpg" width="100%" height="320"/>
                           <div class="img-title">唯美古装摄影</div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-left:2.5px;padding-right:2.5px;">
                        <div> 
                            <img src="img/5366d0160924ab18caa5ade23cfae6cd7a890bb7.jpg" width="100%" height="320"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                        <div class="col-md-6" style="margin-top:5px;padding-left:0px;padding-right:2.5px;" >
                            <img src="img/fd039245d688d43fcae3dd27741ed21b0ff43b98.jpg" width="100%" height="240"/>
                            <div class="img-title">唯美古装摄影</div>
                            
                        </div>
                        <div class="col-md-6" style="margin-top:5px;padding-left:2.5px;padding-right:0px;" >
                            
                            <img src="img/u=1025341954,710661584&fm=214&gp=0.jpg" width="100%" height="240"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-left:2.5px;padding-right:2.5px;">
                        <div> 
                            <img src="img/u=2943740357,1177489536&fm=214&gp=0.jpg" width="100%" height="320"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                        <div style="margin-top:5px;">
                            <img src="img/u=2075576147,3434111519&fm=214&gp=0.jpg" width="100%" height="240"/>
                            <div class="img-title">唯美古装摄影</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--友情链接-->
        <div class="panel ">
            <div class="panel-heading">
                <span><strong>小鱼分站</strong></span>
                <ul class="nav nav-tabs">
                    <li><a href="#">厦门小鱼</a></li>
                    <li><a href="#">福州小鱼</a></li>
                    <li><a href="#">泉州小鱼</a></li>
                    <li><a href="#">晋江小鱼</a></li>
                    <li><a href="#">漳州小鱼</a></li>
                </ul>           
            </div>
            <div class="panel-body">
                <span><strong>友情链接</strong></span>
                <ul class="nav nav-tabs">
                    <li><a href="#">软件园党建e家</a></li>
                    <li><a href="#">装修效果图</a></li>
                    <li><a href="#">好店通</a></li>
                    <li><a href="#">咸鱼网</a></li>
                    <li><a href="#">中国国信网</a></li>
                    <li><a href="#">乐看儿童动</a></li>
                    <li><a href="#">画福州便民</a></li>
                    <li><a href="#">地宝网</a></li>
                    <li><a href="#">新浪</a></li>
                    <li><a href="#">闽南名鞋库</a></li>
                    <li><a href="#">成都第四城</a></li>
                </ul>
                 <ul class="nav nav-tabs">
                    <li><a href="#">南昌圈圈网</a></li>
                    <li><a href="#">搜狐福建</a></li>
                    <li><a href="#">凤凰网</a></li>
                    <li><a href="#">厦门闽南</a></li>
                    <li><a href="#">网99健康网</a></li>
                    <li><a href="#">哪里玩旅游</a></li>
                    <li><a href="#">网得意生活</a></li>
                    <li><a href="#">温都论坛</a></li>
                    <li><a href="#">福州家园网</a></li>
                </ul>
                
            </div>
        </div>
    </div>
 	<!--网站页脚-->
    <div class="panel-footer">
            <div class="container">
                <div class="col-md-3"><img src="image/logo.png"><img src="image/footer.png" style="margin-left:35px;"></div>
                
                <div class="col-md-6">
                    <ul class=" list-inline ">
                        <li><a href="#"> 关于我们</a></li>
                        <li><a href="#"> 加入我们</a></li>
                        <li><a href="#"> 联系我们</a></li>
                        <li><a href="#"> 商务合作</a></li>
                        <li><a href="#"> 网站地图</a></li>
                        <li><a href="#"> 帮助中心</a></li>
                        <li><a href="#"> 法律声明</a></li>
                    </ul>
                    <div class="text-center"><span class="text-info small">©2003-2016 小鱼网 版权所有，并保留所有权利。</span></div>
                    <div class="text-center">
                        <span class="text-info small">
                            <img src="image/police.png" >
                            <a href="#">闽公网安备35020302000108号</a> 
                            <a href="#">闽ICP备05000086号-2</a> 
                            <a href="#">闽B2-20120055</a>
                        </span>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="col-md-7">
                        <img src="image/police-gif.png" style="margin-top:12px;">
                        <img src="image/jubao.png" style="margin-top:12px;margin-left:15px;">
                    </div>
                   <div style="margin-top:18px;"><a class="small text-left" href="#">中国互联网<p>举报中心</p></a></div>
                    
                </div>
            </div>
        </div>
</body>
</html>




























