<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //require_once "../libraries/login/login_model.php";
class login extends CI_Controller
{
    
private $obj_login;
     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('generic_model');
          $this->load->library('form_validation');
          
          //load the login model
          $this->load->model('login_model');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");
      
          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login/login');
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
                        // $res['dat']='angel';
                        // redirect("principal/index",$res);
                         $this->vista_principal($username);
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('Welcome/index');
                    }
               }
               else
               {
                //    redirect('login/login');
               }
          }
          
     }
     public function vista_principal($usu) {
          $res['name']=$usu;
          
         $this->load->view('dasboard/slidebar_lte',$res);
         //$this->load->view('vista_personas');
     
     }
     
}

