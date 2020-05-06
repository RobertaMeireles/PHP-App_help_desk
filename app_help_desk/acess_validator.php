<?php
  session_start(); //open session to use session:

  /* if there is information in $ _SESSION or $ _SESSION, be different yes, send the path to set: 
     note:isset — Determine if a variable is declared and is different than NULL*/
     
  if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'yes') {
    header('location: index.php?login=erro2');

    
  }

?>