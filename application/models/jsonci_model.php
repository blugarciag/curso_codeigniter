<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Jsonci_model extends CI_MODEL
{

    public function __construct()
    {

        parent::__construct();

    }

    public function alumnos()
    {

        return $this->db->get('datos_alumno')->result();

    }

}
//end model