<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/meitu_login.css" />
  <style>
    .stage{
      position:fixed;
      left:0;top:0;
      width:100%;
      height:100%;
      background:transparent;
    }
  </style>
 </head>
 <body>
  <canvas class="stage"></canvas>
  <!-- header -->
  <div id="header">
    <div>
      <div class="img lf">
        <a href="meitu_load" target="_blank">
         <img src="/Angelababy/Public/images/logo.png" class="lf">
        </a>
      </div>
      <div class="header_right rt">
				<ul>
					<li class="login">
						<a href="/Angelababy/login/login">登录</a>&nbsp; |&nbsp;
						<a href="/Angelababy/register/register">注册</a>
					</li>
				</ul>
			</div>
    </div>
  </div>
  <!-- section -->
  <div id="section">
    <div class="biaodan">
      <div class="lf">
        <img src="/Angelababy/Public/images/pic_login.jpg">
      </div>
      <form id="login_form">
        <div class="rt">
          <span>美图账号登录</span>
          <ul>
            <li>
              <input type="text" placeholder="手机号码" id="uname" name="uname" maxlength="11">
              <b></b>
            </li>
            <li>
              <input type="password" placeholder="密码" id="upwd" name="upwd">
              <b></b>
            </li>
            <li>
             <input type="checkbox" id="agree">
              <label for="agree">两周内自动登录</label>
              <a href="#" class="rt">忘记密码?</a>
            </li>
            <li>
              <input type="button" value="登录" class="denglu" id="btn">
            </li>
            <li>
              或使用其他方式登录:
              <img src="/Angelababy/Public/images/icon_thirdparty.png">
            </li>
            <li>
              还没有美图账号?<a href="register.html">立即注册</a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
  <div id="footer">
      ©2016 Meitu, Inc. 美图公司版权所有 闽B2-20040192
  </div>
  <script src="/Angelababy/Public/js/jquery-1.11.3.js"></script>
  <script src="/Angelababy/Public/js/login.js"></script>
 </body>
</html>