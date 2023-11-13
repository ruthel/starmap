<?php 

class ProductDetails extends Front_Controller {

  public function index()
  {
    $content['main_content'] = 'product-details';
    $this->load->view('front/inc/view',$content);
  }
}
