<?php
header('Content-Type: text/html; charset=utf-8');

function getClientIP()
{
  return  getenv('HTTP_CLIENT_IP')?:
  getenv('HTTP_X_FORWARDED_FOR')?:
  getenv('HTTP_X_FORWARDED')?:
  getenv('HTTP_FORWARDED_FOR')?:
  getenv('HTTP_FORWARDED')?:
  getenv('REMOTE_ADDR');
}
 ?>
