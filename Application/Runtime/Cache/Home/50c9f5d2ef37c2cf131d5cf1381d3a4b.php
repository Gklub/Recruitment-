<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Style-type" content="text/css"/>
    <title>我的求职中心</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/zhaoping/Public/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/zhaoping/Public/Admin/Css/Login/style.css">
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/zhaoping/Public/Common/Css/Head&Foot.css"/>
    <link rel="stylesheet" type="text/css" href="/zhaoping/Public/Common/Css/Person/personCenter_style.css"/>
</head>
<body>
<!-- header -->
<div id="header">
    <div class="row-1">
        <div class="slide">
        <img src="/zhaoping/Public/Common/Image/slide.jpg" alt="" />
        </div>
    </div>
    <div class="row-2">
        <div class="container">
            <!-- .nav -->
            <ul class="nav">
                <li class="first"><a href="/zhaoping/index.php/Home/Index/index" class="current">网站首页</a></li>
                <li><a href="/zhaoping/index.php/Home/College/college">学院简介</a></li>
                <li><a href="/zhaoping/index.php/Home/Article/articleList">公告公示</a></li>
                <li><a href="/zhaoping/index.php/Home/Position/positionCenter">招聘中心</a></li>
                <li><a href="/zhaoping/index.php/Home/Person/personCenter">会员中心</a></li>
            </ul>
            <!-- /.nav -->
        </div>
    </div>
</div>
<!-- content -->
<div class="ch-container" style="padding: 0 20px">
    <div class="row">
        <div class="row">
            <div class="col-md-12 center login-header">
                <h3 style="color: rgb(49,126,172)">会员登录</h3>
            </div>
            <!--/span-->
        </div><!--/row-->

        <div class="row">
            <div class="well col-md-5 center login-box">
                <div class="alert alert-info">
                    请输入用户名和密码.
                </div>
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="密码">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> 记住我</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="loginBtn">登录</button>
                    </p>
                    <p class="center col-md-5">
                        <a type="button" class="btn btn-primary btn-lg btn-block" id="registBtn" href="#register" data-toggle="modal">注册</a>
                    </p>
                </fieldset>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

    <div class="modal fade" id="register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">注册</h4>
                </div>
                <form action="/zhaoping/index.php/Home/Person/register" method="post" role="form" name="registerForm" onsubmit="return onSubmitCheck();">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="register_username" class="control-label">用户名</label>
                            <input type="text" class="form-control" id="register_username" name="register_username" placeholder="用户名">
                        </div>
                        <div class="form-group">
                            <label for="register_password" class="control-label">密码</label>
                            <input type="password" class="form-control" id="register_password" placeholder="密码">
                        </div>
                        <div class="form-group">
                            <label for="register_confirmPassword" class="control-label">确认密码</label>
                            <input type="password" class="form-control" id="register_confirmPassword" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="register_btn">注册</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!--/.fluid-container-->
<!-- footer -->
<div id="footer">
    <div class="container">
        <div class="indent" style="margin-left: 330px">
            Copyright &copy; 2014 &nbsp; &nbsp;All right reserved by bingo工作室
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/zhaoping/Public/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/zhaoping/Public/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#loginBtn").click(function(){
            if($("#username").val().length == 0){
                alert('请填写用户名');
                return false;
            }
            if($("#password").val().length == 0){
                alert('请填写密码');
                return false;
            }
            $.post("/zhaoping/index.php/Home/Login/loginCheck" ,{username:$("#username").val(),password:$("#password").val()},function(data,status){
                if(data['status'] == 1){
                    window.location.href = "/zhaoping/index.php/Home/Person/personCenter";
                }else{
                    alert(data['content']);
                }
            });
        });
        $('#register_btn').click(function(){
            if(($("#register_username").val().length == 0) || ($("#register_password").val().length == 0) || ($("#register_confirmPassword").val().length == 0)){
                alert('您还有项目未填写');
                return false;
            }
            if($("#register_password").val() != $("#register_confirmPassword").val()){
                alert('两次填写的密码不同');
                return false;
            }
            $.post("/zhaoping/index.php/Home/Person/register" ,{register_username:$("#register_username").val(),register_password:$("#register_password").val()},function(data,status){
                if(data){
                    alert('注册成功！');
                    $('#register').modal('hide')
                }else{
                    alert('注册失败，请稍后重试！');
                }
            });
        });
    });
</script>
</body>
</html>