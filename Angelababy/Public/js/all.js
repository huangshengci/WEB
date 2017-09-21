$('.shopping').hover(
  function(){
    $('.shopping>div').stop().slideDown(500);
  },function(){
    $('.shopping>div').stop().slideUp(500);
  }
);
var w =$("#ul>li.mov").css('width');//获得第一个li的宽度
var s=$('#span')//获得span
s.css('width',w);//把第一个里的宽度赋值给span
$("#ul").on("mouseover","li.mov",function(){
  s.css({'width':$(this).css('width'),'visibility':'visible'});
  for(var i=0,l=0;i<$(this).index()-1;i++){
    l+=Number($($('#ul>li.mov')[i]).css('width').slice(0,$($('#ul>li.mov')[i]).css('width').length-2));
  }
  s.css('left',l+'px');
});
$("ul").on("mouseout","li.mov",function(){
  s.css('visibility','hidden');
});
//console.log(sessionStorage.getItem('loginName'));
/*if(sessionStorage.getItem('loginName')==null){
  var loginName=localStorage.getItem('loginName');
}else{
  var loginName=sessionStorage.getItem('loginName');
}*/
/*var count=0;
if(loginName!=null){
  $('.login>div:last-child').css('display','none').siblings().css('display','block');
  $('.login span').html(loginName);
  $(function(){
    $.ajax({
      url: '/code/Angelababy/here/php/buycar_chaxun.php',
      data: {uname: sessionStorage['loginName']||localStorage['loginName']},
      success: function(detailList){
        //遍历购物车详情列表，拼接HTML片段
        var html = '';
        $.each(detailList, function(i, d){
          $('.count').html(++count);
          html += `
          <li>
            <img src="/code/Angelababy/public/${d.pic}">
            <span>${d.pname.slice(0,2)}</span>
            <span>${d.count}</span>
            <b>￥${parseInt(d.price*d.count)}</b>
            <a href='${d.did}'>&times;</a>
          </li>  
          `;
        });
        if(html!=''){
          $('.nopro').css('display','none');
          $('.hpro').css('display','block').html(html);
        }else{
          $('.nopro').css('display','block');
          $('.hpro').css('display','none');
        }
      }
    });
  });
}else{
  $('.login>div:last-child').css('display','inline-block').siblings().css('display','none');
  $('.login span').html(loginName);
}*/

$('#btn_r').click(function(){
  //sessionStorage.removeItem('loginName');
  //localStorage.removeItem('loginName');
  $.ajax({
    type:'POST',
    url: '/Angelababy/login/signOut',
    success: function(data){
      console.log(data);
      window.location.href = '/Angelababy/index/index';
    }
  })
});


$('.hpro').on('click','a.del',function(e){
  e.preventDefault();
  var cartNum = Number($('.count').html());
  var $this = $(this);
  $.ajax({
    type:'POST',
    url: '/Angelababy/cart/delete',
    data: {'did':$this.attr('href')},
    success: function(data){
      if(data=='ok'){
        $('.count').html(--cartNum);
        if($('#cart')){
          $('#cart tbody>tr:eq('+$this.parent().index()+')').remove()
        }
        $this.parent().remove();
        alert('删除成功');
        if($('.hpro').html().length<=50){
          $('.hpro').html("购物车中还没有商品,<a href='/Angelababy/buycar/buycar'>现在去挑选</a>");
          if($('#cart>tbody')){
            $('#cart>tbody').html(`<th style='font-size:25px;' colspan='6'>您的购物车没有任何商品!</th>`);
          }
        } 
      }else{
        alert('删除失败');
      }

    }
  });
});