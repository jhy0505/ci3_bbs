<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model 
{
  public function __construct()
  {
    parent::__construct();

    /*
      // members 테이블
      member_seq
      member_code
      member_id
      member_pw
      member_level
      member_nickname
      member_email
      member_mobile
      is_deleted
      deleted_date
      created_date
    */
  }

  // 연결 확인 함수
  public function test_member_model()
  {
    return "ok";
  }

  // 멤버 추가
  public function insertMember($data)
  {
    $this->db->insert('members', $data);

    log_message("error", print_r($this->db->last_query(), true));

    return $this->db->insert_id();
  }
}