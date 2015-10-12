<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insert_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function insert_data($mat, $nom, $apellidos, $email, $password)
     {
          $sql = "INSERT INTO datos_alumno values = ('" . $mat . "' , '" . $nom . "' , '" . $apellidos . "' , '" . $email . "' , '" . $password . "');";
          $query = $this->db->query($sql);
          $sql = "select * from datos_alumno where matricula = '" . $mat . "' and password = '" . $password . "';";
          $query2 = $this->db->query($sql);
          return $query2->num_rows();
     }
}?>