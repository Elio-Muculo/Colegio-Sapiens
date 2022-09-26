<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Professor</title>
    <link rel="stylesheet" href="../assets/cssgeral/gedia/dashProfessor.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <div class="container-fluid header clearfix">
          <!-- <h4 class="text-white float-start mx-3">CSP</h4>
        <p class="text-white float-end mx-5">Nome do Professor<i class="fa-solid fa-circle-user"></p> -->
         
           <div class="float-start text-white mx-2 ">
               <h3 >C<span class="fw-bold ">SP</span></h3>
            </div>

            <div class="float-end text-white fw-bold mx-2">
              <p>Nome do Professor<i class="fas fa-user"></i></p>
            </div>
    </div>

    <div class="container-fluid bod d-flex flex-row py-0 ">

        <div class="container col-lg-3 d-flex flex-column menu text-center contai">
        <h5 class="mt-3 text-white me-5 p-3">Selecione uma op&ccedil;&atilde;o</h5>
           <div class="links">
           <a href="agendarreuniao.php"><span clas="input-group-text"><i class="fa-regular fa-calendar"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Agendar reuniao</a>
           <a href="lancarNotas.php"><span clas="input-group-text"><i class="fa-regular fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Lancar notas</a>
           <a href="visualizarDados.php"><span clas="input-group-text"><i class="fa-solid fa-calendar-week"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Visualizar dados</a>
           <a href="solicitarReuniao"><span clas="input-group-text"><i class="fa-regular fa-lightbulb"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Solicitar reuniao</a>
           <a href="confirmarReuniao"><span clas="input-group-text"><i class="fa-regular fa-lightbulb"></i>&nbsp;&nbsp;</span>Confirmar reuniao</a>
           
           <div class="logout">
              <a href="../index.php" class="logout fw-bold">Sair</a>
            </div>
            
           </div> 
           
        </div>
        

        <div class="container col-lg-9 img d-flex justify-content-between">
          
           <div>
                <img src="../assets/img/alunos1.jpeg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="../assets/img/alunos2.jpeg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="../assets/img/alunos4.jpeg" alt="" class="img-fluid">
            </div>

           


        </div>
    </div>

</body>

</html>