<?php 

class Editor extends Front_Controller {

    public function index() 
    {
    	$content['main_content'] = 'editor';
        $this->load->view('front/inc/view',$content);
    }
}
