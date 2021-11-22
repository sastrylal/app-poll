<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBase extends MY_Controller {

    public $header_data = [];
    public $user = [];

    public function __construct(){
        parent::__construct();
        $this->load->helper('common');
        $this->load->model("AdminModel", "adminModel", TRUE);
        $this->_user_check();
    }

    public function _user_check(){
        if (!empty($_SESSION['USER_ID'])) {
            $this->user['user_id'] = $_SESSION['USER_ID'];
            $this->user['user_name'] = $_SESSION['USER_NAME'];
            $this->header_data['user'] = $this->user;
        }else{
            redirect(base_url('login'));
        }
    }

    public function _template($page_name, $data = []){
        $data = $data + $this->header_data;
        $this->load->view("header", $data);
        $this->load->view($page_name, $data);
        $this->load->view("footer");
    }

    public function _iframe($page_name, $data = []){
        $data = $data + $this->headder_data;
        $this->load->view("iframe_header", $data);
        $this->load->view($page_name, $data);
        $this->load->view("iframe_footer");
    }

}