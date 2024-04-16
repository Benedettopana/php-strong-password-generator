<?php 
  require_once __DIR__ . '/data/functions.php';

// $n = $_POST['range'];
$my_password;



if(isset($_POST['range'])){
    // apro la sessione
    session_start();
    // salvo l'email in sessione
    // Passo le scelte dell'utente

    $chose = array(
    'minuscole' => false,
    'maiuscole' => false,
    'numeri' => false,
    'speciali' => false);

    if(empty($_POST['scelta'])) 
    {
      echo("DEVI SELEZIONARE ALMENO UNA SCELTA");
    } 
    else 
    {
      $counter = 0;
      foreach($_POST['scelta'] as $item){
        if($item == 'minuscole'){
          $chose['minuscole'] = true;
          $counter++;
        } 
        if($item == 'maiuscole'){
          $chose['maiuscole'] = true;
          $counter++;
        } 
        if($item == 'numeri'){
          $chose['numeri'] = true;
          $counter++;
        }
        if($item == 'speciali'){
          $chose['speciali'] = true;
          $counter++;
        } 

        if($counter == 0){
          $chose['minuscole'] = true;
          $chose['maiuscole'] = true;
          $chose['numeri'] = true;
          $chose['speciali'] = true;
        }

        // var_dump($chose);
      }
    }
    // if(!$_POST['minuscole']){

    // }
    $my_password = getPassword($_POST['range'], $chose);
    // var_dump($my_password);
    $_SESSION['gen_password'] = $my_password;

    // reindirizzo alla success.php
    header('Location: ./partials/success.php');
    // var_dump($my_password);
}

include_once __DIR__ . '/partials/head.php';
include_once __DIR__ . '/partials/header.php';
?>


  <div class="container-xl d-flex justify-content-center  my-5">
    <!-- FORM -->
    <div class="containe-md">
      <form action="index.php" method="POST">
        <label class="form-label my-5" for="customRange1">Inserisci un valore da <span   class=" fw-bold ">minimo</span> 4 ad un <span class="fw-bold">massimo<span> di 24</label>
        <div class="range" data-mdb-range-init>
          <input type="range" class="form-range" min="4" max="24" name="range" />     
        </div>

        <!-- Checkbox -->
        <h5 class="text-center">Selezionare che tipo di caratteri utilizzare (default tutti)</h5>
        <div class=" d-flex justify-content-center justify-content-between  my-5">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="scelta[]" value="minuscole" checked/>
            <label class="form-check-label" for="inlineCheckbox1">Minuscole</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="scelta[]" value="maiuscole" checked/>
            <label class="form-check-label" for="inlineCheckbox2">Maiuscole</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="scelta[]" value="numeri" checked/>
            <label class="form-check-label" for="inlineCheckbox3">Numeri</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="scelta[]" value="speciali" checked/>
            <label class="form-check-label" for="inlineCheckbox3">Caratteri speciali</label>
          </div>
        </div>
        <!-- /Checkbox -->
        <div class="d-flex justify-content-center my-5">
          <!-- invio -->
          <button type="submit" class="btn btn-primary me-3">Calculate</button>
          <!-- reset -->
          <button type="reset" class="btn btn-danger ms-3">Reset</button>
        </div>
      </form>
    </div>
    
    <!-- /FORM -->
  </div>


  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
  ></script>
  <script src="js/script.js"></script>
</body>
</html>