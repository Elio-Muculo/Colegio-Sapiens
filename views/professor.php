<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Style.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
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
                        <p class="p-4 text-center text-white text-p ">Mantenha-se actualizado <br> sobre as noticias da<br> Escola e a informacao<br> do seu educando</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-lg-8 box p-0 py-4">
                <div class="title text-center fs-1 ">
                    Formulario do Professor
                </div>
                <form action="" class="p-4 form">
                    <div class="text-color">Preencha os campos</div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-user icon"></i></span>
                        <input type="text" name="nome" class="form-control inputs" placeholder="Nome (UserName) *">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-user icon"></i></span>
                        <input type="text" name="apelido"class="form-control inputs" placeholder="Apelido *">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-lock icon"></i></span>
                        <input type="password" name="senha" class="form-control inputs" placeholder="Senha *">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-sort-numeric-up-alt icon"></i></span>
                        <input type="text" name="numero_BI" class="form-control inputs" placeholder="Numero do BI *">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-home me-2 icon"></i></span>
                        <input type="text" name="quarterao" class="form-control inputs" placeholder="Quarteirao">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-graduation-cap me-2 icon"></i></span>
                        <input type="text" name="formacao"class="form-control inputs" placeholder="Formacao *">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text inputs"><i class="fas fa-paste icon"></i></span>
                        <input type="text" name="experiencia" class="form-control inputs" placeholder="Experiencia">
                    </div>
                    <div class="input-group mb-4 w-4">
                        <span class="input-group-text inputs"><i class="fas fa-genderless icon"></i></span>
                        <select name="genero" id="" class="form-select">
                            <option value="0">Genero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-2 text-color">
                        Campos com <span class="p-1 text-danger fw-bold">*</span> sao obrigatorios
                    </div>
                    
                    <div class="group mb-3">
                 <button type="reset" class="  botoesprf  btn btn-sm btn-outline-success me-2"  > Canselar</button> 
                  <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                      <button type="submit" class="  botoesprf  btn btn-sm btn-outline-success me-2" > Guardar </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/all.min.js"></script>
</body>

</html>