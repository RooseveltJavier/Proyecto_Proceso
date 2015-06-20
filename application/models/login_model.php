<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model

{
     private $ci=NULL;

     function __construct()
     {
          // Call the Model constructor
         
           $this->ci =& get_instance();
          parent::__construct();
       
        $this->ci->load->model('generic_model');
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
        //  $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
         // $query = $this->db->query($sql);
         // return $query->num_rows();
       
        $this->ci->db->select('*');
        $this->ci->db->from('gp_persona');
        $this->ci->db->where('usu' ,$usr);
        $this->ci->db->where('pass', $pwd);
       // $this->ci->db->where('id_dia', $id_dia);

        $query = $this->ci->db->get();

        return $query->num_rows();
     }
}