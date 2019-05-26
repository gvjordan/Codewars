<?php

function getMiddle($text) {
  $length = strlen($text);
  return substr($text, ($length - 1) / 2, $length % 2 == 0 ? 2 : 1);
}

?>