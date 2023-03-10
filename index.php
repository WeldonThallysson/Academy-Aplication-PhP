<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academy </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="./Assets/favicon.ico" >
    <link rel="stylesheet" href="./estilos/home.css"/>
</head>


<body>
    <!--header de navegacao com bootstrap e configuracao das rotas em php e o include do config do banco de dados -->

    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-md container__logo">
              <a class="navbar-brand" href="?page=home">
                 Academy
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=novo">Cadastrar Aluno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=listar">Alunos Cadastrados</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
           <div class="row">
            <div class="col mt-5">

          
             <?php
             include("config.php");
             switch (@$_REQUEST["page"]) {
                case "home":
                    include("home.php");
                    break;
                case "novo":
                    include("novo-usuario.php");
                    break;       
                case "listar":
                    include("listar-usuario.php");
                    break;
                case "salvar":
                    include("salvar-usuario.php");
                    break;
                case "editar":
                        include("editar.php");
                        break;
                             

                default:
                       include("home.php");    
                       break; 
            }
            ?>
              </div>   
            </div>
        </div>
    </header>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

