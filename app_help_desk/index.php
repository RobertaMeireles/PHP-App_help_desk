<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post"> <!--action para onde vai as informaçoes ao fazer o submit-->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Senha">
                </div>



                <!--INFORMATION THAT EMAIL OR PASSWORD DOES NOT EXIST:
                
                  if $_GET['login']) && $_GET['login'] == 'erro' (Write Invalid username or password)
                  it work because in valid_login is sending erro to the SET-->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                  <div class = "text-danger">
                    Invalid username or password
                  </div>

                <? } ?>
              

                <!--SO THAT PAGES ARE NOT VIEWED WHEN THERE IS NO CORRECT LOGIN: 

                if $_GET['login']) && $_GET['login'] == 'erro2' (You need to login to access the pages)
                it work because in valid_login is sending erro to the SET-->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                  <div class = "text-danger">
                    You need to login to access the pages
                  </div>

                <? } ?>




                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>