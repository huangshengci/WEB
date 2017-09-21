//碎屏保弹出
$(".section_top_right>div>label>b").click(
  function(){
    $(".zhe").css("display","block");  
  }
);
//碎屏保隐藏
$(".zhe>div:last-child>h2>span").click(
  function(){
    $(".zhe").css("display","none");  
  }
);
//机型选择
$(".dl1>dd>ul").click(
  function(){
    $(this).parent().children().css("border-color","#EBEBEB");
    $(this).css("border-color","#f9398a");
    $(".dl2>dd>ul").css("cursor","pointer").css("border-color","#EBEBEB").click(function(){
      $(this).parent().children().css("border-color","#EBEBEB");
      $(this).css("border-color","#f9398a");
      if($(".dl1>dd>ul:first").css("border-color")=="rgb(249, 57, 138)"){
        if($(".dl2>dd>ul:first").css("border-color")=="rgb(249, 57, 138)"){
          $(".section_top_left").html('<img src="images/biaozhunbai.jpg">');
        }else{
          $(".section_top_left").html('<img src="images/biaozhunfen.jpg">');
        }
      }else{
        if($(".dl2>dd>ul:first").css("border-color")=="rgb(249, 57, 138)"){
          $(".section_top_left").html('<img src="images/teshubai.jpg">');
        }else{
          $(".section_top_left").html('<img src="images/teshufen.jpg">');
        }
      }
    });
  }
);
//图片放大
var zoom={
  MSIZE:175,//保存mask的大小
  MAXLEFT:250,MAXTOP:300,//保存mask可用的最大坐标:
  init:function(){
    //为class为.section_top_left的div添加hover事件,切换mask的显示和隐藏,再绑定鼠标移动事件为moveMask
    $(".section_top_left").hover(this.toggle,this.toggle).mousemove(this.moveMask.bind(this));
  },
  moveMask:function(e){
    var x=e.offsetX;//获得鼠标相对于父元素的x
    //console.log(x);
    var y=e.offsetY;//获得鼠标相对于父元素的y
    //计算mask的left: x-MSIZE/2
    var left=x-this.MSIZE/2;
    //console.log(left);
    //计算mask的top: y-MSIZE/2
    var top=y-this.MSIZE/2;
    //console.log(x);
    //如果left越界，要改回边界值
    left=left<0?0:(left>this.MAXLEFT?this.MAXLEFT:left);
    //如果top越界，要改回边界值
    top=top<0?0:(top>this.MAXTOP?this.MAXTOP:top);
    //设置id为mask的元素的left为left,top为top
    //$("#mask").css("left","left").css("top","top");
    //设置id为largeDiv的背景图片位置:
    $("#largeDiv").css(
      "backgroundPosition",
      -left+"px "+-top+"px");
  },
  toggle:function(){//切换mask的显示和隐藏
    //$("#mask").toggle();
    $("#largeDiv").toggle();
    /*$(".section_top_left>img").css("zIndex","100").css("opacity","0");*/
    //如果largeDiv的display为block
    if($("#largeDiv").css("display")=="block"){
      //获得mImg的src
      var src=$(".section_top_left>img").attr("src");
      $("#largeDiv").css(
        "backgroundImage","url("+src+")");
    }
  }
} 
zoom.init();
