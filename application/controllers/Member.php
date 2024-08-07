<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller 
{
  public function _remap($method)
  {
    $this->load->view("_include/head");
    $this->{"{$method}"}();
    $this->load->view("_include/foot");
  }

	public function login()
	{
		$this->load->view("member/login");
	}

  public function progressLogin()
  {
    // 로그인 진행 함수
  }
}
