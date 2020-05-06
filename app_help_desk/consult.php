<?php
  require_once "acess_validator.php"; //require_once to copy information from acess_validator.php file

  //array of registered 
  $registration = array();

  //open the file 
  //r to read the information
  $file = fopen('file.hd','r');

  //Do while there are lines in file:
  //feof tests for the end of a file. retorn true if the file isnt in the end, because of that put !
  while(!feof($file)){ 
    $register = fgets($file);//fgets gets line from file pointer. put it in variable $register

    //separate the array after the # character. The explode() function breaks a string into an array.
    $information = explode('#', $register); 


    /* if it is less than 3. it is because the title, category or description*/
    if(count($information) < 3){ 
      continue; //if true continue while
    }

    //display only registers was created by the logged in user
    if($_SESSION['type_id'] == 2){
      if($_SESSION['id'] != $information[0]){ //if session id is differente than $information's item 0
        continue; //if true continue while to put the register in $registration[]
      }
    }

    $registration[] = $information; //insert the registers into the array $registration

  }

  //close the file
  fclose($file);

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">LOGOFF</a>
        </li>
      </ul>
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Incidents
            </div>
            
            <div class="card-body">

        <!--Foreach to go through the array-->
            <?foreach($registration as $item){ ?>


                  <div class="card mb-3 bg-light">
                    <div class="card-body">
                      <h5 class="card-title"><?=$item[1]?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?=$item[2]?></h6>
                      <p class="card-text"><?=$item[3]?></p>
                  </div>
                </div>

          <? } ?>


              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>