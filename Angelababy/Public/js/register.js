//黑洞
(function(){
var w_w=window.innerWidth,//获取页面宽度
  w_h=window.innerHeight,//获取页面高度
  centerX=w_w/2,
  centerY=w_h/2,
  target=document.getElementsByTagName("div")[0],
  comets=[],
  min_radius=125,
  max_radius=250,
  ifHover=false,
  ifClick=false,
  change=false;

  target.style.height=window.getComputedStyle(target,null).width;
  target.style.marginLeft=-parseInt(target.style.height)/2+"px";
  target.style.marginTop=-parseInt(target.style.height)/2+"px";
  target.style.lineHeight=target.style.height;

  var canvas=document.getElementById("cvs");
  cvs.width=w_w;
  cvs.height=w_h;
  cvs.setAttribute("width",w_w+"px");
  cvs.setAttribute("height",w_h+"px");
  cvs.setAttribute("backgroundColor","#fff");

  var ctx=canvas.getContext("2d");


function random(min,max){
  return min+(max-min)*Math.random();
}

function comet(){
  comets.push(this);
  this.speed=(Math.floor(Math.random() * 1.5) + 0.5)*Math.PI/180;
  this.rotation=Math.random()*Math.PI*2;
  this.y=this.origin=(random(min_radius,max_radius)+random(min_radius,max_radius))/2;
  this.x=0;

  this.collapseBonus = this.origin - 180; 
  if(this.collapseBonus < 0){ 
    this.collapseBonus = 0; 
  }
  this.shrinkRadius=max_radius/2 + this.collapseBonus;
  this.expandRadius=random(-window.innerHeight,-min_radius);
  this.color = 'rgba(254,65,114,'+ Math.abs(1 - (this.origin) / 250) +')';//初始中心颜色
 }

comet.prototype.draw=function (){
  this.rotation+=this.speed;
  
  if(ifHover){
    if(this.y>this.shrinkRadius) this.y-=2.5;
    if(this.y<this.shrinkRadius) this.y+=2.5;
  }
  else if(ifClick){
    if(this.y>this.expandRadius) this.y-=4;

  }
  else{
    if(this.y>this.origin) this.y-=2;
    if(this.y<this.origin) this.y+=2;
  }
  
  ctx.save();
  if(ifClick){ctx.fillStyle="rgba(254,65,114,.6)";}//爆炸颜色
  else
  ctx.fillStyle=this.color;
  ctx.translate(centerX,centerY);
  ctx.rotate(this.rotation);
  ctx.fillRect(this.x,this.y,1,1);
  ctx.restore();
};

target.addEventListener("click",function(){if(change) {
    ifClick=false;
  }
  else{
    ifClick=true;
  }
  change=!change;});
  


target.addEventListener("mouseover",function(){
  ifHover=true;
});

target.addEventListener("mouseout",function(){
  
  ifHover=false;
  
});

function animate(){
  ctx.fillStyle="rgba(255,255,255,.1)";//背景颜色
  ctx.fillRect(0,0,w_w,w_h);
  comets.forEach(function(element,index,group){
    element.draw();
  });
  requestFrame(animate);
}

window.requestFrame = (function(){
  return  window.requestAnimationFrame||
    window.webkitRequestAnimationFrame||
    window.mozRequestAnimationFrame||
    function( callback ){
    window.setTimeout(callback, 1000 / 60);
  };
})();


function initial(){
  ctx.fillStyle="rgba(25,25,25,1)";
  ctx.fillRect(0,0,w_w,w_h);
  for(var i=0;i<2500;i++){
    new comet();
  }

  animate();
}

initial();
})()







//随机数
function rn(max,min){
  return Math.floor(Math.random()*(max-min+1)+min);
}
//获取一个指定范围内随机颜色 random color
function rc(max,min){
  var r=rn(min, max);
  var g=rn(min, max);
  var b=rn(min, max);
  return 'rgb('+r+','+g+','+b+')';
  //return `rgb(${r},${g},${b})`;
}
//验证码1

