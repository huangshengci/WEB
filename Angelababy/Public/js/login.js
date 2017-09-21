var uname_value=null;
var upwd_value=null;

/*注册验证*/
$('#uname').blur(function(){
  if(/^1[3-9]\d{9}$/.test($(this)[0].value)){
    $(this).siblings('b').css('display','none');
    uname_value=true;
    return uname_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("手机号不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("手机号格式错误");
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
$('#btn').click(function(){
  //表单序列化，获得所有的用户输入
  var data = $('#login_form').serialize();
  //表单序列化的结果：'uname=xxx&upwd=xxx&age=xxx'
  //异步提交请求数据
  if(uname_value&&upwd_value){//&&$('#agree')[0].checked
    $.ajax({
      type: 'POST',
      url: '/Angelababy/login/yanzheng',
      data: data,
      success: function(txt, msg, xhr){
        if(txt=='ok'){  //登录成功
          /*var loginName = $('[name="uname"]').val();
          if($('#agree')[0].checked){
            localStorage.setItem('loginName',loginName);
          }else{
            sessionStorage.setItem('loginName',loginName);
          }*/
          alert('登录成功');
          location.href="/Angelababy/index/index.html";
        }else { //登录失败
          alert('登录失败');
        }
      }
    });
  }
});



//背景效果
(function(h,d){
  var g=typeof d==="string"?document.querySelector(d):d,
    f=g.getBoundingClientRect(),
    c=f.width,l=f.height,n=g.getContext("2d"),
    j={x:c/2,y:l/2,radius:180},
    k=40,e=60,a=[],
    b;g.width=c;g.height=l;
    h.raf=h.requestAnimationFrame||webkitRequestAnimationFrame||function(p){return setTimeout(p,1000/60)};
    h.caf=h.cancelAnimationFrame||webkitCancelAnimationFrame||function(p){clearTimeout(p)};
    Function.prototype.method=function(q,p){return this.prototype[q]=p,this};
    function i(p,r,q){this.x=this.ox=p;
    this.y=this.oy=r;this.radius=Math.random()*1+2;
    this.timer=q|0}i.method("draw",function(p,v,r){var s=this.closest,q,u,t=this.getAlpha(r);
    if(t>0){p.fillStyle=p.strokeStyle="rgba(254,65,114,"+t+")";
    p.beginPath();
    p.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
    p.closePath();
    p.fill();if(s){q=s.length;while(q--){u=v[s[q]];
    p.beginPath();
    p.moveTo(this.x,this.y);
    p.lineTo(u.x,u.y);p.stroke()}}}if(this._isMove){this.move();return}
    if(this.timer++===this._moveFrames){
      this.setMove()}}).method("setMove",function(){this._isMove=true;
      this._frames=Math.random()*100+120;
      this._frame=0;this._tx=this.ox+Math.random()*100-50;
      this._ty=this.oy+Math.random()*100-50}).method("move",function(){this.x=this.ease(this._frame++,this.x,this._tx-this.x,this._frames);
      this.y=this.ease(this._frame,this.y,this._ty-this.y,this._frames);
      if(Math.abs(this.x-this._tx)<0.5&&Math.abs(this.y-this._ty)<0.5){
        this._isMove=false;this.timer=0}}).method("getAlpha",function(s){
  var q=this.x-s.x,p=this.y-s.y,
  u=Math.sqrt(q*q+p*p),t=s.radius;
  return u>t?0:(1-u/t)*0.6}).method("ease",function(q,p,s,r){
    if((q/=r/2)<1){return s/2*q*q+p}return -s/2*((--q)*(q-2)-1)+p}).method("_moveFrames",e);
    function m(){
      var q=Math.max(60,c*1.5/k),t=l*1.5/q+0.5|0,v,r=0,s,u,p;
      v=c/q+0.5|0;
      for(;r<t;r++){
        for(s=0;s<v;s++){
          u=new i(s*q+(Math.random()*q*2-q),r*q+(Math.random()*q*2-q),Math.random()*e);
        p=r*v+s;a[p]=u;if(r&1&&s&&1){u.closest=[p-1,p-v,p-v-1];
          s<v-1&&u.closest.push(p+1);
          r<t-1&&u.closest.push(p+v)}
        }
      }o()
    }
    function o(){
      n.clearRect(0,0,c,l);
      a.forEach(function(r,q,p){
        r.draw(n,p,j)
      });
      b=raf(o)}g.addEventListener("mousemove",function(p){
        j.x=p.clientX-f.left;j.y=p.clientY-f.top},false);
      h.addEventListener("resize",function(){
        caf(b);a=[];f=g.getBoundingClientRect();
        g.width=c=f.width;g.height=l=f.height;m()},false);
        m()})(this,document.querySelector(".stage"));
