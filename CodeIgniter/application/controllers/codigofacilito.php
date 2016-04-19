<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Codigofacilito extends CI_Controller {
		function __construct(){
			parent::__construct();
			//$this->load->helper('mihelper');
			$this->load->helper('form');
			$this->load->model('codigofacilito_model');
		}

		function index(){
			$this->load->library("menu",array('Inicio','Contacto','Cursos'));
			$data['mi_menu'] = $this->menu->construirMenu();
			$this->load->view('codigofacilito/headers');
			$this->load->view('codigofacilito/bienvenido',$data);
		}
		function holamundo(){
			$this->load->view('codigofacilito/headers');
			$this->load->view('codigofacilito/bienvenido');
		}

		function sendmail(){
			$this->load->library('email');
			$this->email->from('carrascogalindo.felipe@gmail.com','Felipe Carrasco');
			$this->email->to('ncarrasco.galindo@gmail.com');
			$this->email->subject('Probando Codeineigter');
			$this->email->message('Probando.... Probando');

			if($this->email->send()){
				//echo "Correo enviando";
				$this->load->view("codigofacilito/headers");
			}else{
				$this->load->view("codigofacilito/headers");
				$this->load->view("codigofacilito/bienvenido");
			}
		}

		
	}
?>