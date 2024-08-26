<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function redirect($url = "")
{
  if ($url === "") {
    $url = "/";
  }

  echo "
    <script type='text/javascript'>
      window.location.replace('$url');
    </script>
  ";

  exit;
}