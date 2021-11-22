<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include_once "AdminBase.php";

class Admin extends AdminBase {

    public $header_data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [];
        $this->_template("home", $data);
    }

    public function managePollVotes($poll_id = null) {
        if ($poll_id === null) {
            redirect(base_url() . "admin/managePolls/");
        }
        $data = [];
        $this->load->library('Pagenavi');
        $this->pagenavi->search_data = [
            "poll_id" => $poll_id,
            "key" => (!empty($_GET['key']) ? $_GET['key'] : "")
        ];
        $this->pagenavi->per_page = 50;
        $this->pagenavi->base_url = '/admin/managePollVotes/?';
        $this->pagenavi->process($this->adminModel, 'searchPollVotes');
        $data['PAGING'] = $this->pagenavi->links_html;
        $data['poll_votes'] = $this->pagenavi->items;
        $data['poll'] = $this->adminModel->getPollById($poll_id);
        $data['poll_id'] = $poll_id;
        $this->_template("managePollVotes", $data);
    }

    public function managePolls() {
        $data = [];
        $this->load->library('Pagenavi');
        $this->pagenavi->search_data = [
            "key" => (!empty($_GET['key']) ? $_GET['key'] : "")
        ];
        $this->pagenavi->per_page = 15;
        $this->pagenavi->base_url = '/admin/managePolls/?';
        $this->pagenavi->process($this->adminModel, 'searchManagePolls');
        $data['PAGING'] = $this->pagenavi->links_html;
        $data['polls'] = $this->pagenavi->items;
        $this->_template("managePolls", $data);
    }

    public function managePoll($poll_id = null) {
        $data = [];
        if ($this->input->post("poll_title") !== null) {
            $pdata = array();
            $pdata['poll_title'] = $this->input->post("poll_title");
            $pdata['is_active'] = $this->input->post("is_active");
            if (!empty($_POST['poll_id'])) {
                $this->adminModel->updatePollById($this->input->post("poll_id"), $pdata);
                setMessage("Poll has been updated successfully!");
            } else {
                $this->adminModel->addPoll($pdata);
                setMessage("Poll has been added successfully!");
            }
            redirect(base_url() . "admin/managePolls/");
        }
        if ($poll_id) {
            $data['poll'] = $this->adminModel->getPollById($poll_id);
        }
        $this->_template("managePollForm", $data);
    }

    public function managePollDel($poll_id = null) {
        $this->adminModel->deletePollById($poll_id);
        redirect(base_url() . "admin/managePolls/");
    }

    public function logout() {
        $_SESSION = [];
        redirect(base_url());
    }

}

?>