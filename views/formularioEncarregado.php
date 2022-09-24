<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Encarregado</title>
    <link rel="stylesheet" href="../assets/style.css">
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

                    <div class="telaP col-md-9 col-lg-9 col-sm-12 px-auto mx-auto">
                        <div class="container">
                            <div class="row mt-0">
                                <div class="col-sm-10 offset-sm-1  p-2">
                                    <h1 class="texto text-center mt-3">Formul&aacute;rio do Encarregado</h1>
                                    <form action="controller/" method="post" class=" row p-3">
                                        <p>Preencha os Campos</p>

                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                                            <input type="text" name="nome" placeholder="Nome (UserName)" class="form-control">
                                        </div>
                        
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" name="apelido" placeholder="Apelido" class="form-control">
                                        </div>
                                        

                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                            <input type="text" name="telefone" placeholder="Numero de Telefone" class="form-control">
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-light fa-envelope"></i></span>
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-house-user"></i></span>
                                            <input type="text" name="bairro" placeholder="Bairro" class="form-control">
                                        </div>
                                    
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-house"></i></span>
                                            <input type="text" name="quarteirao" placeholder="Quarteirao" class="form-control">
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-regular fa-calendar-check"></i></span>
                                            <input type="date" name="data_nascimento" placeholder="Data Nascimento" class="form-control">
                                        </div>
                                    

                                        <div class="col-md-4 col-lg-4 col-sm-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa-sharp fa-solid fa-venus-mars"></i></span>
                                                <select class="form-select">
                                                    <option selected>Genero</option>
                                                    <option>M</option>
                                                    <option>F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <p>Campos com * s&atilde;o obrigatorios</p>

                                        <div class="col-md-3 col-lg-3 col-sm-12 botao text-center mx-3">
                                            <button class="btn fw-bold"> <a href="#"> Voltar</a></button>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-12 botao text-center ">
                                            <button type="submit" class="btn fw-bold">Guardar</button>
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
</body>

</html>