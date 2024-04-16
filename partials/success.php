<?php 

  // Apro la sessione
  session_start();
  // Verifico se la password è arrivata correttamente 
  if(!isset($_SESSION['gen_password'])){
    // Se non è arrivata torniamo alla pagina principale
    header('Location: ../index.php');
  }else{
    $password = $_SESSION['gen_password'];
  }

  include_once __DIR__ . '/head.php';
  include_once __DIR__ . '/header.php';

?>
  <body>
  <div class="container-xl my-5">
    <h2 class="text-center my-5">Questa è la tua password generata:</h2>
    <h4 class="text-center">
      Password: <span class="fw-bold "><?php echo $password ?></span>
      
    </h4>
  </div>
  </body>
</html>
