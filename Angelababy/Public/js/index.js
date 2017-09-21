//为window绑定滚动事件为function(){}
$(document).scroll(function(){
  if($(document).scrollTop()>=800){
    $('#article_bg3').css('visibility','visible');
  }else{
    $('#article_bg3').css('visibility','hidden');
  }
});
$("#article_bg3>a").click(
  function(){
    $("body,html").animate({scrollTop:0}, 500);//0.5秒返回顶部
  }
);

$(".go").on("click","a",function(){
  $(".gundong>ul").toggleClass('tog');//切换
});


/*广告图片数组*/
var imgs=[
  {"i":0,"img":"/Angelababy/Public/images/banner_01.jpg"},
  {"i":1,"img":"/Angelababy/Public/images/banner_02.jpg"},
  {"i":2,"img":"/Angelababy/Public/images/banner_03.jpg"},
  {"i":3,"img":"/Angelababy/Public/images/banner_04.jpg"},
  {"i":4,"img":"/Angelababy/Public/images/banner_05.jpg"}
];
var slider={
  LIWIDTH:0,//保存每个li的宽度,其实就是#slider的宽
  DURATION:1000,//动画的总时间
  WAIT:3000,//自动轮播之间的等待时间
  timer:null,//保存一次性定时器序号
  canAuto:true,//保存是否可以自动轮播
  init:function(){
    this.LIWIDTH=parseFloat(
      $("#slider").css("width")
    );
    this.updateView();
    //为id为indexs的ul添加鼠标进入事件代理，只有不是hover的li才能响应事件
    $("#indexs").on("mouseover","li:not(.hover)",
      function(e){
        //获得目标元素$target
        var $target=$(e.target);
      //调用move方法，传入要移动的个数:
        //console.log($target.html());
        //目标元素的内容-目标元素的兄弟中class为hover的li的内容
        this.move($target.html()
               -$target.siblings(".hover").html());
    }.bind(this));
    //当鼠标进入#slider时，将canAuto改为false
    //当鼠标移出#slider时，将canAuto改为true
    $("#slider").hover(
      function(){this.canAuto=false;}.bind(this),
      function(){this.canAuto=true;}.bind(this)
    )
    this.autoMove();
  },
  autoMove:function(){//启动自动轮播
    //启动一次性定时器: 
    this.timer=setTimeout(
      function(){
        if(this.canAuto){
          this.move(1);//调用move执行移动一个
        }else{
          this.autoMove();//继续等待 
        }
      }.bind(this),
      this.WAIT
    );
  },
  move:function(n){
    clearTimeout(this.timer);//停止一次性定时器
    this.timer=null;
    $("#imgs").stop(true);//停止动画，防止叠加
    if(n<0){//如果n<0,右移，先改数组，再移动
      n*=-1;//将n转为正数
      imgs=//先删除结尾的n个元素，拼接到开头
        imgs.splice(imgs.length-n,n).concat(imgs);
      this.updateView();//更新界面
      //获得#imgs当前的left,转为浮点数
      var left=parseFloat($("#imgs").css("left"));
      //修改#imgs的left为left-n*LIWIDTH
      $("#imgs").css("left",left-n*this.LIWIDTH);
      //启动动画，在DURATION时间内，left移动到0
      $("#imgs").animate(
        {left:"0"},
        this.DURATION,
        this.autoMove.bind(this)
      );
    }else{//否则, 左移,先移动，再改数组
      //让#imgs的ul再DURATION事件内，left变为-n*LIWIDTH
      $("#imgs").animate(
        {left:-n*this.LIWIDTH+"px"},
        this.DURATION,
      //在动画结束后调用endMove,替换this，传入参数n
        this.endMove.bind(this,n)
      );
    }
  },
  endMove:function(n){
    //删除imgs开头的n个元素,再拼到结尾
    imgs=imgs.concat(imgs.splice(0,n))
    this.updateView();//更新页面
    $("#imgs").css("left",0);//设置#imgs的left为0
    this.autoMove();//启动自动轮播
  },
  updateView:function(){//将数组中的元素更新到页面
    //遍历imgs数组中每个对象,同时声明空字符串html
    for(var i=0,html="",idxs="";i<imgs.length;i++){
      html+="<li><img src='"+imgs[i].img+"'></li>";
      idxs+="<li>"+(i+1)+"</li>";
    }
    //设置id为imgs的内容为html,再设置其宽为LIWIDTH*imgs的元素个数
    $("#imgs").html(html)
            .css("width",this.LIWIDTH*(imgs.length+1));
    //设置id为indexs的内容为idxs
    $("#indexs").html(idxs);
    //获得#indexs下的和imgs中第一个元素的i属性对应的li,设置其class为hover,选择兄弟中的class为hover的li,清除其class
    $("#indexs>li:eq("+imgs[0].i+")")
      .addClass("hover")
      .siblings(".hover").removeClass("hover");
  }
}
slider.init();


//banner弹出背景色
$('.axiba div').hover(
  function(){
    $('.banner_left li').eq($(this).index()).css('background','#F53A8A');
  },
  function(){
    $('.banner_left li').eq($(this).index()).css('background','none');
  }
);