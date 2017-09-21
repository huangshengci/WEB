<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Angelababy</title>
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/index.css">
 </head>
 <body>
  <!-- header -->
  <!-- nav -->
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

  <!-- <script src="/Angelababy/Public/js/header.js"></script> -->
  <!-- banner -->
  <div id="banner">
    <div id="slider">
      <ul class="clear" id="imgs">
        
      </ul>
      <ul id="indexs">
        
      </ul>
      <div class="banner_left">
        <ul>
          <li class="top_special"
          onmouseover="document.getElementById('banner_tanchu1').style.visibility='visible'" 
          onmouseout="document.getElementById('banner_tanchu1').style.visibility='hidden'">
            <b>手机</b><br />
            <a href="#">美图M6</a>&nbsp;&nbsp;&nbsp;
            <a href="#">美图V4s</a>
          </li>
          <li class="top_special"
          onmouseover="document.getElementById('banner_tanchu2').style.visibility='visible'" 
          onmouseout="document.getElementById('banner_tanchu2').style.visibility='hidden'">
            <b>相机</b><br />
            <a href="bf1.html" target="_blank">美图BF1</a>
          </li>
          <li class="top_special"
          onmouseover="document.getElementById('banner_tanchu3').style.visibility='visible'" 
          onmouseout="document.getElementById('banner_tanchu3').style.visibility='hidden'">
            <b>常规配件</b><br />
            <a href="#">贴膜</a>&nbsp;&nbsp;&nbsp;
            <a href="#">耳机</a>&nbsp;&nbsp;&nbsp;
            <a href="#">手机壳</a>&nbsp;&nbsp;&nbsp;
            <a href="#">电池</a>
          </li>
          <li class="top_special"
          onmouseover="document.getElementById('banner_tanchu4').style.visibility='visible'" 
          onmouseout="document.getElementById('banner_tanchu4').style.visibility='hidden'">
            <b>拍摄配件</b><br />
            <a href="#">自拍架</a>&nbsp;&nbsp;&nbsp;
            <a href="#">遥控器</a>&nbsp;&nbsp;&nbsp;
            <a href="#">补光灯</a>
          </li>
         <li class="top_special"
          onmouseover="document.getElementById('banner_tanchu5').style.visibility='visible'" 
          onmouseout="document.getElementById('banner_tanchu5').style.visibility='hidden'">
            <b>生活方式</b><br />
            <a href="#">生活周边</a>&nbsp;&nbsp;&nbsp;
            <a href="#">T恤</a>
          </li>
          <li><b>企业团购</b><br /></li>
          <li><b>线下体验店</b><br /></li>
        </ul>
      </div>
      <div class="axiba">
        <div class="banner_tanchu" id="banner_tanchu1">
          <ul>
            <li>
              <img src="/Angelababy/Public/images/575692160a7c882237.jpg!thumb220.jpg"> 
              <a href="#">美图M6</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/5756a4257695257481.jpg!thumb220.jpg"> 
              <a href="#">美图V4s</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/57a7ec157bbcc60544.jpg!thumb220.jpg"> 
              <a href="#">美图M6(月光白)</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/57a7ec1a861e266358.jpg"> 
              <a href="#">美图M6(樱花粉)</a>
            </li>
          </ul>
        </div>
        <div class="banner_tanchu" id="banner_tanchu2">
          <ul>
            <li>
              <img src="/Angelababy/Public/images/564acb7e6cf8474119.jpg!thumb220.jpg"> 
              <a href="bf1.html" target="_blank">美图BF1</a>
            </li>
          </ul>
        </div>
        <div class="banner_tanchu" id="banner_tanchu3">
          <ul>
            <li>
              <img src="/Angelababy/Public/images/5795a7a49ed5238759.jpg!thumb220.jpg"> 
              <a href="#">美图M6数据线</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/561e03a60e3cb47662.jpg!thumb220.jpg"> 
              <a href="#">美图专属耳机</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/56a1c5610604b12775.jpg!thumb220.jpg"> 
              <a href="#">美图真皮保护套</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/5621b24e25e6248824.jpg!thumb220.jpg"> 
              <a href="#">Meitu MLGB潮牌</a>
            </li>
          </ul>
        </div>
        <div class="banner_tanchu" id="banner_tanchu4">
          <ul>
            <li>
              <img src="/Angelababy/Public/images/5637446e2d5ee67837.jpg"> 
              <a href="#">美图遥控器二代</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/570c92e64879a59695.jpg!thumb220.jpg"> 
              <a href="#">美图旋转支架</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/56374099cdb9d66161.jpg!thumb220.jpg"> 
              <a href="#">美图自拍补光灯</a>
            </li>
          </ul>
        </div>
        <div class="banner_tanchu" id="banner_tanchu5">
          <ul>
            <li>
              <img src="/Angelababy/Public/images/5735403d0846721870.jpg!thumb220.jpg"> 
              <a href="#">MeituFamily</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/54365f91e130911892.jpg"> 
              <a href="#">MeituMirror</a>
            </li>
            <li>
              <img src="/Angelababy/Public/images/546d95ada3e2084497.jpg"> 
              <a href="#">MLGB抱枕</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner_bottom -->
  <div id="banner_bottom">
    <ul>
      <li>
        <a href="#">
          <img src="/Angelababy/Public/images/577b6c126884c98714.jpg" title="大牌明星">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/Angelababy/Public/images/576263b788bec69039.jpg" title="线下">
        </a>
      </li>
      <li class="no">
        <a href="#">
          <img src="/Angelababy/Public/images/57ba9c0ec94f532807.jpg" title="MF">
        </a>
      </li>
    </ul>
  </div>
  <!-- section -->
  <div id="section">
    <div>
      <div class="section_child_top clear"><h1 class="lf">手机</h1><a href="#" class="rt">更多&gt;</a></div>
      <div class="section_child_top">
        <ul class="section_child_middle">
          <li class="section_special">
            <img src="/Angelababy/Public/images/575d09b78457490925.jpg" title="M6">
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/575692160a7c882237.jpg!thumb220.jpg" title="美图M6">
            </a><br>
            <b>美图M6</b><br>
            <span>自拍大明星</span>
            <h3>￥2399</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5756a4257695257481.jpg!thumb220.jpg" title="美图V4s">
            </a><br>
            <b>美图V4s</b><br>
            <span>自拍旗舰</span>
            <h3>￥3499</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/578c93155055245327.jpg!thumb220.jpg" title="美图V4s">
            </a><br>
            <b>美图V4s雅致版</b><br>
            <span>自拍旗舰</span>
            <h3>￥4399</h3>
          </li>
          <li class="section_special_right">
            <a href="#">
              <img src="/Angelababy/Public/images/57a7ec157bbcc60544.jpg!thumb220.jpg" title="美图(特别版 月光白)">
            </a><br>
            <b>美图M6(特别版 月光白)</b><br>
            <span>Hello Kitty特别版</span>
            <h3>￥2599</h3>
          </li>
        </ul>
      </div>  
    </div>
    <div>
      <div class="section_child_top clear"><h1 class="lf">配件</h1><a href="#" class="rt">更多&gt;</a></div>
      <div class="section_child_top">
        <ul class="section_child_middle">
          <li class="section_special  down_border">
            <img src="/Angelababy/Public/images/563745f67f45545765.jpg">
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5795a7a49ed5238759.jpg!thumb220.jpg" title="美图M6手机数据线">
            </a><br>
            <b>美图M6手机数据线</b><br>
            <span>原装正品,品质保证</span>
            <h3>￥39</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/57a7ed6d65ca628543.jpg!thumb220.jpg" 
              title="美图V4s高透手机壳">
            </a><br>
            <b>美图V4s高透手机壳</b><br>
            <span>减震防摔,保护手机</span>
            <h3>￥49</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/57a06a2a9621c72275.jpg!thumb220.jpg" title="美图M6 3D屏幕保护膜">
            </a><br>
            <b>美图M6 3D屏幕保护膜</b><br>
            <span>3D全屏覆盖,无缝隙完美贴合</span>
            <h3>￥19.9</h3>
          </li>
          <li class="section_special_right">
            <a href="#">
              <img src="/Angelababy/Public/images/56d80b511c3ce57438.jpg!thumb220.jpg" title="美图V4/V4s/M6电源适配器">
            </a><br>
            <b>美图V4/V4s/M6电源适配器</b><br>
            <span>简约设计,快速充电</span>
            <h3>￥29</h3>
          </li>
        </ul>
      </div>
      <div class="section_child_top">
        <ul class="section_child_middle">
          <li class="section_special">
            <img src="/Angelababy/Public/images/577f007c56ea942623.jpg">
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/561e03a60e3cb47662.jpg!thumb220.jpg" title="美图手机专属耳机">
            </a><br>
            <b>美图手机专属耳机</b><br>
            <span>美图专属耳机</span>
            <h3>￥79</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/56efc9c440cbd49231.jpg!thumb220.jpg" 
              title="美图V4/V4s钢化玻璃膜">
            </a><br>
            <b>美图V4/V4s钢化玻璃膜</b><br>
            <span>原装正品,品质保证</span>
            <h3>￥49</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/56a1c5610604b12775.jpg!thumb220.jpg" title="美图手机真皮保护套">
            </a><br>
            <b>美图手机真皮保护套</b><br>
            <span>皮套材质,抽取式设计</span>
            <h3>￥129</h3>
          </li>
          <li class="section_special_right">
            <a href="#">
              <img src="/Angelababy/Public/images/56374099cdb9d66161.jpg!thumb220.jpg" title="美图自拍补光灯">
            </a><br>
            <b>美图自拍补光灯</b><br>
            <span>再也不怕夜拍</span>
            <h3>￥99</h3>
          </li>
        </ul>
      </div>  
    </div>
    <div>
      <div class="section_child_top clear"><h1 class="lf">生活方式</h1><a href="#" class="rt">更多&gt;</a></div>
      <div class="section_child_top">
        <ul class="section_child_middle">
          <li class="section_special down_border">
            <img src="/Angelababy/Public/images/572dd7f1e9cd873807.jpg">
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5735400e523ca84322.jpg!thumb220.jpg" title="MeituFamily X MLGB 夏日潮TEE(闪兔成人款S)">
            </a><br>
            <b>MeituFamily X MLGB </b><br>
            <span>夏日潮Tee</span>
            <h3>￥198</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5735403d0846721870.jpg!thumb220.jpg" 
              title="MeituFamily X MLGB 夏日潮TEE(机车熊儿童款120CM)">
            </a><br>
            <b>MeituFamily X MLGB 儿童款</b><br>
            <span>夏日潮Tee儿童款</span>
            <h3>￥139</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/57999e60595cc76713.jpg!thumb220.jpg" title="MeituFamily雨伞">
            </a><br>
            <b>MeituFamily雨伞</b><br>
            <span>雨天也拉风</span>
            <h3>￥189</h3>
          </li>
          <li class="section_special_right">
            <a href="#">
              <img src="/Angelababy/Public/images/579f0829b30f234760.jpg!thumb220.jpg" title="MeituFamily笔记本">
            </a><br>
            <b>MeituFamily笔记本</b><br>
            <span>潮酷文具</span>
            <h3>￥209</h3>
          </li>
        </ul>
      </div>
      <div class="section_child_top">
        <ul class="section_child_middle">
          <li class="section_special">
            <img src="/Angelababy/Public/images/57abedd5de18716300.jpg">
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5791bd17030f814166.jpg!thumb220.jpg" title="MeituFamily小笼包鸡购物袋">
            </a><br>
            <b>MeituFamily小笼包鸡购物袋</b><br>
            <span>购物必备</span>
            <h3>￥99</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/57b57aef8494e47741.jpg!thumb220.jpg" 
              title="MeituFamily萌趣贴纸">
            </a><br>
            <b>MeituFamily萌趣贴纸</b><br>
            <span>萌趣贴纸</span>
            <h3>￥29</h3>
          </li>
          <li>
            <a href="#">
              <img src="/Angelababy/Public/images/5640736873a2c18944.jpg!thumb220.jpg" title="限量版美图公仔(许愿喵)">
            </a><br>
            <b>限量版美图公仔(许愿喵)</b><br>
            <span>许愿喵</span>
            <h3>￥59</h3>
          </li>
          <li class="section_special_right">
            <a href="#">
              <img src="/Angelababy/Public/images/5640735e3712687063.jpg!thumb220.jpg" title="限量版美图公仔(招财喵)">
            </a><br>
            <b>限量版美图公仔(招财喵)</b><br>
            <span>招财喵</span>
            <h3>￥59</h3>
          </li>
        </ul>
      </div>  
    </div>
    <div>
      <div class="section_child_top clear"><h1 class="lf">生活方式</h1><a href="#" class="rt">更多&gt;</a></div>
      <div class="go">
        <a class="lf">&lt;</a>
        <a class="rt">&gt;</a>
      </div>
      <div class="gundong">
        <ul>
          <li>
            <img src="/Angelababy/Public/images/56373fabc52f380458.png" title="美图秀秀"> <br> 
            <b>美图秀秀</b><br> 
            <span>中国最流行的图片处理软件</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373fa13b56c34127.png" title="美拍"> <br> 
            <b>美拍</b><br> 
            <span>高颜值手机直播<br>超火爆原创视频</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373fb8003cd56580.png" title="美颜相机"> <br> 
            <b>美颜相机</b><br> 
            <span>看见更美的自己</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373f338aecd36882.png" title="海报工厂"> <br> 
            <b>海报工厂</b><br> 
            <span>照片瞬间高大上</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373f0942efb91911.png" title="潮自拍"> <br> 
            <b>潮自拍</b><br> 
            <span>有电影质感的自拍神器</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373fca146c696076.png" title="美妆相机"> <br> 
            <b>美妆相机</b><br> 
            <span>效果最好的美妆神器</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373fdd10c0287862.png" title="万能相机"> <br> 
            <b>万能相机</b><br> 
            <span>你只需要一个相机App</span>
          </li>
          <li>
            <img src="/Angelababy/Public/images/56373ffa60d3c70098.png" title="柚子相机"> <br> 
            <b>柚子相机</b><br> 
            <span>人人都是摄影师</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer -->
  <!-- down -->
  <!-- article -->
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
 </body>
</html>