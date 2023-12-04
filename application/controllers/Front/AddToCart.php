<?php 

class AddToCart extends Front_Controller {

  public function index()
  {
    $content['main_content'] = 'add-to-cart';
    $this->load->view('front/inc/view',$content);
  }
}
