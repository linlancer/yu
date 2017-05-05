<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小鱼网</title>
<script src="../jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="icon" href="image/site-icon.ico" type="image/x-icon"/>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
</head>
<style>
body{font-family: 'microsoft yahei' ,Arial,sans-serif;
	background:/url(image/0b4b454cca49654fa9c64a94b8731996.jpg) fixed center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  	background-color: #FBFCE2;
	}
.modal-open{overflow:initial !important;}	
#nav-top a{
	line-height:40px;
	font-size:16px;
	}
#series li{
	line-height:32px;
	
	font-size:16px;
	}
.col-md-6{
	padding:0px 0;
	
	}
#series h3 a{
	line-height:45px;
	color:#000;
	}
#series h3 span{
	color:#F00
	}
#series ul:not(:first-child){
	border-left: #CCC solid 1px;
	height:550px;
	}
#nav-top .panel-body > div >:first-child{
	color:#06F;
	margin-top:12px;
	}
#nav-top .panel-body > div >:first-child >i{
	font-size:35px;
	}
#nav-top .panel-body > div{
	text-align:center
	}

</style>

<script type="text/javascript">
	
</script>
<body>
<!--导航栏-->
<div class="container">
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
                <li ><a href="#">分类</a></li>
                <li ><a href="#"  data-toggle="modal" data-target="#phone">手机</a>
                </li>
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

<div class="container">
    <!--网站头部logo及图片-->
    <div class="col-md-2" style="margin-top:70px;margin-bottom:10px;">
        <img src="image/series-icon.png"/>
    </div>
