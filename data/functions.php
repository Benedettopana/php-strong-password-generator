<?php
function getPassword($n, $chose) {
  // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  $minuscole = 'abcdefghijklmnopqrstuvwxyz';
  $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numeri = '0123456789';
  $speciali = '!?&%$<>^+-*/()[]{}@#_=';
  $randomString = '';
  $characters = '';
    if($chose['minuscole']) $characters .= $minuscole;
    if($chose['maiuscole']) $characters .= $maiuscole;
    if($chose['numeri']) $characters .= $numeri;
    if($chose['speciali']) $characters .= $speciali;
  for ($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $randomString .= $characters[$index];
  }
  return $randomString;
}


?>