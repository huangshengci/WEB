<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class LoginController extends BaseController {
  public function login(){
    $this->show();
  }
  public function yanzheng(){
    $db = M('user');
    $re = $db->where($_POST)->select();
    session_start();
    $_SESSION['uname'] = $_POST['uname'];
    $this->result($re);
  }  
  public function signOut(){
    session_start();
    $_SESSION['uname'] = null;
  } 
}