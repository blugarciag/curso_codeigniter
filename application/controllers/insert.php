<?php 

	/**
	* 
	*/
	class Insert extends CI_Controller
	{
		
		function __construct(argument)
		{
		  $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
		}

		public function index()
		{
			//get de posted vars
		  	$mat = $this->input->post("matricula");
          	$nom = $this->input->post("nombre");
          	$apellidos = $this->input->post("apellidos");
          	$email = $this->input->post("correo");
          	$password = $this->input->post("password");

          	$this->form_validation->set_rules("matricula", "Username", "trim|required");
          	$this->form_validation->set_rules("nombre", "Password", "trim|required");
          	$this->form_validation->set_rules("apellidos", "Username", "trim|required");
          	$this->form_validation->set_rules("correo", "Password", "trim|required");
          	$this->form_validation->set_rules("password", "Username", "trim|required");

          	if ($this->input->post('registrob') == "Register")
          	{
          		$usr_result = $this->insert_model->insert_data($mat, $nom, $apellidos, $email, $password);
          		if ($usr_result > 0) //active user record is present
                    {
                         //$this->session->set_flashdata('msg', '<input id="btn_logout" name="btn-logout" type="submit" class="btn btn-default" value="Logout" >');
                         redirect("home");
                    }
                    else
                    {                         
                         redirect('pop');
                    }
          	}


          
		}
	}
 ?>
