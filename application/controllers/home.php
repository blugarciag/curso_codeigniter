<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller
{

     public function __construct()
     {	
     	  	
          parent::__construct();
          $this->load->library('session');         
          $this->load->helper('html');
          $this->load->helper(array('form', 'url'));
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('login_model');        
          $data  = array('title' => 'CI' );
			$this->load->view('guest/head', $data);
               $mat = $this->session->userdata('username');
               $result2=$this->db->query("SELECT * from datos_alumno;");
			$result=$this->db->query("SELECT * from datos_alumno where matricula = '$mat';");
			$data = array('mensaje' => 'Bienvenido ', 'sub_mensaje' => 'Aprende a utilizar este poderoso framework.', 'alumnos' => $result, 'alumnos2' => $result2 );
			$this->load->view('guest/header', $data);						
			$this->load->view('guest/footer');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("name21");
          $password = $this->input->post("pwd21");
          $mat = $this->input->post("matricula");
          $nom = $this->input->post("nombre");
          $apellidos = $this->input->post("apellidos");
          $email = $this->input->post("correo");
          $password2 = $this->input->post("password");
          $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '100';
          $config['max_width']  = '1024';
          $config['max_height']  = '768';
          $this->load->library('upload', $config);

          //set validations
          $this->form_validation->set_rules("user", "Username", "trim|required");
          $this->form_validation->set_rules("pass", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               //$this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         
                         $this->session->set_userdata($sessiondata);
                         //$this->session->set_flashdata('msg', '<input id="btn_logout" name="btn-logout" type="submit" class="btn btn-default" value="Logout" >');
                         redirect("home",$data);
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('home');
                    }
               }
               else
               {
                    redirect('home');
               }
          }

          if ($this->input->post('btn-logout') == "Logout")
          {
          	//$this->session->unset_userdata('hola');
          	$this->session->sess_destroy();
          	redirect('home','refresh');
          }

          /*if ($this->input->post('registrob') == "Register")
          	{
                    $data = array('upload_data' => $this->upload->data());
                    $filee = $this->upload->data('full_path');
          		$usr_result = $this->login_model->insert_data($mat, $nom, $apellidos, $email, $password2, $filee);

          		if ($usr_result == 1) //active user record is present
                    {
                         $this->session->set_flashdata('msg2', '<div class="alert alert-danger text-center">this mail has been registered!</div>');
                         redirect("#reg");
                    }else {
                    	redirect('home');
                    }

                     
          	}*/


     }

    function do_upload()
     {    
          $matricula     = $this->input->post("matricula");
          $nombre        = $this->input->post("nombre");
          $apellido      = $this->input->post("apellidos");
          $email         = $this->input->post("correo");
          $password      = $this->input->post("password2");

          $this->form_validation->set_rules("matricula", "Username", "trim|required");
          $this->form_validation->set_rules("nombre", "Username", "trim|required");
          $this->form_validation->set_rules("apellidos", "Username", "trim|required");
          $this->form_validation->set_rules("email", "Username", "trim|required");
          $this->form_validation->set_rules("password2", "Password", "trim|required");


          $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '100';
          $config['max_width']  = '1024';
          $config['max_height']  = '768';
          
          $this->load->library('upload', $config);
     
          if ( ! $this->upload->do_upload())
          {
               $error = array('error' => $this->upload->display_errors());
               $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">'.  $this->upload->display_errors() .'</div>');
               redirect('#reg');
          }    
          else
          {
               $data = array('upload_data' => $this->upload->data());
               $nombreimagen = $this->upload->data('file_name');
               $ifex= $this->login_model->insert_data($matricula, $nombre, $apellido, $email, $password, $nombreimagen);
               //$sql ="INSERT INTO datos_alumno VALUES (" . "'" . $matricula . "','" . $nombre . "','" . $apellido . "','" . $email . "','" . $password . "','"  . $nombreimagen . "');";
               //$query= $this->db->query($sql); 
               if($ifex= 1)
               {
                    $this->session->set_flashdata('msg3', '<div class="alert alert-danger text-center">Esta direccion de correo ya fue registrada.</div>');
                   redirect('#reg'); 
               }
               else if($ifex=2)
               {
                  redirect('home');  
               }
               
          }
     }  

     public function user_data_submit() 
          {
               $data = array(
                     'username' => $this->input->post('test1'),
                     'pwd'=>$this->input->post('test2')
               ); 
               echo json_encode($data);
          } 

}