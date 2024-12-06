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

function xmp_print($content)
{
  $style = "font-size: 14px; font-weight: bold;";

  echo "<xmp style='$style'>";
  print_r($content);
  echo "</xmp>";
}