<?php

class Senderemail extends Front_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
  }

  public function send_mail()
  {

    $config = array();
    $config['protocol'] = 'smtp';
//    $config['smtp_host'] = 'mail.privateemail.com';
    $config['smtp_host'] = 'hasanmehdi.com';
    $config['smtp_user'] = 'selfservice@hasanmehdi.com';
    $config['smtp_pass'] = '_1234AbC@Me';
    $config['smtp_port'] = 465; // or 465 for SSL
    $config['smtp_crypto'] = 'ssl'; // or 'ssl'
    $config['mailtype'] = 'html'; // or 'text'
    $config['charset'] = 'utf-8';
    $config['newline'] = "\r\n"; // required for some servers


    $base64Image = $this->input->post('image'); // Replace with the actual base64 string from your local storage
    $page_data = array('image' => $base64Image);
    $html = $this->load->view('contact_email_form', $page_data, TRUE);
//    file_put_contents('/tmp/image.png', $data);
//    $this->email->attach('/tmp/image.png');
//    $decodedImage = base64_decode($base64Image);

//    $tempFilePath = tempnam(sys_get_temp_dir(), 'img'); // Create a temp file
//    $cid = uniqid(); // Generating a unique Content-ID
//    $this->email->attach($base64Image, 'inline', null, '', '', 'base64', 'image/png', $cid);
//    $this->email->attach($tempFilePath);
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");


    $from_email = "selfservice@hasanmehdi.com";
    $to_email = trim($this->input->post('email'));
    echo $to_email;
    $this->load->library('email');
    $this->email->from($from_email, 'Starmap Self-service');
    $this->email->to(trim($to_email));
    $this->email->subject('Generated Star Map');
    $this->email->message($html);

    if ($this->email->send())
      $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
    else
      $this->session->set_flashdata("email_sent", "You have encountered an error");
    $this->load->view('contact_email_form');
  }

  public function contactus()
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

    $obj = "Mail from " . $this->input->post('name') . " " . $this->input->post('surname') . " Related to " . $this->input->post('subject');
    $from_email = 'selfservice@hasanmehdi.com';
//    $to_email = 'ruthel.crab@gmail.com';
    $to_email = 'mapstarlight@gmail.com';
    $this->load->library('email');
    $this->email->from($from_email, 'Starmap Self-service');
    $this->email->to(trim($to_email));
    $this->email->subject($obj);
    $this->email->message($this->input->post('message'));

    if ($this->email->send()) {
//      redirect('contact');
      echo "
        <html>
          <title>Redirection mail !</title>
          <body>
            <div>
                Congragulation Email Send Successfully. You will be redirected
                <script>setTimeout(()=>{window.location.href=' / '},3000)</script>
            </div>
          </body>
        </html>
      ";
    } else
      $this->session->set_flashdata("email_sent", "You have encountered an error");
  }
}

?>