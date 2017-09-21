<?php
namespace Home\Controller;
use Home\Controller\BaseController;
use Think\Page;
class BuycarController extends BaseController {
  public function buycar(){
    $totalRow = M("product")->count();
    $page = new Page($totalRow,12);
    $product = M('product')->limit($page->firstRow,$page->listRows)->select();
    $this->assign('product',$product);
    $this->assign("pageList",$page->show());
    $this->display();
  }
}