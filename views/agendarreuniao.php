<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = 'O usuario não tem sessão iniciada no sistema.';
    header('Location: ../index.php');
}

if($_SESSION['user_permission'] == 'encarregado') {
    $_SESSION['error'] = 'O usuario não tem permissão para aceder a essa área.';
    header('Location: ../index.php');
}

require_once './../config/crud.php';



$professor = readOne("SELECT * FROM professor WHERE userId = :id", ['id' => $_SESSION['user_id']]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Reunião</title>
   
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/cssgeral/edmilson/style.css">
</head>

<body>
                
                    <div class="alinhamento py-3">
                        <div class="container ">
                            <div class="alinhamnento4">
                               cSP 
                            </div>
                                 
                            <div class="alinhamento3">
                             
                                    Bem - vindo, <?php echo $professor['nome'] . " " . $professor['apelido'] ?>
                                
                            </div>
                        </div>

                    </div>

    <div class="container-fluid">
        <div class="centro w-40">
            <div class="w-40">
                <div class="row">
                    

                    <div class="telaP col-md-9 col-lg-9 col-sm-12 px-auto mx-auto">


            
                        <h1 class="texto text-center mt-5">Agendar Reunião</h1>
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
                        <form action="./../controller/agendarreuniao.php" method="post" class=" row p-3">
                            
                <div class="alinhamento1" tyle="background-color: #d9d9d9"  >

                 
<p></p>
                    
                            <div class=" col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                    <input type="date" class="form-control" name="data"  style="width: 80%" required>
                                </div>
                            </div>

<p></p>

                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <select class="form-select" name="encarregado_cod" placeholder="Selecione os Participantes" style="width: 80%">
                                        <option selected>Selecione Participantes</option>
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
                            </div>
<p></p>
                            
                            <div class=" col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fa-regular fa-calendar-check"></i></span>
                                    <input type="text" class="form-control" name="assunto" required placeholder="Assunto da Reunião" style="width: 80%">
                                </div>
                            </div>
<p></p>

                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fa-duotone fa-person-military-to-person"></i></span>
                                    <select class="form-select" name="tipo" style="width: 80%">
                                        <option selected>Tipo de Reunião</option>
                                        <option>Ordinaria</option>
                                        <option>Extra-ordinaria</option>
                                    </select>
                                </div>
                            </div>

                            

                    </div>
                        
<p></p>   
<br>     
                     
                        
                            <div class="col-md-3 col-lg-3 col-sm-12 botao text-center " style="margin-left: 27%">
                                <button type="submit" class="btn"  >Agendar</button>
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-12 botao text-center mx-3" style="margin-left: 77%">
                                <a href="./dashboardProfessor.php"><button type="button" class="btn" >Voltar</button></a>
                            </div>
                       
                   
                       


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="./../assets/cssgeral/dadiva/all.min.js"></script>
</body>

</html>
