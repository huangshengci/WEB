<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>M6</title>
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/m6.css" />
 </head>
 <body>
  <!-- header -->
  <!-- nav -->
  <!-- <script src="js/header.js"></script> -->
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

  <!-- banner -->
  <div id="banner">
    <div>
      <a href="index.html" target="_blank">
        <img src="/Angelababy/Public/images/logo.png-v=20160601.png"/>
      </a>
      <ul class="rt">
        <li><a href="#" class="bg home">美图M6</a></li>
        <li><a href="#">相关视频</a></li>
        <li><a href="#">高清图集</a></li>
        <li><a href="#">详细参数</a></li>
        <li><a href="#">选购配件</a></li>
        <li class="no"><a href="#">S码通道</a></li>
        <li class="no"><a href="M6buycar.html" target="_blank" class="nono">立即抢购</a></li>
      </ul>
    </div>
    <div class="banner_middle">
      <div>
        <h2>标准版：¥2399 &nbsp;&nbsp;|&nbsp;&nbsp; Hello Kitty特别版：¥2599</h2>
        <a href="M6buycar.html" target="_blank">立即抢购</a>
      </div>
    </div>
    <div class="zhe">
      <div>
        <video src="/Angelababy/Public/images/beauty_camera.mp4" width="900" controls id="video"></video>
        <span>关闭视频</span>
        <img src="/Angelababy/Public/images/pause.png">
      </div>
    </div>
    <div class="banner_down">
      <div>
        <h1 class="lf">美图M6相关视频：</h1>
        <a href="#" class="rt">更多视频</a>
        <ul>
          <li>
            <i><b></b></i>
            <a href="#">
              <img src="/Angelababy/Public/images/video-pic1.jpg-v=20160608.jpg"/>
            </a><br />
            美图拍照手机广告
          </li>
          <li>
            <i><b></b></i>
            <a href="#">
              <img src="/Angelababy/Public/images/video-pic2.jpg-v=20160608.jpg"/>
            </a><br />
            美图拍照手机微电影
          </li>
          <li>
            <i><b></b></i>
            <a href="#">
              <img src="/Angelababy/Public/images/video-pic3.jpg-v=20160608.jpg"/>
            </a><br />
            美图拍照手机广告(强迫症篇)
          </li>
          <li>
            <i><b></b></i>
            <a href="#">
              <img src="/Angelababy/Public/images/video-pic4.jpg-v=20160608.jpg"/>
            </a><br />
            美图M6产品介绍(设计篇)
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- section -->
  <div id="section">
    <div class="bg1">
      <div>
        <p class="left">
          不管是运动中的抓拍，还是昏暗灯光下的自拍，美图M6都能够让我的自拍有杂志大片感。<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg2">
      <div>
        <h1>前置2100万像素摄像头，继续引领自拍风潮。</h1>
        <span class="top">
          美图M6配置了2100万像素的索尼前置摄像头，搭配独立的索喜（原富士通）Milbeaut图像处理器。它拥有更快的对焦、出色的色彩还原、高像素的成像、更好的美颜，让手机也能拍出电影画质级自拍。
        </span>
        <img src="/Angelababy/Public/images/b-aside.png-v=20160601.png"/>
        <ul class="spe">
          <li class="no">6P镜头</li>
          <li>前置2100万像素<b>索尼sensor</b>
          </li>
          <li>Milbeaut图像处理器</li>
          <li>真八核处理器<b>Helio P10</b></li>
        </ul>
      </div>
    </div>
    <div class="bg3">
      <div>
        <p class="right">
          美图M6的后置2100万像素经得起放大，直接冲印照片都非常清晰！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg4">
      <div>
        <h1>后置2100万像素摄像头，更快的对焦速度。</h1>
        <span class="top">
          美图M6拥有2100万像素的索尼后置摄像头，让你即使放大照片也不会丢失任何细节。多样化的后置拍摄模式，不需任何图像处理就可直接进行冲印，照片色彩绚丽鲜活，细节清晰细腻。
        </span>
        <ul class="nor">
          <li><i class="li_bg1"></i>HDR细节增强</li>
          <li><i class="li_bg2"></i>全景拍摄模式</li>
          <li><i class="li_bg3"></i>延时摄影</li>
          <li><i class="li_bg4"></i>慢动作视频</li>
        </ul>
        <img src="/Angelababy/Public/images/c-aside-phone.png-v=20160617.png"/>

      </div>
    </div>
    <div class="bg5">
      <div>
        <p class="left">
          美图M6不光拍照美美哒，连视频直播也是美美哒！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg6">
      <div>
        <h1>视频美颜和照片美颜，8年专业美颜黑科技。</h1>
        <span class="top">
          从2008年开始，美图一直致力于研究人像美颜技术，从美图秀秀、美颜相机到美图手机，10亿用户的大数据收 集，800人专业团队的研究，造就了美图M6专业的美颜黑科技，基于用户反馈不断优化调整的美颜细节，让你呈现自然的美颜效果。
        </span>
        <ul class="spe">
          <li class="no">8年<b>美颜积累</b></li>
          <li>10亿<b>用户反馈</b></li>
          <li>800人<b>专业团队</b></li>
        </ul>
        <img src="/Angelababy/Public/images/d-aside-phone.png-v=20160608.png"/>
      </div>
    </div>
    <div class="bg7">
      <div>
        <p class="right">
          不管是舒缓的轻音乐，还是BIGBANG的演唱会Live，美图M6的音效让我非常震撼，就像自己在现场听的一样！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg8">
      <div>
        <div>
          <h1>发烧级Hi-Fi音效，<br />来自独立音乐芯片。</h1>
          <span class="top">
            美图M6配备了独立的音乐芯片，辅以国际知名的Waves音效处理算法。硬件和软件音效的调试，打造出听觉上的Hi-Fi体验。基于手持通话的降噪处理，即使在吵闹的夜场，也能和对方清晰通话。
          </span>
          <ul class="nor">
            <li><i class="li_bg5"></i><br />独立音乐芯片</li>
            <li><i class="li_bg6"></i><br />Hi-Fi</li>
            <li><i class="li_bg7"></i><br />Waves音效</li>
            <li><i class="li_bg8"></i><br />手机通话降噪</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg9">
      <div>
        <p class="right">
          美图M6移动、电信、联通的卡都可以用哦，而且4G上网速度也很快，看美拍，打游戏都很爽！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg10">
      <div>
        <div class="left1">
          <h1>4G + 全网通，<br />全面支持三大运营商。</h1>
          <span class="top">
            美图M6全面支持中国移动、中国电信、中国联通4G网络，新一代4G+技术，下行峰值高达300Mbps，让你不管是刷朋友圈、看视频、发美拍、玩游戏，还是下载应用，都能畅快享受！
          </span>
          <ul class="nor">
            <li><i class="li_bg9"></i><br />中国移动</li>
            <li><i class="li_bg10"></i><br />中国电信</li>
            <li><i class="li_bg11"></i><br />中国联通</li>
          </ul>
          <p class="down"><b>300Mbps</b><br />（理想状态下载速度峰值）</p>
        </div>
        <img class="rt" src="/Angelababy/Public/images/f-aside-phone.png-v=20160601.png"/>
      </div>
    </div>
    <div class="bg11">
      <div>
        <p class="left">
          美图M6真是太懂女孩了，不仅有常见的指纹解锁，还有私密相册的指纹开启，再也不用担心别人偷看相册看到自己的糗照了。<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg12">
      <div>
        <div class="right1">
          <h1>指纹识别技术，<br />让手机数据更私密。</h1>
          <span class="top">
            美图M6正面加入了按压式的指纹识别模块，专业灵敏的安全软件算法，让你可以通过自己的指纹，轻而易举的解锁手机并完成一系列的网络支付。同时创新性的加入了私密相册的指纹解锁功能，让你的图片信息更安全、更隐私。
          </span>
          <ul class="nor">
            <li><i class="li_bg12"></i><br />私密相册</li>
            <li><i class="li_bg13"></i><br />安全支付</li>
            <li><i class="li_bg14"></i><br />安全解锁</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg13">
      <div>
        <p class="right">
          看视频很快，玩游戏很快，拍照很快，充电也很快，美图M6的一切都快得让我觉得不可思议！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg14">
      <div>
        <h1>超级硬件配置，更快、更流畅。</h1>
        <span class="top_2">
          美图M6拥有3GB RAM + 64GB ROM的超大内存，搭配真八核处理器，同时运行多个程序都毫无压力，省去了频繁清理内存和关闭程序的麻烦；5.0英寸的三星AMOLED全高清屏幕，不管是玩游戏还是看视频，都有身临其境的视觉体验；全新的快充2A技术，再不用经历漫长的充电等待。
        </span>
        <ul class="spe">
          <li class="no">3GB<b>RAM</b></li>
          <li>64GB<b>ROM</b></li>
          <li>5.0英寸<b>显示屏</b></li>
          <li>1080P<b>分辨率</b></li>
          <li>441<b>PPI</b></li>
          <li>快充2A</li>
        </ul>
        <img src="/Angelababy/Public/images/h-aside-phone.png-v=20160606.png" class="let_down"/>
      </div>
    </div>
    <div class="bg15">
      <div>
        <p class="right">
          美图M6不仅是手机，更是潮品！手持握感非常棒，那么大的屏幕女生单手也能很好操作。<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg16">
      <div>
        <h5>艺术级外观设计，双曲面玻璃。</h5>
      </div>
    </div>
    <div class="bg17">
      <div>
        <h4>艺术级外观设计，双曲面玻璃。</h4>
        <span class="top">
          美图M6延续美图产品一贯的“双V”设计，不同于千篇一律的手机产品，即使在人群中也能吸睛无数。大胆的双曲面玻璃，前卫的配色突破，细腻的全金属边框，让美图M6看上去更像是一件艺术品。背面的大弧面设计，5.0英寸大屏也能有舒适的手持握感，单手发信息，打电话，都非常方便快捷。
        </span>
        <ul class="spe">
          <li class="no">全金属边框</li>
          <li class="no">对称型设计</li>
          <li class="no">超大弧面玻璃</li>
        </ul>
      </div>
    </div>
    <div class="bg18">
      <div>
        <img src="/Angelababy/Public/images/j-left-phone.png-v=20160606.png" class="img_left lf"/>
        <img src="/Angelababy/Public/images/j-right-phone.png-v=20160601.png" class="img_right rt"/>
      </div>
      <div>
        <h2>Hello Kitty特别版<br />六大特别之处</h2>
        <ul class="spe">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="no">双颜色版</li>
          <li class="no">正版授权</li><br />
          &nbsp;&nbsp;&nbsp;<li class="no">主题桌面</li>
          <li class="no">萌动外观</li><br />
          <li class="no">华丽包装</li>
          <li class="no">收藏证书</li>
        </ul>

      </div>
    </div>
    <div class="bg19">
      <div>
        <p class="left">
          美图M6的界面很cool，而且不用研究说明书也能轻松上手操作。并且超省电，打电话一个小时只耗掉了3%的电量！<br /><br />
            &nbsp;&nbsp;—— Angelababy（杨颖）
        </p>
      </div>
    </div>
    <div class="bg20">
      <div>
        <div class="left1">
          <h1>全新 &nbsp;<i class="li_bg15"></i>，<br />流畅、省电、易用。</h1>
          <span class="top_3">
            美图M6同时带来了全新的MEIOS3，它拥有更潮的界面设计，更流畅的交互体验，一用就会的系统操作，以及更稳定，更节能的手机性能优化。同时提供云端备份还原，让你能够实现一键换机，轻松上手无压力！
          </span>
          <ul class="nor">
            <li><i class="li_bg16"></i><br />未来设计</li>
            <li><i class="li_bg17"></i><br />环保节能</li>
            <li><i class="li_bg18"></i><br />流畅交互</li>
          </ul>
        </div>
        <img class="rt" src="/Angelababy/Public/images/k-aside-right.png-v=20160610.png"/>
      </div>
    </div>
  </div>
  <!-- section_down -->
  <div id="section_down">
    <div>
      <ul>
        <li>
          <a href="#"><img src="/Angelababy/Public/images/addtion1.jpg"/><h6>配件专区</h6><s></s></a>
        </li>
        <li><a href="#"><img src="/Angelababy/Public/images/addtion2.jpg"/><h6>相关视频</h6><s></s></a></li>
        <li><a href="#"><img src="/Angelababy/Public/images/addtion3.jpg"/><h6>高清图集</h6><s></s></a></li>
      </ul>
    </div>
  </div>
  <!-- footer -->
  <!-- down -->
  <!-- <script src="js/footer.js"></script> -->
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
  <div id="goTop"></div>
  <script src="/Angelababy/Public/js/M6.js"></script>
 </body>
</html>