<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class UsercenterController extends BaseController{
  public function usercenter(){
    if($this->uname) $this->display();
    else $this->redirect('Home/index/index'); 
  }
}