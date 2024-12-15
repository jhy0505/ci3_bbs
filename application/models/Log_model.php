<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model 
{
  public function __construct()
  {
    parent::__construct();

    /*
      // 로그 테이블
      log_seq
      member_seq
      ip_address
      referrer_url
      action_type
      log_description
      log_data1
      log_data2
      log_data3
      user_agent
      created_date
    */
  }

  // 연결 확인 함수
  public function test_log_model()
  {
    return "ok";
  }
}