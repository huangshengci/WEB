/*检验当前是否已经登录**/
if(!sessionStorage['loginName']&&!localStorage['loginName']){
  //location.href = 'index.html'; //未登录的话跳转到登录页
}

// $('.usercenter_top>div>h1').html(loginName);
// $('.zuo').html(loginName.slice(0,3));
// $('.you').html(loginName.slice(7,11));

$('.sec_bottom>ul>li:first-child>ul').on('click','a',function(e){
  e.preventDefault();
  var x=$(this).parents().index()+1;
  $('.change').html('> '+$(this).html());
  $(this).addClass('col').parents().siblings().children().removeClass('col');
  $('.sec_bottom>div>div:eq('+x+')').css('zIndex',0).siblings().css('zIndex',-1);
});
$('.sec_bottom>ul>li:first-child>a').click(function(){
  $('.change').html(' ');
  $('.sec_bottom>div>div:eq(0)').css('zIndex',0).siblings().css('zIndex',-1);
  $(this).addClass('col').siblings().children().children().removeClass('col');
});

$('#cart').on('click','a.del',function(e){
  e.preventDefault();
  $('.hpro li>a:eq('+$(this).parents('tr').index()+')').click();
})


/*异步请求当前登录用户的购物车内容*/
/*$(function(){
  $.ajax({
    url: 'php/buycar_chaxun.php',
    data: {uname: sessionStorage['loginName']||localStorage['loginName']},
    success: function(detailList){
      //遍历购物车详情列表，拼接HTML片段
      var html = '';
      $.each(detailList, function(i, d){
        html += `
        <tr>
          <td><img src="${d.pic}"></td>
          <td>${d.pname}</td>
          <td>￥${d.price}</td>
          <td>
            ${d.count}
          </td>
          <td><span>￥${d.price*d.count}</span></td>
          <td><a href="${d.did}" class='del'>删除</a></td>
        </tr>  
        `;
      });
      if(html!=''){
        $('#cart tbody').html(html);
      }else{
        $('#cart tbody').html(`<h1>您的购物车没有任何商品!</h1>`);
      }
    }
  });
});*/

/*$('#cart').on('click','.del',function(e){
  e.preventDefault();
  $('.count').html(--count);
  $(this).parent().parent().detach();
  var x=$(this)[0].href.slice($(this)[0].href.lastIndexOf('/')+1);
  $(function(){
    $.ajax({
      type:'POST',
      url: 'php/delete.php',
      data: {'did': x},
      success:function(){
        $.ajax({
          url: 'php/buycar_chaxun.php',
          data: {uname: sessionStorage['loginName']||localStorage['loginName']},
          success: function(detailList){
            //遍历购物车详情列表，拼接HTML片段
            var html = '';
            $.each(detailList, function(i, d){
              html += `
              <li>
                <img src="${d.pic}">
                <span>${d.pname.slice(0,2)}</span>
                <span>${d.count}</span>
                <b>￥${parseInt(d.price*d.count)}</b>
                <a href='${d.did}'>&times;</a>
              </li>  
              `;
            });
            $('.hpro').html(html);
            //if(html!=''){
              //$('.nopro').css('display','none');
              //$('.hpro').css('display','block').html(html);
            //}
          }
        });
      }
    });
  });
});*/