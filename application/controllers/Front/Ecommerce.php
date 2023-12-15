<?php

class Ecommerce extends Front_controller
{
  function __construct()
  {
    parent::__construct();

    // Load paypal library
    $this->load->library('paypal_lib');

  }

  public function index()
  {
    $content = array(
      'map_place' => $this->input->post('map_place'),
      'map_subtitle' => $this->input->post('map_subtitle'),
      'map_style_poster' => $this->input->post('map_style_poster'),
      'map_size' => $this->input->post('map_size'),
      'map_color' => $this->input->post('color'),
      'map_diplay_address' => $this->input->post('map_diplay_address'),
      'map_frame' => $this->input->post('map_frame'),
      'map_date' => $this->input->post('map_date'),
      'map_custom_text' => $this->input->post('map_custom_text'),
    );
    $data = array();
    $data['table'] = 'map';
    $id = $this->general->insert($data, $content);
    $this->session->set_userdata('map_id', $id);
    redirect('checkout');
  }

  public function order()
  {
//    $content = array(
//      'customer_first_name' => $this->input->post('customer_first_name'),
//      'customer_last_name' => $this->input->post('customer_last_name'),
//      'customer_email' => $this->input->post('customer_email'),
//      'customer_message' => $this->input->post('customer_message'),
//    );

    $content = array(
      'customer_first_name' => "aa",
      'customer_last_name' => "aa",
      'customer_email' => "aa",
      'customer_message' => "aa",
    );

    $data = array();
    $data['table'] = 'customer';
    $id = $this->general->insert($data, $content);

    // Set variables for paypal form
    $returnURL = base_url() . 'paypal/success'; //payment success url
    $cancelURL = base_url() . 'paypal/cancel'; //payment cancel url
    $notifyURL = base_url() . 'paypal/ipn'; //ipn url

    // Get product data from the database

    $data = array();
    $data['table'] = 'map';
    $data['where'] = array('map_id' => $id);
    $data['output_type'] = 'row';
    $product = $this->general->get($data);


    // Add fields to paypal form
    $this->paypal_lib->add_field('return', $returnURL);
    $this->paypal_lib->add_field('cancel_return', $cancelURL);
    $this->paypal_lib->add_field('notify_url', $notifyURL);
    $this->paypal_lib->add_field('item_name', $product->map_place);
    $this->paypal_lib->add_field('custom', $id);
    $this->paypal_lib->add_field('item_number', $product->map_id);
    $this->paypal_lib->add_field('amount', '500');

    // Render paypal form
    $this->paypal_lib->paypal_auto_form();
  }
}