function vcode(){
  num='';
  var str='AaBbCcDdEeFfGgHhJjKkLlMmNnPpQqRrSsTtWwXxYy3456789';
  //var char=str[ 0~字符串长度间的随机数 ];  
  var ctx=canvas.getContext('2d');
  ctx.fillStyle=rc(256,200);
  ctx.strokeRect(0,0,150,50);
  ctx.fillRect(0,0,150,50);
  //随机生成四位数字或字母
  for(var i=0;i<4;i++){
    ctx.fillStyle=rc(200,0);
    var s=rn(40,20);
    ctx.font=s+"px SimHei";
    var tex=str[rn(48,0)];
    num+=tex;
    var zhuan=rn(7,-7);
    //console.log(zhuan); 
    ctx.rotate(zhuan*Math.PI/180);
    ctx.fillText(tex,20*i+5,25);
    ctx.rotate(-zhuan*Math.PI/180);
  }
  //随机生成50个小圆点
  for(var i=0;i<50;i++){
      ctx.beginPath();
      ctx.arc(rn(150,0),rn(50,0),1,0,Math.PI*2);
      ctx.fillStyle=rc(200,0);
      ctx.fill();
  }
  //随机5条干扰线
  for(var i=0;i<5;i++){
    ctx.beginPath();
    ctx.moveTo(rn(150,0),rn(50,0));
    ctx.lineTo(rn(150,0),rn(50,0));
    ctx.strokeStyle=rc(200,0);
    ctx.stroke();
  }
  document.title="注册验证码为:"+num;
}
vcode();
canvas.onclick=vcode;

var uname_value=null;
var code_value=null;
var upwd_value=null;
var upwd1_value=null;

/*注册验证*/
$('#uname').blur(function(){
  if(/^1[3-9]\d{9}$/.test($(this)[0].value)){
    $(this).siblings('b').css('display','none');
    uname_value=true;
    return uname_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("手机号不能为空");//
  }else{
    $(this).siblings('b').css('display','inline-block').html("手机号格式错误");
  }
});
$('#code').blur(function(){
  if($(this)[0].value==num){
    $(this).siblings('b').css('display','none');
    code_value=true;
    return code_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("验证码不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("验证码错误");
    vcode();
  }
});
$('#upwd').blur(function(){
  if(/^[0-9a-zA-Z]{6,12}$/.test($(this)[0].value)){
    $(this).siblings('b').css('display','none');
    upwd_value=true;
    return upwd_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("密码不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("密码格式错误");
  }
});
$('#upwd1').blur(function(){
  if($(this)[0].value===$('#upwd')[0].value){
    $(this).siblings('b').css('display','none');
    upwd1_value=true;
    return upwd1_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("密码不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("两次密码不一致");
  }
});
$('#btn').click(function(){
  //表单序列化，获得所有的用户输入
  var data = $('#form-register').serialize();
	console.log(data);
  //表单序列化的结果：'uname=xxx&upwd=xxx&age=xxx'
  if(!$('#agree')[0].checked){
    $('.zhe').css('display','block').children().children('h2').html('必须阅读并同意美图账号服务条款');
  }
  //异步提交请求数据
  if(uname_value&&code_value&&upwd_value&&upwd1_value&&$('#agree')[0].checked){
    console.log(data);
    $.ajax({
      type: 'POST',
      url: 'php/register.php',
      data: data,
      success: function(result){
        console.log('开始处理服务器端返回的注册结果')
        console.log(result);
        if(result.msg=='succ'){
          alert('注册成功！');
          location.href='login.html';
        }else {
          alert('注册失败！')
        }
      }
    });
  }
});



$(".zhe>div:last-child>button").click(
  function(){
    $(".zhe").css("display","none");  
  }
);