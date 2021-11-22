<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [];
        $data['polls'] = $this->dbModel->getActivePolls();
        $this->load->view('home', $data);
    }

    public function pollVote($poll_id = null, $vote = 'No') {
        if(!empty($poll_id) && !empty($vote)){
            $vote = ($vote == "Yes") ? 1:0;
            $this->dbModel->addPollVote([
                'poll_id' => $poll_id,
                'ip' => (!empty($_SERVER['SERVER_ADDR'])?$_SERVER['SERVER_ADDR']:""),
                'vote' => $vote,
                'created_on' => date("Y-m-d H:i:s")
            ]);
            setMessage("Thank you for voting!");
        }
        redirect(base_url());
    }

    public function login() {
        $data = [];
        if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
            $user = $this->dbModel->loginUser($_POST['email'], $_POST['pwd']);
            if(!empty($user['user_id'])){
                $_SESSION['USER_ID'] = $user['user_id'];
                $_SESSION['USER_NAME'] = $user['first_name'];
                $_SESSION['EMAIL'] = $user['email'];
                $_SESSION['ROLE'] = $user['role'];
                redirect(base_url('admin/'));
            } else {
                setError("Please enter valid email or password");
            }
        }
        $this->load->view('login', $data);
    }

    public function signup() {
        $data = [];
        if (!empty($_POST['first_name'])) {
            $pdata = [];
            $pdata['first_name'] = !empty($_POST['first_name']) ? $_POST['first_name'] : "";
            $pdata['last_name'] = !empty($_POST['last_name']) ? $_POST['last_name'] : "";
            $pdata['email'] = !empty($_POST['email']) ? $_POST['email'] : "";
            $pdata['pwd'] = !empty($_POST['pwd']) ? $_POST['pwd'] : "";
            $this->dbModel->addUser($pdata);
            redirect(base_url());
        }
        $this->load->view('signup', $data);
    }
    
    public function forget() {
        $data = [];
        $this->load->view('forget', $data);
    }

}