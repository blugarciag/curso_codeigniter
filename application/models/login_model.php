<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from datos_alumno where matricula = '" . $usr . "' and password = '" . $pwd . "';";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

     function insert_data($mat, $nom, $apellidos, $email, $password, $file)
     {    
          $sql = "select * from datos_alumno where email = '" . $email . "';";
          $query2 = $this->db->query($sql);
          $query2->num_rows();
          if($query2->num_rows() > 0)
          {
               return 1;
          }
          else
          {
               $sql = "INSERT INTO datos_alumno values  ('$mat','$nom','$apellidos','$email','$password', '$file');";
               $query = $this->db->query($sql);                
               return 2; 
          }


         
     }
}?>
