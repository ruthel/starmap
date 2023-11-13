<?php 

class Api extends Front_Controller {

    public function order($order_no = "") 
    {	
    	header('Content-Type: application/json; charset=utf-8');
    	$response = array(
    		'status' => "",
    		'error_message' => "",
    	);
    	if(empty($order_no)){
    		$response['status'] = 'failed';
    		$response['error_message'] = 'Order number not found.';
    		echo json_encode($response['message']);
    		exit;
    	}
    	else{
    		$data['table'] = 'order';
    		$data['where'] = array('order_number' => $order_no);
    		$data['join'] = 'customer.customer_id = order.customer_id';
    		$data['join_table'] = 'customer';
    		$data['output_type'] = 'row';
    		$data['join_type'] = 'LEFT';
    		$result = $this->general->get($data);

    		if(!empty($result)){
    			$response['status'] = 'success';
    			$response['error_message'] = '';
    			if(!empty($result->order_video_file)){
    				$result->order_video_file = base_url('uploads/order/').$result->order_video_file;
    			}
    			if(!empty($result->order_image_file)){
    				$result->order_image_file = base_url('uploads/order/').$result->order_image_file;
    			}

    			$response['response'] = $result;
	    		echo json_encode($response);
	    		exit;
    		}else{
	    		$response['status'] = 'failed';
	    		$response['error_message'] = 'No order no found with provided order number.';
	    		echo json_encode($response['message']);
	    		exit;
    		}
    	}
    }
}
