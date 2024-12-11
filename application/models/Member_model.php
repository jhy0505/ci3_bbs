<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model 
{
  public function __construct()
  {
    parent::__construct();
  }

  public function test_model()
  {
    return "ok";
  }
}