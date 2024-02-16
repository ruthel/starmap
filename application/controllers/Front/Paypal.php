<?php defined('BASEPATH') or exit('No direct script access allowed');

class Paypal extends Front_controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->library('paypal_lib');
  }


  function mailTo()
  {

    $this->load->helper('form');
    $this->load->library('email');

    $config = array();
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'hasanmehdi.com';
    $config['smtp_user'] = 'selfservice@hasanmehdi.com';
    $config['smtp_pass'] = '_1234AbC@Me';
    $config['smtp_port'] = 465; // or 465 for SSL
    $config['smtp_crypto'] = 'ssl'; // or 'ssl'
    $config['mailtype'] = 'html'; // or 'text'
    $config['charset'] = 'utf-8';
    $config['newline'] = "\r\n"; // required for some servers

    $this->email->initialize($config);
    $this->email->set_newline("\r\n");

    $obj = 'SITEMAP PAYMENT DONE SUCCESSFULLY';
    $from_email = 'selfservice@hasanmehdi.com';
    $to_email = 'ruthel.crab@gmail.com';
//    $to_email = 'mapstarlight@gmail.com';
    $this->load->library('email');
    $this->email->from($from_email, 'Starmap Self-service');
    $this->email->to(trim($to_email));
    $this->email->subject($obj);
    $this->email->message(
      '
        <div>
          The payment of your StarMap has been fuffil with success.
        </div>'
    );

    if ($this->email->send()) {
      echo "
            <div style='background: #b4ffca; border: 1px solid #8ff1ab; padding: 12px; border-radius: 4px'>
                A Email send successfully to your client email. Make sure to check even in the junk box.
            </div>
      ";
    } else
      $this->session->set_flashdata("email_sent", "You have encountered an error");
  }


  function success()
  {
    // Get the transaction data
    $paypalInfo = $this->input->get();

    $this->mailTo();

    $productData = $paymentData = array();
    if (!empty($paypalInfo['item_number']) && !empty($paypalInfo['tx']) && !empty($paypalInfo['amt']) && !empty($paypalInfo['cc']) && !empty($paypalInfo['st'])) {
      $item_name = $paypalInfo['item_name'];
      $item_number = $paypalInfo['item_number'];
      $txn_id = $paypalInfo["tx"];
      $payment_amt = $paypalInfo["amt"];
      $currency_code = $paypalInfo["cc"];
      $status = $paypalInfo["st"];

      // Get product info from the database
      $data = array();
      $data['table'] = 'map';
      $data['where'] = array('map_id' => $item_number);
      $data['output_type'] = 'row';
      $productData = $this->general->get($data);

      // Check if transaction data exists with the same TXN ID
      $data = array();
      $data['table'] = 'payment';
      $data['where'] = array('txn_id' => $txn_id);
      $data['output_type'] = 'row';
      $paymentData = $this->general->get($data);
    }

    // Pass the transaction data to view
    $data['product'] = $productData;
    $data['payment'] = $paymentData;
    $this->load->view('paypal/success', $data);
  }

  function cancel()
  {
    // Load payment failed view
    $this->load->view('paypal/cancel');
  }

  function ipn()
  {
    // Retrieve transaction data from PayPal IPN POST
    $paypalInfo = $this->input->post();

    if (!empty($paypalInfo)) {
      // Validate and get the ipn response
      $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

      // Check whether the transaction is valid
      if ($ipnCheck) {
        // Check whether the transaction data is exists
        $data = array();
        $data['table'] = 'payment';
        $data['where'] = array('txn_id' => $paypalInfo["txn_id"]);
        $data['output_type'] = 'row';
        $prevPayment = $this->general->get($data);
        if (!$prevPayment) {
          // Insert the transaction data in the database
          $content = array(
            'user_id' => $paypalInfo["custom"],
            'product_id' => $paypalInfo["item_number"],
            'txn_id' => $paypalInfo["txn_id"],
            'payment_gross' => $paypalInfo["mc_gross"],
            'currency_code' => $paypalInfo["mc_currency"],
            'payer_name' => trim($paypalInfo["first_name"] . ' ' . $paypalInfo["last_name"], ' '),
            'payer_email' => $paypalInfo["payer_email"],
            'payment_processing_status' => $paypalInfo["payment_status"],
          );
          $data = array();
          $data['table'] = 'payment';
          $this->general->insert($data, $content);
        }
      }
    }
  }
}