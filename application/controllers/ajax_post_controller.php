<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Post_Controller extends CI_Controller {
	public function __construct()
     {	
     	  	
          parent::__construct();
          $this->load->library('session');         
          $this->load->helper('html');
          $this->load->model('jsonci_model');
          $this->load->helper(array('form', 'url'));
          $this->load->database();
          $this->load->library('form_validation');
          
     }
// Show view Page
public function index(){

}

// This function call from AJAX
public function user_data_submit() {
	$usr = $this->input->post('name');
	$pwd = $this->input->post('pwd');
	$sql = "select * from datos_alumno where matricula = '" . $usr . "' and password = '" . $pwd . "';";
    $query = $this->db->query($sql);
    $usr_result = $query->num_rows();
    $dts = $query->result_array         ();
    
    $mat = "fghj";
    $mail = "gfd";
                    	
    if ($usr_result > 0) //active user record is present
                    {
                      
                      $sessiondata = array(
                              'matricula' => "",
                              'username' => $usr,
                              'correo' => 'ok'
                         );
                         
                         $this->session->set_userdata($sessiondata);   
                         

					//Either you can print value or you can send value to database
					echo json_encode($sessiondata);
                    }
                    else
                    {
                                $data = array(
      							            'matricula' => "",
      							            'correo'=> 'no'
      							);
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
					//Either you can print value or you can send value to database
					echo json_encode($data);
                    }
	
}
public function logout()
{

   	//$this->session->unset_userdata('hola');
    $this->session->sess_destroy();
    
    redirect('home');
          
}


public function alumnos()
    {
        
        if($this->input->is_ajax_request())
        {

            $alumnos = $this->jsonci_model->alumnos();

            echo json_encode($alumnos);

        }

    }
}