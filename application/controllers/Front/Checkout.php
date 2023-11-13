<?php 

class Checkout extends Front_Controller {

    public function index() 
    {
        $data=array();
        $data['table']='map';
        $data['output_type']='row';
        $data['where']=array('map_id'=>$this->session->userdata('map_id'));
        $content['map']=$this->general->get($data);
    	$content['main_content'] = 'checkout';
        $this->load->view('front/inc/view',$content);    	
    }
}
