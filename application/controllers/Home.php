<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('home_model');
	}

	public function index(){
		$data = array();
		$data['seo'] = $this->home_model->get_seo();

		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header', $data, true);

		$data['data_footer'] = $this->home_model->get_footer();
		$data['footer'] = $this->load->view('/template/footer', $data, true);

		$data['home'] = $this->home_model->get_banner();
		$data['services'] = $this->home_model->get_services();
		$data['portfolio'] = $this->home_model->get_portfolio();
		$data['experience'] = $this->home_model->get_experience();
		$data['about'] = $this->home_model->get_about();
		
		$data['section'] = $this->load->view('/home', $data, true); 
		$this->load->view('/template/index', $data);
	}

	public function sendEmail(){
		$config['mailtype'] = 'html';
		$this->email->initialize($config);

		$body =   "
          <html>
	          <body>";
	          foreach ($_POST as $key => $value) {
	            $body .= "<p><b>".str_replace(array('_text', '_'), array('', ' '), $key)."</b>: ".utf8_decode($value)."</p>"; 
	          }
		$body .= "<br></body></html>";

		$this->email->from('web@blancoynegro.com', 'Blanco y Negro - Página Web');
		$this->email->to($this->home_model->get_seo()->contact_emails);
		$this->email->subject('Formulario de contacto');
		$this->email->message($body);

		$this->email->send();
		echo 'Tu mensaje ha sido enviado exitosamente. Pronto nos comunicaremos contigo.';
	}
}
