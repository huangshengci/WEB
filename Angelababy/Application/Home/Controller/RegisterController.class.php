<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class RegisterController extends BaseController {
  public function register(){
    $this->show();
  }
  public function zhuce(){
  	$re = M('user')->data($_POST)->add();
  	$this->result($re);
  }
  public function checked(){
  	$re = M('user')->where($_POST)->find();
  	$this->result($re);
  }
}