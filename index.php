<?php 
  require_once __DIR__ . '/data/functions.php';

// $n = $_POST['range'];
$my_password;



if(isset($_POST['range'])){
    // apro la sessione
    session_start();
    // salvo l'email in sessione
    $my_password = getPassword($_POST['range']);
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