</div>
<div class="container" >               
    <div class="panel" id="nav-top">
    	<div class="panel-body" style="padding:0px 0;">
            <div class="col-md-4 table-bordered ">
            	<div class="col-md-3">
                	<i class="glyphicon glyphicon-fire"></i>
                    <p>热门 </p>
                </div>
                <div><a href="#" target="_blank" class="col-md-4">房屋出租</a><a href="#" target="_blank" class="col-md-4">厦门拼车</a></div>
                <div><a href="#" target="_blank" class="col-md-4">房屋出售</a><a href="#" target="_blank" class="col-md-4">宠物交易</a></div>
            </div>
            <div class="col-md-2 table-bordered">
            	<div class="col-md-5">
                	<i class=" icon-shopping-cart"></i>
                    <p>易物</p>
                    </div>
                <div><a href="#" target="_blank">物尽其用</a></div>
                <div><a href="#" target="_blank">鱼鱼集市</a></div>
            </div>
            <div class="col-md-2 table-bordered">
            	<div class="col-md-5">
                	<i class=" icon-bar-chart"></i>
                    <p> 车辆</p>
                </div>
                <div><a href="#" target="_blank">二手车交易</a></div>
                <div><a href="#" target="_blank">车辆租赁</a></div>
            </div>
            <div class="col-md-2 table-bordered">
            	<div class="col-md-5">
                	<i class=" icon-suitcase"></i>
                    <p>人才 </p>
                </div>
                <div><a href="#" target="_blank">求职招聘</a></div>
                <div><a href="#" target="_blank">教育培训</a></div>
            </div>
            <div class="col-md-2 table-bordered">
            	<div class="col-md-5">
                     <i class="icon-key"></i>
                     <p> 服务</p>
                </div>
                <div><a href="#" target="_blank">生活服务</a></div>
                <div><a href="#" target="_blank">商务服务</a></div>
            </div>
        </div>
    </div> 
    <!--面包屑导航-->
    <ol class="breadcrumb">
    	<li><a href="#">厦门小鱼网</a></li>
        <li class="active"><a href="#">分类信息</a></li>
        
    </ol>
    <!--搜索栏--> 
    <div class="panel">
        <div class="panel-body"  >
        	<div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-search"></i></span>
                    <input type="text" class="form-control" placeholder="请输入">
                    <span class="input-group-btn"><input type="button" class="btn btn-default" value="搜索"></span>
                </div>
            </div>
            <div class="col-md-4">
            	<span class="text-info" style="line-height:35px;">
                	热门：<a href="#">空调</a> <a href="#">电脑</a> <a href="#">沙发</a> <a href="#">冰箱</a> <a href="#">兼职</a>
                </span>
            </div>
            <div class="btn-group pull-right">
            	<a href="#" class="btn btn-success"><i class="icon-book"></i> 免费发布信息</a>
                <a href="#" class="btn btn-default">管理我的信息</a>
            </div>
        </div>   
    </div> 
    <!--分类主版-->  
    <div class="panel">
        <div class="panel-body" id="series" >
            <ul class=" list-unstyled col-md-3">
                <li><h3> <a href="#" target="_blank" >房产租售</a> <span class="small">今日332</span></h3></li>
                <li class="col-md-6" ><a href="#" target="_blank">房屋出租</a></li>
                <li class="col-md-6" ><a href="#">二手房出售</a></li>
                <li class="col-md-6" ><a href="#" target="_blank">商铺出租</a></li>
                <li class="col-md-6" ><a href="#" target="_blank">商铺出售</a></li>
                <li class="col-md-6" ><a href="#" target="_blank">写字楼出租</a></li>
                <li class="col-md-6" ><a href="#" target="_blank">写字楼出售</a></li>
                <li><a href="#" target="_blank">房屋合租</a></li>
                <li><a href="#" target="_blank">楼盘大本营</a></li>
                <li><a href="#" target="_blank">车位/厂房/仓库/土地出租</a></li>
                <li><a href="#" target="_blank">车位/厂房/仓库/土地出售</a></li>
                <li><h3> <a href="#" target="_blank" >教育培训</a> <span class="small">今日132</span></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">家教</a></li>
                <li class="col-md-6"><a href="#" target="_blank">外语培训</a></li>
                <li class="col-md-6"><a href="#" target="_blank">it培训</a></li>
                <li class="col-md-6"><a href="#" target="_blank">留学移民</a></li>
                <li class="col-md-6"><a href="#" target="_blank">学历教育</a></li>
                <li class="col-md-6"><a href="#" target="_blank">婴幼儿教育</a></li>
                <li class="col-md-6"><a href="#" target="_blank">职业技能培训</a></li>
                <li class="col-md-6"><a href="#" target="_blank">管理/MBA</a></li>
                <li><a href="#" target="_blank">其他培训</a></li>
            </ul>
           
            <ul class=" list-unstyled col-md-3">
                <li><h3><a href="#" target="_blank">物尽其用</a> <span class="small">今日3032</span></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">闲置转让</a></li>
                <li class="col-md-6"><a href="#" target="_blank">求购物品</a></li>
                <li class="col-md-6"><a href="#" target="_blank">以物易物</a></li>
                <li class="col-md-6"><a href="#" target="_blank">无偿赠送</a></li>
                <li class="col-md-6"><a href="#" target="_blank">交易纠纷</a></li>
                <li class="col-md-6"><a href="#" target="_blank">宠物交易</a></li>
                
                <li><h3><a href="#" target="_blank">生活服务</a> <span class="small">今日392</span2></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">搬家</a></li>
                <li class="col-md-6"><a href="#" target="_blank">保洁</a></li>
                <li class="col-md-6"><a href="#" target="_blank">家政</a></li>
                <li class="col-md-6"><a href="#" target="_blank">回收</a></li>
                <li class="col-md-6"><a href="#" target="_blank">设备租赁</a></li>
                <li class="col-md-6"><a href="#" target="_blank">疏通</a></li>
                <li class="col-md-6"><a href="#" target="_blank">食品</a></li>
                <li class="col-md-6"><a href="#" target="_blank">维修</a></li>
                <li class="col-md-6"><a href="#" target="_blank">医疗</a></li>
                <li class="col-md-6"><a href="#" target="_blank">公共服务</a></li>
                <li class="col-md-6"><a href="#" target="_blank">园林绿化</a></li>
                <li class="col-md-6"><a href="#" target="_blank">其他</a></li>
                <li><h3><a href="#" target="_blank">车辆服务</a> <span class="small">今日39</span></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">二手车交易</a></li>
                <li class="col-md-6"><a href="#" target="_blank">厦门拼车</a></li>
                <li><a href="#" target="_blank">车辆租赁</a></li>
            </ul>
    
            <ul class=" list-unstyled col-md-3">
                <li><h3><a href="#" target="_blank">鱼鱼集市</a> <span class="small">今日31</span></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">服饰</a></li>
                <li class="col-md-6"><a href="#" target="_blank">数码通讯</a></li>
                <li class="col-md-6"><a href="#" target="_blank">美食特产</a></li>
                <li class="col-md-6"><a href="#" target="_blank">美容美体</a></li>
                <li class="col-md-6"><a href="#" target="_blank">家居生活</a></li>
                <li class="col-md-6"><a href="#" target="_blank">母婴</a></li>
                <li ><a href="#" target="_blank">休闲生活</a></li>
                <li><h3><a href="#" target="_blank">商务服务</a> <span class="small">今日157</span></h3></li>
                <li class="col-md-6"><a href="#" target="_blank">合作创业</a></li>
                <li class="col-md-6"><a href="#" target="_blank">招商加盟</a></li>
                <li class="col-md-6"><a href="#" target="_blank">财务会计/评估</a></li>
                <li class="col-md-6"><a href="#" target="_blank">设计服务</a></li>
                <li class="col-md-6"><a href="#" target="_blank">广告策划</a></li>
                <li class="col-md-6"><a href="#" target="_blank">商标专利</a></li>
                <li class="col-md-6"><a href="#" target="_blank">工商注册</a></li>
                <li class="col-md-6"><a href="#" target="_blank">物流货运</a></li>
                <li class="col-md-6"><a href="#" target="_blank">网站建设/推广</a></li>
                <li class="col-md-6"><a href="#" target="_blank">主机域名</a></li>
                <li class="col-md-6"><a href="#" target="_blank">礼品定制</a></li>
                <li class="col-md-6"><a href="#" target="_blank">法律服务</a></li>
                <li class="col-md-6"><a href="#" target="_blank">快递</a></li>
                <li class="col-md-6"><a href="#" target="_blank">项目转让</a></li>
                <li class="col-md-6"><a href="#" target="_blank">投资理财</a></li>
                <li class="col-md-6"><a href="#" target="_blank">汽车服务</a></li>
                <li><a href="#" target="_blank">其他</a></li>
            </ul>
          
            <ul class=" list-unstyled col-md-3">
                <li><h3><a href="#" target="_blank">求职招聘</a> <span class="small">今日1313</span></h3></li>
                <li><a href="#" target="_blank">互联网/计算机/通信</a></li>
                <li><a href="#" target="_blank">销售/客服/技术支持</a></li>
                <li><a href="#" target="_blank">会计/金融/银行/保险</a></li>
                <li><a href="#" target="_blank">生产/营运/采购/物流</a></li>
                <li><a href="#" target="_blank">生物/制药/医疗/护理</a></li>
                <li><a href="#" target="_blank">广告/市场/媒体/艺术</a></li>
                <li><a href="#" target="_blank">人事/行政/高级管理</a></li>
                <li><a href="#" target="_blank">咨询/法律/教育/科研</a></li>
                <li><a href="#" target="_blank">政府/翻译/其他</a></li>
                <li><a href="#" target="_blank">家教/保姆/兼职/其他</a></li>
                <li><a href="#" target="_blank">建筑/房地产</a></li>
                <li><a href="#" target="_blank">服务业</a></li>
            </ul>
      </div>   
    </div> 
     <!--常用服务-->  
    <div class="panel">
        <div class="panel-body"  >
           <h4><strong>常用服务</strong></h4>
           <div style="padding-left:20px;" >
               <a href="#" class="btn btn-default"> 同城活动</a>   
               <a href="#" class="btn btn-default"> 鱼网情深</a>
               <a href="#" class="btn btn-default"> 小鱼百宝箱</a>
               <a href="#" class="btn btn-default">  公益</a>
               <a href="#" class="btn btn-default"> 小鱼卡</a>
           </div>
        </div>   
    </div> 
</div>      

<!--网站页脚-->
<div class="panel-body">
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