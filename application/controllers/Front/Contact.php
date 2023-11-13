<?php 

class Contact extends Front_Controller {

    public function index() 
    {
    	$content['main_content'] = 'contact';
        $this->load->view('front/inc/view',$content);    	
    }
}
