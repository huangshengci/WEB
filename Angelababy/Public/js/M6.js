//滚动事件  文字移动
window.onscroll=function(){
  //console.log(document.body.scrollTop);
  document.body.scrollTop>1000?$("#goTop").css("display","block"):$("#goTop").css("display","none");
  document.body.scrollTop>1000&&$(".bg1>div>p").addClass("donghua");
  document.body.scrollTop>1800&&$(".bg2>div>h1,.bg2>div>span,.bg2>div>img").addClass("donghua");
  document.body.scrollTop>3000&&$(".bg3>div>p").addClass("donghua");
  document.body.scrollTop>3500&&$(".bg4>div>h1,.bg4>div>span,.bg4>div>img").addClass("donghua");
  document.body.scrollTop>4500&&$(".bg5>div>p").addClass("donghua");
  document.body.scrollTop>5600&&$(".bg6>div>h1,.bg6>div>span,.bg6>div>img").addClass("donghua");
  document.body.scrollTop>7300&&$(".bg7>div>p").addClass("donghua");
  document.body.scrollTop>7900&&$(".bg8>div>div>h1,.bg8>div>div>span").addClass("donghua");
  document.body.scrollTop>8800&&$(".bg9>div>p").addClass("donghua");
  document.body.scrollTop>9500&&$(".bg10>div>div>h1,.bg10>div>div>span").addClass("donghua");
  document.body.scrollTop>10400&&$(".bg11>div>p").addClass("donghua");
  document.body.scrollTop>11000&&$(".bg12>div>div>h1,.bg12>div>div>span").addClass("donghua");
  document.body.scrollTop>11800&&$(".bg13>div>p").addClass("donghua");
  document.body.scrollTop>12900&&$(".bg14>div>h1,.bg14>div>span,.bg14>div>img").addClass("donghua");
  document.body.scrollTop>13400&&$(".bg15>div>p").addClass("donghua");
  document.body.scrollTop>14800&&$(".bg16>div>h5").addClass("donghua");
  document.body.scrollTop>15500&&$(".bg17>div>h4,.bg17>div>span").addClass("donghua");
  document.body.scrollTop>16400&&$(".bg18>div>img").addClass("donghua");
  document.body.scrollTop>17000&&$(".bg19>div>p").addClass("donghua");
  document.body.scrollTop>18000&&$(".bg20>div>div>h1,.bg20>div>div>span").addClass("donghua");
}


//返回顶部
$("#goTop").click(function(){
  $("body").animate({scrollTop:0},1000);
});


//视频
$('.banner_down').on('click','li',function(e){
  e.preventDefault();
  var x=$(this).index();
  $('.zhe>div').css({'transform':'rotate(0deg)','transition':'all 0s linear'});
  $('.zhe').css({'opacity':1,'zIndex':100});
  //$('#video').animate({'opacity':1},1000);
  //$('#video')[0].src='/Angelababy/Public/images/beauty_camera.mp4';
  $('#video')[0].play();
});
//视频关闭
$('.zhe span').click(function(){
  $('#video')[0].pause();
  $('.zhe>div').css({'transform':'rotate(45deg)','transition':'all .5s linear'});
  $('.zhe').css({'opacity':0,'zIndex':-10});
});
//视频暂停播放
$('.zhe>div>img').click(function(){
  if($('#video')[0].paused){
    $('.zhe>div>img')[0].src='/Angelababy/Public/images/pause.png';
    $('#video')[0].play();
  }else{
    $('.zhe>div>img')[0].src='/Angelababy/Public/images/play.png';
    $('#video')[0].pause();
  }
});


