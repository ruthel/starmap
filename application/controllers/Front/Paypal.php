<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Paypal extends Front_controller{ 
     
     function  __construct(){ 
        parent::__construct(); 
         
        $this->load->library('paypal_lib'); 
     } 
      
    function success(){ 
        // Get the transaction data 
        $paypalInfo = $this->input->get(); 
         
        $productData = $paymentData = array(); 
        if(!empty($paypalInfo['item_number']) && !empty($paypalInfo['tx']) && !empty($paypalInfo['amt']) && !empty($paypalInfo['cc']) && !empty($paypalInfo['st'])){ 
            $item_name = $paypalInfo['item_name']; 
            $item_number = $paypalInfo['item_number']; 
            $txn_id = $paypalInfo["tx"]; 
            $payment_amt = $paypalInfo["amt"]; 
            $currency_code = $paypalInfo["cc"]; 
            $status = $paypalInfo["st"]; 
             
            // Get product info from the database 
            $data=array();
            $data['table']='map';
            $data['where']=array('map_id'=>$item_number);
            $data['output_type']='row';
            $productData = $this->general->get($data);
             
            // Check if transaction data exists with the same TXN ID 
            $data=array();
            $data['table']='payment';
            $data['where']=array('txn_id'=>$txn_id);
            $data['output_type']='row';
            $paymentData = $this->general->get($data); 
        } 
         
        // Pass the transaction data to view 
        $data['product'] = $productData; 
        $data['payment'] = $paymentData; 
        $this->load->view('paypal/success', $data); 
    } 
      
     function cancel(){ 
        // Load payment failed view 
        $this->load->view('paypal/cancel'); 
     } 
      
     function ipn(){ 
        // Retrieve transaction data from PayPal IPN POST 
        $paypalInfo = $this->input->post(); 
         
        if(!empty($paypalInfo)){ 
            // Validate and get the ipn response 
            $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo); 
 
            // Check whether the transaction is valid 
            if($ipnCheck){ 
                // Check whether the transaction data is exists 
                $data=array();
                $data['table']='payment';
                $data['where']=array('txn_id'=>$paypalInfo["txn_id"]);
                $data['output_type']='row';
                $prevPayment = $this->general->get($data); 
                if(!$prevPayment){ 
                    // Insert the transaction data in the database 
                    $content=array(
                        'user_id'=>$paypalInfo["custom"],
                        'product_id'=>$paypalInfo["item_number"],
                        'txn_id'=>$paypalInfo["txn_id"],
                        'payment_gross'=>$paypalInfo["mc_gross"],
                        'currency_code'=>$paypalInfo["mc_currency"],
                        'payer_name'=>trim($paypalInfo["first_name"].' '.$paypalInfo["last_name"], ' '),
                        'payer_email'=>$paypalInfo["payer_email"],
                        'payment_processing_status'=>$paypalInfo["payment_status"],
                    ); 
                    $data=array();
                    $data['table']='payment';
                    $this->general->insert($data,$content);
                } 
            } 
        } 
    } 
}