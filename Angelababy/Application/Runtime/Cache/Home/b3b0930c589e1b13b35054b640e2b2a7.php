<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>购物车</title>
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/buycar.css" />
 </head>
 <body>
  <!-- header -->
  <!-- nav -->
  <!-- <script src="/Angelababy/Public/js/header.js"></script> -->
  <link rel="stylesheet" href="/Angelababy/Public/css/all.css" />
<div id="header">
  <div class="clear">
    <div class="header_left lf">
      <ul>
        <li><a href="/Angelababy/index/index" target="_blank">美图官网</a></li>
        <li>
          <a href="#">App</a>
          <i></i>
          <ul class="height_1">
            <li><a href="#">美图秀秀</a></li>
            <li><a href="/Angelababy/meiyan/meiyan" target="_blank">美颜相机</a></li>
            <li><a href="#">美拍</a></li>
            <li><a href="#">了解更多产品</a></li>
          </ul>
        </li>
        <li>
          <a href="#">智能硬件</a>
          <i></i>
          <ul class="height_2">
            <li><a href="/Angelababy/index/index" target="_blank">美图拍照手机</a></li>
            <li><a href="/Angelababy/Bf1/Bf1" target="_blank">美图相机</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Select Region</a>
          <i></i>
          <ul class="height_2">
            <li><a href="#">Global Home</a></li>
            <li><a href="#">Hong Kong</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="header_right rt">
      <ul>
        <li class="login">
          <?php if($uname): ?><div class="lf">
              欢迎回来: <?php echo ($uname); ?>
              <i></i>
              <ul class="height_1">
                <li><a href="/Angelababy/usercenter/usercenter">个人中心</a></li>
                <li><a href="#">美图VIP</a></li>
                <li><a href="" id='btn_r'>退出登录</a></li>
              </ul>
            </div>
          <?php else: ?>
            <div class="lf">
              <a href="/Angelababy/login/login">登录</a>&nbsp; |&nbsp;
              <a href="/Angelababy/register/register">注册</a>
            <div><?php endif; ?>
        </li>
        <li><a href="#">S码通道</a></li>
        <li class="shopping">
          <a href="#"><i></i>购物车
            <span class='count'>
              <?php if($arr): echo (count($arr)); ?>
              <?php else: ?>
                0<?php endif; ?>
            </span>
          </a>
          <div>
            <?php if($arr): ?><ul class='hpro'>
                <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <img src="/Angelababy/Public/<?php echo ($vo["pic"]); ?>">
                    <span><?php echo (mb_substr($vo["pname"],0,6)); ?></span>
                    <span><?php echo ($vo["count"]); ?></span>
                    <b>￥<?php echo ($vo['price']*$vo['count']); ?></b>
                    <a class='del' href="<?php echo ($vo["did"]); ?>">&times;</a>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            <?php else: ?>
              <ul class='hpro'>
                购物车中还没有商品,<a href="/Angelababy/buycar/buycar">现在去挑选</a>
              </ul><?php endif; ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div id="nav">
  <div class="clear">
    <div class="img lf">
      <a href="/Angelababy/index/index" target="_blank">
       <img src="/Angelababy/Public/images/logo@2x.png-20151104.png" class="lf">
      </a>
      <b></b>
    </div>
    <div class="nav_left lf">
      <ul id="ul">
        <span id="span"></span>
        <li class="mov" onmouseover="document.getElementById('findme').style.visibility='visible'
        ,document.getElementById('findme').style.height='180px'
        ,document.getElementById('tu2').style.visibility='hidden'
        ,document.getElementById('tu3').style.visibility='hidden'"
        onmouseout="document.getElementById('findme').style.visibility='hidden'
        ,document.getElementById('findme').style.height='0px'
        ,document.getElementById('tu2').style.visibility='visible'
        ,document.getElementById('tu3').style.visibility='visible'">
          <a href="/Angelababy/index/index" target="_blank">手 机</a>
          <ul class="tanchu" id="tu1">
            <li>
              <a href="/Angelababy/M6/M6" target="_blank">
                <img src="/Angelababy/Public/images/575692160a7c882237.jpg!thumb220.jpg">
              </a>
              <span>美图M6</span>
            </li>
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/5756a4257695257481.jpg!thumb220.jpg">
              </a>
              <span>美图V4s</span>
            </li>
            <li>
              <a href="/Angelababy/M6/M6" target="_blank">
                <img src="/Angelababy/Public/images/57a7ec157bbcc60544.jpg!thumb220.jpg">
              </a>
              <span>美图M6(特别版 月光白)</span>
            </li>
            <li>
              <a href="/Angelababy/V6/V6" target="_blank">
                <img src="/Angelababy/Public/images/56679b68cdac460636.jpg!thumb220.jpg">
              </a>
              <span>美图V6</span>
            </li>
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/575693855737e81141.jpg!thumb220.jpg">
              </a>
              <span>美图M4s</span>
            </li>
          </ul>
        </li>
        <li class="mov" onmouseover="document.getElementById('findme').style.visibility='visible'
        ,document.getElementById('findme').style.height='180px'
        ,document.getElementById('tu1').style.visibility='hidden'
        ,document.getElementById('tu3').style.visibility='hidden'"
        onmouseout="document.getElementById('findme').style.visibility='hidden'
        ,document.getElementById('findme').style.height='0px'
        ,document.getElementById('tu1').style.visibility='visible'
        ,document.getElementById('tu3').style.visibility='visible'">
          <a href="/Angelababy/Bf1/Bf1" target="_blank">相 机</a>
          <ul class="tanchu zhongzhongzhong"  id="tu2">
            <li>
              <a href="/Angelababy/Bf1/Bf1" target="_blank">
                <img src="/Angelababy/Public/images/564acb7e6cf8474119.jpg!thumb220.jpg">
              </a>
              <span>美图BF1</span>
            </li>
          </ul>
        </li>
        <li class="mov" onmouseover="document.getElementById('findme').style.visibility='visible'
        ,document.getElementById('findme').style.height='180px'
        ,document.getElementById('tu1').style.visibility='hidden'
        ,document.getElementById('tu2').style.visibility='hidden'"
        onmouseout="document.getElementById('findme').style.visibility='hidden'
        ,document.getElementById('findme').style.height='0px'
        ,document.getElementById('tu1').style.visibility='visible'
        ,document.getElementById('tu2').style.visibility='visible'">
          <a href="/Angelababy/buycar/buycar">配 件</a>
          <ul class="tanchu zuozuozuo"  id="tu3">
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/56d80b511c3ce57438.jpg!thumb220.jpg">
              </a>
              <span>美图V4电源适配</span>
            </li>
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/56efc9c440cbd49231.jpg!thumb220.jpg">
              </a>
              <span>美图V4/V4s钢化玻璃贴膜</span>
            </li>
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/570c92e64879a59695.jpg!thumb220.jpg">
              </a>
              <span>美图V4/V4s 360度旋转支架</span>
            </li>
            <li>
              <a href="#">
                <img src="/Angelababy/Public/images/5621b24e25e6248824.jpg!thumb220.jpg">
              </a>
              <span>Meitu x MLGB潮牌手机壳</span>
            </li>
          </ul>
        </li>
        <li class="mov">
          <a href="#">服 务</a>
        </li>
        <li class="mov">
          <a href="#">福利社</a>
        </li>
      </ul>
    </div>
    <div class="nav_right rt">
      <input type="text" placeholder="美图M6" class="lf">
      <div></div>
    </div>
  </div>
  <div id="findme"></div>
