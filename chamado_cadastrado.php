<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Chamado Registrado</title>
</head>
    <style>
  .card-home {
    padding: 30px 0 0 0;
    width: 100%;
    margin: 0 auto;
    }
  .configdiv{
    margin-right: 28px;
    margin-bottom: 28px;
    padding: 10px;
    text-align: center;
  }
    </style>
  </head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
         App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
            SAIR
          </a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header" style="text-align: center; font-weight:600">
              O seu chamado foi registrado com sucesso, aguarde o atendimento
            </div>
            <div class="card-body">
              <div class="row">
                </div>
                <div class="col-12 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="verificado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            
    </div>

    <div class="container">
        <div class="col-md-3">
            <div class="configdiv">
                <a button class="btn btn-md btn-warning btn-block" href="home.php">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</body>
</html>