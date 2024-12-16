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

// print_r + <xmp>
function xmp_print($content)
{
  $style = "font-size: 14px; font-weight: bold;";

  echo "<xmp style='$style'>";
  print_r($content);
  echo "</xmp>";
}

// 랜덤 코드 생성 (자리 수, 문자열 포함 여부)
function generateRandomCode($length, $isIncludeStr)
{
  $endNum = "9";
  if ($length != 1) 
  {
    for ($i = 1; $i < $length; $i++) {
      $endNum .= "9";
    }
  }

  $randomInt = random_int(0, $endNum);
  $randomCode = str_pad($randomInt, $length, "0", STR_PAD_LEFT);

  return $randomCode;
}