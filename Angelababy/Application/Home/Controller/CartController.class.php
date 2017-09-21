<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class CartController extends BaseController {
  public function delete(){
    $re = M('cart_detail')->where(['did'=>$_POST['did']])->delete();
    $this->result($re);
  }
  public function add(){
    $pid = $_POST['pid'];
    $dbCart = M('cart');
    $dbCartDetail = M('cart_detail');
    $uid = M('user')->field('uid')->where(['uname'=>$this->uname])->find()['uid'];
    $cid = $dbCart->where(['uid'=>$uid['uid']])->find()['cid'];
    if(!$cid){
      $dbCart->data(['cid'=>null,'uid'=>$uid])->add();
      $cid = $dbCart->getLastInsId();
    }
    $row = $dbCartDetail->where('cartId='.$cid.' AND productId='.$pid.'')->select();
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
  public function select(){
    echo json_encode($this->arr);
  }
}