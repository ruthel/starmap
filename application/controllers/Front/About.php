<?php 

class About extends Front_Controller {

    public function index() 
    {
    	$content['main_content'] = 'about';
        $this->load->view('front/inc/view',$content);    	
    }
}
