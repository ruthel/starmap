<?php
	isset($main_content)?$this->load->view('front/'.$main_content.''):'';
	$this->load->view('front/inc/footer');
?>