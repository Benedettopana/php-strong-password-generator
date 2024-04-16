<?php
function getPassword($n, $chose, $ripetizione) {
  $ripeti_carattere = true;
  if($ripetizione == 'false'){
    $ripeti_carattere = false;
  }

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
      if(!$ripeti_carattere){
        if(!str_contains($randomString, $characters[$index])){
          $randomString .= $characters[$index];
        }else{
          $i--;
        }
      }else{
        $randomString .= $characters[$index];
      }
      
  }
  return $randomString;
}


?>