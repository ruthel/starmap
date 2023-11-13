<?php 

class Main extends Front_Controller {

    public function index() 
    {
    	$content['main_content'] = 'index';
        $this->load->view('front/inc/view',$content);    	
    }
}
