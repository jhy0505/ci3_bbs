<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberAjax extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array("function"));
    $this->load->model(array("Member_model"));
  }

  public function checkDuplicateId()
  {
    log_message("error", "MemberAjax > checkDuplicateId 진입");
    // log_message("error", print_r($this->input->post(), true));

    $memberId = $this->input->post("memberId");

    // TODO: model과 연결해, 아이디 중복 검사 함수 제작
    $test = $this->Member_model->test_model();

    return false;
  }
}