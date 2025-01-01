<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 페이지 이동 (브라우저 기록 남지 않음)
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

// 페이지 이동 (브라우저 기록 남음)
function href($url = "")
{
  if ($url === "") {
    $url = "/";
  }

  echo "
    <script type='text/javascript'>
      window.location.href('$url');
    </script>
  ";
}

// alert 후 redirect
function alertAndRedirect($msg, $url = "")
{
  if ($url === "") {
    $url = "/";
  }

  echo "
    <script type='text/javascript'>
      alert('$msg');
      window.location.replace('$url');
    </script>
  ";
}

// alert 후 href
function alertAndHref($msg, $url = "")
{
  if ($url === "") {
    $url = "/";
  }

  echo "
    <script type='text/javascript'>
      alert('$msg');
      window.location.href = '$url';
    </script>
  ";
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