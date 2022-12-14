<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = 'O usuario não tem sessão iniciada no sistema.';
    header('Location: ../index.php');
}

if($_SESSION['user_permission'] == 'encarregado' || $_SESSION['user_permission'] == 'professor') {
    $_SESSION['error'] = 'O usuario não tem permissão para aceder a essa área.';
    header('Location: ../index.php');
}

require_once './../config/crud.php';



$admin = readOne("SELECT * FROM usuario WHERE codigo = :id", ['id' => $_SESSION['user_id']]);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/cssgeral/dadiva/admin.css">
    <link rel="stylesheet" href="../assets/cssgeral/dadiva/all.min.css">
    <title>Administrador</title>
</head>

<body class="body">
    <nav class="navbar navbar-expand-lg bg-nav container">
        <div>
    <a class="navbar-brand CSP"><h4>CSP</h4></a></div>
    
  
        <div class="container-fluid">
      
            <!--offcanvas trigger-->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
             <span> <i class="fas fa-bars"></i></span>
             
            </button>
            <!--offcanvas trigger-->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span> <i class="fas fa-bars"></i></span>
            
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent s" >
            
                  <?php 
                if (isset($_SESSION['msg'])) :
                    echo "<h6>" .$_SESSION['msg']."</h6>";
                    unset($_SESSION['msg']);
                endif;
            ?>
          
           
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#" role="button">
                             <i class="fas fa-user"></i>
                             Bem - vindo, <?php echo $admin['username'] ?>
                        </a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--o menu lateral comeca aqui-->
    <div>

        <div class="offcanvas offcanvas-start sidebar-nav bg-sidebar nav" tabindex="-1" id="sidebar">

            <div class="offcanvas-body p-0">
                <div class="fechar">
                    <button class="btn float-end text-white btn-fechar px-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                        <span><i class="fas fa-times"></i></span>
                       </button>

                </div>
                <div class="p-0 mt-5">
                    <div class="text-white text-center">Selecione uma opção</div>
                    <div class="p-4 text-center">
                        <a href="professor.php"  class="btn btn-menu mb-2"><i class="fas fa-download me-2"></i> Cadastrar Professor</a>
                        <a href="cadastroEducando.php"  class="btn btn-menu mb-2"><i class="fas fa-download me-2"></i> Cadastrar Educando</a>
                        <a  href ="formularioEncarregado.php" class="btn btn-menu"><i class="fas fa-download me-2"></i> Cadastrar Encarregado</a>
                    </div>
                    <div class="mt-5 p-5">
                        <a href="./../controller/sair.php" class="btn btn-menu mt-5">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fim do menu lateral-->

    <!--o conteudo da pagina fica aqui-->
    <main class="p-1">
    <img src="../assets/img/admin.jpeg" alt=""  width="100%" class="img">
  
    </main>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/cssgeral/dadiva/all.min.js"></script>
</body>

</html>