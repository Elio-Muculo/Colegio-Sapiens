<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}



require_once './../config/crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Encarregado</title>
    <link rel="stylesheet" href="../assets/cssgeral/gedia/style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style>

</style>

<body>
    <div class="container-fluid">
        <div class="centro w-40">
            <div class="w-40">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12 p-0">
                        <div class="telaVerde">
                            <div class="logo">
                                <img src="../assets/img/logo.png" alt="logotipo" class="img">
                            </div>

                            <div class="msg py-5">

                                <p class="text-center px-5 mt-4 text-white ">
                                    O cadastro no sistema nao permitira o acesso a
                                    nenhum dado sigiloso do usuario,
                                    e nao sera utlizada nenhuma informacao do login
                                    e senha do mesmo para se conectar
                                    em Seu nome e publicar qualquer conteudo por ele
                                </p>

                            </div>
                        </div>

                    </div>
                        <!-- formulario  do encarregado-->

                    <div class="telaP col-md-9 col-lg-9 col-sm-12 px-auto mx-auto">
                        <div class="container">
                            <div class="row mt-0">
                                <div class="col-sm-10 offset-sm-1  p-2">
                                    <h1 class="texto text-center mt-3">Formul&aacute;rio do Encarregado</h1>
                                                                            <?php 
                                            if (isset($_SESSION['error'])) { ?>
                                                <div class="alert alert-danger alert-dismissible mt-5 w-75 mx-auto align-items-center justify-content-center" style="height: 50px; line-height: 15px;">
                                                    <button class="btn-close" data-bs-dismiss='alert'></button>
                                                    <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                                                </div>
                                        <?php } ?>
                                        <?php 
                                            if (isset($_SESSION['success'])) { ?>
                                                <div class="alert alert-success alert-dismissible mt-5 w-75 mx-auto align-items-center justify-content-center" style="height: 50px; line-height: 15px;">
                                                    <button class="btn-close" data-bs-dismiss='alert'></button>
                                                    <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
                                                </div>
                                        <?php } ?>
                                    <form action="./../controller/encarregado.php" method="post" class=" row p-4 ">
                                        <p>Preencha os Campos</p>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                                            <input type="text" name="nome" placeholder="Nome (UserName)" class="form-control" required>
                                        </div>
                        
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" name="apelido" placeholder="Apelido" class="form-control" required>
                                        </div>
                                        
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fas fa-lock icon"></i></span>
                                            <input type="password" name="senha" placeholder="Senha" class="form-control" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                            <input type="text" name="telefone" placeholder="Numero de Telefone" class="form-control" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fas fa-light fa-envelope"></i></span>
                                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                                        </div>
                                        
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-house-user"></i></span>
                                            <input type="text" name="bairro" placeholder="Bairro" class="form-control" required>
                                        </div>
                                    
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-house"></i></span>
                                            <input type="text" name="quarteirao" placeholder="Quarteirao" class="form-control" required>
                                        </div>
                                        
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-regular fa-calendar-check"></i></span>
                                            <input type="date" name="data_nascimento" placeholder="Data Nascimento" class="form-control" required>
                                        </div>
                                    

                                        <div class="col-md-3 col-lg-3 col-sm-12">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-sharp fa-solid fa-venus-mars"></i></span>
                                                <select class="form-select" name="genero" required>
                                                    <option selected>Genero</option>
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-2 ">
                                            Campos com <span class="p-1 text-danger fw-bold spanV">*</span> s&atilde;o obrigatorios
                                        </div>


                                        <div class="col-md-3 col-lg-3 col-sm-12 text-center mx-1">
                                            <button class="btn fw-bold btn btn-sm btn-outline-success w-75 h-100 but mt-3"> <a href="./admin.php"> Voltar</a></button>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-12  text-center ">
                                            <button type="submit" class="btn fw-bold btn btn-sm btn-outline-success w-75 h-100 but mt-3">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="./../assets/cssgeral/dadiva/all.min.js"></script>
</body>

</html>