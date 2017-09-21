<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class CartController extends BaseController {
  //商品删除
  public function delete(){
    $re = M('cart_detail')->where(['did'=>$_POST['did']])->delete();
    $this->result($re);
  }
  //商品添加
  public function add(){
    $pid = $_POST['pid'];
    $dbCart = M('cart');
    $dbCartDetail = M('cart_detail');
    //用户编号
    $uid = M('user')->field('uid')->where(['uname'=>$this->uname])->find()['uid'];
    //购物车编号
    $cid = $dbCart->where(['uid'=>$uid['uid']])->find()['cid'];
    //如果没有购物车 添加一个购物车
    if(!$cid){
      $dbCart->data(['cid'=>null,'uid'=>$uid])->add();
      $cid = $dbCart->getLastInsId();
    }
    $row = $dbCartDetail->where('cartId='.$cid.' AND productId='.$pid.'')->select();
    //如果有当前商品,累加
    //如果没有当前商品,新加一行
    if($row){
      $count = $row[0]['count'];
      $count++;
      $re = $dbCartDetail->where(['cartId'=>$cid,'productId'=>$pid])->data(['count'=>$count])->save();
      $this->result($re);
    }else{
      $re = $dbCartDetail->data(['did'=>null,'cartId'=>$cid,'productId'=>$pid,'count'=>1])->add();
      $this->result($re);
    }
  }
  //商品查询
  public function select(){
    echo json_encode($this->arr);
  }
}