</div>

  <!-- section -->
  <input type="hidden" value='<?php echo ($uname); ?>' id='loginName'/>
  <div id="section">
    <div>
      <div class='sec_top'>
        <ul>
          <li><a href="/Angelababy/Buycar/buycar">首页</a>&nbsp; </li>
          <li>&nbsp;><a href="#">&nbsp;&nbsp;配件</a>&nbsp;</li>
        </ul>
      </div>
      <div class="sec_middle" id='plist'>
        <ul>
          <!-- <li>
            <img src="images/57a9a8cf86cb727541.jpg!thumb220.jpg"/>
            <h4>气球恐龙绿帽子</h4>
            <h3>￥188</h3>
            <a href="#"><img src="images/pinkcar.png"/></a>
          </li> -->
          <?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <img src="/Angelababy/Public/<?php echo ($vo["pic"]); ?>"/>
              <h4><?php echo ($vo["pname"]); ?></h4>
              <h3>￥<?php echo ($vo["price"]); ?></h3>
              <a href="<?php echo ($vo["pid"]); ?>" class='addcart'><img src="/Angelababy/Public/images/pinkcar.png"/></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ol class="pager">
          <?php echo ($pageList); ?>
          <!--
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            -->
        </ol>
      </div>
    </div>
  </div>
  <!-- footer -->
  <!-- down -->
  <!-- article -->
  <div class="zhe">
    <div></div>
    <div>
      <h2></h2>
      <span>&times;</span>
    </div>
  </div>
  <!-- <script src="/Angelababy/Public/js/footer.js"></script> -->
  <div id="footer">
  <div id="footer_top">
    <ul class="bg">
      <li class="bg1">
        <i></i>
        <b>正品保障</b><br/>
        <span>放心安全付</span>
      </li>
      <li class="bg2">
        <i></i>
        <b>正品保障</b><br/>
        <span>放心安全付</span>
      </li>
      <li class="bg3">
        <i></i>
        <b>顺风高效物流</b><br/>
        <span>全国主要城市3天即达</span>
      </li>
      <li class="bg4">
        <i></i>
        <b>139家售后网点</b><br/>
        <span>139家售后网点遍布全国</span>
      </li>
    </ul>
  </div> 
  <div id="footer_down">
    <ul class="lf">
      <li><h3>美图手机</h3></li>
      <li><a href="M6.html" target="_blank">美图M6</a></li>
      <li><a href="#">美图V4s</a></li>
    </ul>
    <ul class="lf">
      <li><h3>购物指南</h3></li>
      <li><a href="#">订单相关</a></li>
      <li><a href="#">订单相关</a></li>
      <li><a href="#">购物常见问题</a></li>
      <li><a href="#">美图M6常见问题</a></li>
    </ul>
    <ul class="lf">
      <li><h3>配送方式</h3></li>
      <li><a href="#">配送说明</a></li>
      <li><a href="#">签收须知</a></li>
      <li><a href="#">配送常见问题</a></li>
    </ul>
    <ul class="lf">
      <li><h3>售后服务</h3></li>
      <li><a href="#">维修流程</a></li>
      <li><a href="#">退换货流程</a></li>
      <li><a href="#">售后服务政策</a></li>
      <li><a href="#">网点查询</a></li>
    </ul>
    <ul class="lf">
      <li><h3>关于美图</h3></li>
      <li><a href="#">美图公司简介</a></li>
      <li><a href="#">加入美图</a></li>
      <li><a href="#">联系我们</a></li>
      <li><a href="#">留言反馈</a></li>
    </ul>
    <ul class="lf">
      <li><h3>关注我们</h3></li>
      <li><a href="#">新浪微博</a></li>
      <li><a href="#">官方微信</a></li>
      <li><a href="#">美图动态</a></li>
    </ul>
    <ul class="lf big">
      <li><i></i><h2>400-990-9696</h2><span>周一至周日9:00-24:00</span></li>
      <li></li>
    </ul>
  </div>
