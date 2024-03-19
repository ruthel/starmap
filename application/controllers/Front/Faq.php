<?php

class Faq extends Front_Controller
{

  public function index()
  {
    $content['main_content'] = 'faq';
    $this->load->view('front/inc/view',$content);
  }
}
