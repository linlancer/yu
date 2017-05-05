<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小鱼网</title>
<script src="../jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
</head>
<style>
body {font-family: 'microsoft yahei' ,Arial,sans-serif;}

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
                <li ><a href="#">社区</a></li>
                <li ><a href="#">分类</a></li>
                <li ><a href="#">手机</a></li>
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

<div class="panel-footer navbar-fixed-bottom">
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