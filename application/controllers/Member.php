<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array("function"));
  }

  public function _remap($method)
  {
    $this->load->view("_include/head");
    $this->{"{$method}"}();
    $this->load->view("_include/foot");
  }

  // 회원가입 페이지 이동
  public function signUp()
  {
		$this->load->view("member/signUp");
  }

  // 회원가입 진행
  public function progressSignUp()
  {
    var_dump("php - progressSignUp");
    
    if ($this->input->post()) {
      var_dump("isset progressSignUp");  
    } else {
      redirect();
    }
  }

  // 로그인 페이지 이동
	public function signIn()
	{
		$this->load->view("member/signIn");
	}

  // 로그인 진행
  public function progressSignIn()
  {
    
  }

  // 로그아웃
  public function signOut()
  {
    // 로그아웃 코드 작성
  }
}
