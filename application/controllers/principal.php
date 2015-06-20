<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of principal
 *
 * @author Usuario
 */
class principal extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        print_r($dat);
        $this->load->view('dasboard/slidebar_lte');
//        $this->load->view('dasboard/blank.html');
//        $this->load->view('dasboard/chart.html');
//        $this->load->view('dasboard/form.html');
//        $this->load->view('dasboard/table.html');
//        $this->load->view('dasboard/tab-panel.html');
//        $this->load->view('dasboard/ui.html');
        
        
        
    }
            
    //put your code here
}
