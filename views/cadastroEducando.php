<?php 

require_once './../config/crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Educando</title>
    <link rel="stylesheet" href="../assets/cssgeral/gedia/style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

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

                    <div class="telaP col-md-9 col-lg-9 col-sm-12 px-auto mx-auto">

                        <div class="container">
                            <div class="row mt-0">
                                <div class="col-sm-10 offset-sm-1  p-2">
                                    <h1 class="texto text-center mt-3">Formul&aacute;rio do Educando</h1>
                                    <form action="../controller/cadastroEducando.php" method="post" class=" row p-3">
                                        <p>Preencha os Campos</p>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fa-solid fa-circle-user icon"></i></span>
                                            <input type="text" name="nome" placeholder="Nome (UserName) *" class="form-control inputs ">
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fas fa-user icon"></i></span>
                                            <input type="text" name="apelido" placeholder="Apelido *" class="form-control inputs  ">
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fa-solid fa-house-user icon"></i></span>
                                            <input type="text" name="bairro" placeholder="Bairro" class="form-control inputs">
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fa-sharp fa-solid fa-house icon"></i></span>
                                            <input type="text" name="quarteirao" placeholder="Quarteirao" class="form-control inputs">
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fa-regular fa-calendar-check icon"></i></span>
                                            <input type="date" name="data_nascimento" placeholder="Data Nascimento" class="form-control inputs ">
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text inputs"><i class="fa-solid fa-circle-user icon"></i></span>
                                            <select class="form-select inputs " name="encarregado_id">
                                                <option selected>Nome do Encarregado</option>
                                                <?php 
                                                        $encarregado = readAll("SELECT * FROM encarregado");
                                                        foreach ($encarregado as $e) {
                                                    ?>
                                                    <option value="<?php echo $e['codigo']; ?>"><?php echo $e['nome']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                            </select>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-sm-12">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text inputs"><i class="fa-sharp fa-solid fa-venus-mars icon"></i></span>
                                                <select class="form-select inputs" name="genero">
                                                    <option selected>Genero</option>
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <div class=" col-md-4 col-lg-4 col-sm-12">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text inputs"><i class="fa-sharp fa-solid fa-people-roof icon"></i></span>
                                                <select class="form-select inputs " name="turma_id">
                                                    <option selected>Nome da Turma </option>
                                                    <?php 
                                                        $turma = readAll("SELECT * FROM turma");
                                                        foreach ($turma as $t) {
                                                    ?>
                                                    <option value="<?php echo $t['codigo']; ?>"><?php echo $t['nome']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-2 ">
                                            Campos com <span class="p-1 text-danger fw-bold spanV">*</span> s&atilde;o obrigatorios
                                        </div>


                                        <div class="col-md-3 col-lg-3 col-sm-12 text-center mx-1 ">
                                            <button class="btn fw-bold btn-sm btn-outline-success w-75 h-100 but mt-3"> <a href="admin.php">Voltar</a></button>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-12 text-center  ">
                                            <button type="submit" class="btn fw-bold btn-sm btn-outline-success w-75 h-100 but mt-3">Guardar</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>

</html>