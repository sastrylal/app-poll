<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include_once "MyBase.php";

class My extends MyBase {

    public $header_data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [];
        $this->_template("home", $data);
    }

    public function logout() {
        $_SESSION = [];
        redirect(base_url());
    }

}

?>