</div>
<div id="down">
  <div class="down_top">
    <ul>
      <li>友情链接:&nbsp;</li>
      <li><a href="#">美图看看&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图贴贴&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图GIF&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图淘淘&nbsp;|&nbsp;</a></li>
      <li><a href="#">安卓游戏&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图游戏盒&nbsp;|&nbsp;</a></li>
      <li><a href="meiyan.html" target="_blank">美图相机助理&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图日记&nbsp;|&nbsp;</a></li>
      <li><a href="#">变美志&nbsp;&nbsp;</a></li>
      <li><a href="#">更多&nbsp;&nbsp;&gt;</a></li>
    </ul>
  </div>
  <div class="down_down">
    <a href="#"  class="lf"><img src="/Angelababy/Public/images/logo-single.png"/></a>
    <ul class="lf">
      <li><a href="index.html" target="_blank">美图官网&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图秀秀&nbsp;|&nbsp;</a></li>
      <li><a href="#">美拍&nbsp;|&nbsp;</a></li>
      <li><a href="#">美美小店&nbsp;|&nbsp;</a></li>
      <li><a href="Bf1.html" target="_blank">美颜相机&nbsp;|&nbsp;</a></li>
      <li><a href="#">美图天猫旗舰店&nbsp;&nbsp;</a></li><br />
      <li style="color:#A6A6A6;font-size:13px;">©2016 Meitu, Inc. 厦门美图网科技有限公司版权所有 闽B2-20040192</li>
    </ul>
    <div class="rt">
      <i class="bgi1"></i>
      <i class="bgi2"></i>
      <i class="bgi3"></i>
    </div>
  </div>
</div> 
<div id="article">
  <ul>
    <li class="article_bg1"><a href="#"></a></li>
    <li class="article_bg2"><a href="#"></a></li>
    <li class="article_bg3" id="article_bg3"><a ></a></li>
  </ul>
</div>
<script src="/Angelababy/Public/js/jquery-1.11.3.js"></script>
<script src="/Angelababy/Public/js/all.js"></script>
<script src="/Angelababy/Public/js/index.js"></script>
  <script src="/Angelababy/Public/js/buycar.js"></script>
 </body>
</html>