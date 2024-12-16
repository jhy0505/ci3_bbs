<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller 
{
  public function __construct()
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
    // var_dump("php - progressSignUp");

    // xmp_print($this->input->post());
    
    if ($this->input->post()) 
    {
      // var_dump("isset progressSignUp");

      $memberId = $this->input->post("member_id");
      $memberPw = $this->input->post("member_pw");
      $memberName = $this->input->post("member_name");
      $memberNickname = $this->input->post("member_nickname");
      $memberEmail = $this->input->post("member_email");
      $memberMobile = $this->input->post("member_mobile");

      // 랜덤 코드 생성
      $randomCode = generateRandomCode(10, false);
      // log_message("error", $randomCode);

      $insertData = array(
        "member_code"     => $randomCode,
        "member_id"       => $memberId,
        "member_pw"       => $memberPw,
        "member_nickname" => $memberNickname,
        "member_email"    => $memberEmail,
        "member_mobile"   => $memberMobile,
      );

    } 
    else {
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
