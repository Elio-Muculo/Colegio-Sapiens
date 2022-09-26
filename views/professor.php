<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/cssgeral/dadiva/logprof.css">
    <link rel="stylesheet" href="../assets/cssgeral/dadiva/all.min.css">
    <title>Cadastro Professor</title>
</head>

<body>


    <div class="h-100">
        <div class="row h-100 m-0">
            <div class="col-md-4 col-sm-12 col-lg-4 left p-0">
                <div class="logo">
                    <img src="../assets/img/logo.png" alt="" class="img">
                </div>
                <div class="info d-sm-none d-md-block">

                    <div class="">
                        <p class="p-4 text-center text-white text-p ">O cadastro no sistema <br> n&atilde;o permitira o cesso a<br> nenhum dado sigiloso do<br> usuario,e n&atilde;o sera <br>
                    utilizada nenhuma<br> Informa&ccedil;&atilde;o do login e <br >senha do mesmo para se <br> conectar em seu nome e  <br> publicar qualquer <br> conteudo por ele</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-lg-8 box p-0 py-4">
                <div class="title text-center fs-1 ">
                    Formul&aacute;rio do Professor
                </div>
                <form action="../controller/Cadastro_professor.php"  method ="POST" class="p-4 form">
                    <div class="text-color">Preencha os campos</div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-user-circle icon"></i></span>
                        <input type="text" name="nome" class="form-control inputs" placeholder="Nome (UserName) *"  required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-user icon"></i></span>
                        <input type="text" name="apelido"class="form-control inputs" placeholder="Apelido *" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-lock icon"></i></span>
                        <input type="password" name="senha" class="form-control inputs" placeholder="Senha *" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-sort-numeric-up-alt icon"></i></span>
                        <input type="text" name="numero_BI" class="form-control inputs" placeholder="Número de BI *" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-home me-2 icon"></i></span>
                        <input type="text" name="quarterao" class="form-control inputs" placeholder="Quarterão"  >
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-graduation-cap me-2 icon"></i></span>
                        <input type="text" name="formacao"class="form-control inputs" placeholder="Formação*" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-paste icon"></i></span>
                        <input type="text" name="experiencia" class="form-control inputs" placeholder="Experiência">
                    </div>
                    <div class="input-group mb-4 w-4">
                        <span class="input-group-text inputs"><i class="fa-sharp fa-solid fa-venus-mars icon"></i></span>
                        <select name="genero" id="" class="form-select">
                            <option value="0">Gênero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-2 text-color">
                        Campos com <span class="p-1 text-danger fw-bold">*</span> sao obrigatorios
                    </div>
                    
                    <div class="group mb-3">

                    <a class="  botoesprf  btn btn-sm btn-outline-success me-2"  href="../views/admin.php"> Voltar</a>
                  <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                 <button type="reset" class="  botoesprf  btn btn-sm btn-outline-success me-2"  > Cancelar</button> 
                  <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                      <button type="submit" class="  botoesprf  btn btn-sm btn-outline-success me-2" > Guardar </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/cssgeral/dadiva/all.min.js"></script>
</body>

</html>