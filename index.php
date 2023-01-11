
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php  
      include ("style.php");
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Cadastro</title>
</head>
<body>
  
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-white text-hover text" aria-current="page" href="index.php">Home</a>
            <a class="nav-link text-white text-hover text" href="?page=novo">Cadastro de usuários</a>
            <a class="nav-link text-white text-hover text" href="?page=listar">Listar Usuários</a>
          </div>
        </div>
      </div>
    </nav>
</header>



    <div class="container">
      <div class="row">
        <div class=" col mt-5">
            <?php
              include("config.php");
              switch (@$_REQUEST["page"]) {
                case 'novo':
                  include ("novo-cadastro.php");
                  break;
                case 'listar':
                  include("listar-usuario.php");
                  break;
                case 'salvar':
                  include("salvar-usuario.php");
                  break;
                  case 'editar':
                    include("editar-usuario.php");
                    break;        
                default:
                  print "<h1></h1>";
                  break;
              }
            ?>
        </div>
      </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>