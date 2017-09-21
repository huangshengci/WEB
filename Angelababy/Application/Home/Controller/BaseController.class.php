<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
  public $uname,$arr;
  public function _initialize(){
    $this->uname = $_SESSION['uname'];
    if($this->uname){
      $uid = M('user')->field('uid')->where(['uname'=>$this->uname])->find()['uid'];
      $cid = M('cart')->where(['uid'=>$uid])->field('cid')->find()['cid'];
      if($cid){
        $this->arr = M('cart_detail')->join('meitu_product')->where(['cartId='.$cid.' and productId=pid'])->order('did')->select();
        $this->assign('arr',$this->arr);
      }else{

      }
      $this->assign('uname',$this->uname);
    }
  }
  public function result($data){
    if($data){
      echo 'ok';
    }else{
      echo 'notok';
    }
  }
}