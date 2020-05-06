<?php
  require_once "acess_validator.php"; //require_once to copy information from acess_validator.php file
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Register
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="register.php">
                    <div class="form-group">
                      <label>Title</label>
                      <input name="title" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Category</label>
                      <select name="category" class="form-control">
                        <option>Options</option>
                        <option>Printer</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Network</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrition</label>
                      <textarea name="descrition" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Register</button>
                      </div>
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Home</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>