<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/cssgeral/dadiva/logprof.css">
    <link rel="stylesheet" href="./assets/cssgeral/dadiva/all.min.css">
    <title>Login</title>
</head>

<body>


    <div class="container py-3">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 left p-0">
                <div class="logo">
                    <img src="./assets/img/logo.png" alt="" class="img">
                </div>
                <div class="info d-sm-none d-md-block">
                    <div class="fw-bold text-center text-white fs-1 my-5">
                        Bem Vindo
                    </div>
                    <div class="">
                        <p class="p-4 text-center text-white text-p ">Mantenha-se actualizado <br> sobre as noticias da<br> Escola e a informa&ccedil;&atilde;o<br> do seu educando</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-lg-8 box p-0">
                <div class="title text-center fw-bold">
                    <h3>Faca o Login</h3>
                </div>
                <form action="./controller/Controllerlogin.php" method="POST" class="m-5 p-4">
                    <div class="text-center">Preencha os campos</div>
                    <div class="input-group mb-3">
                        <span class="input-group-text inputs"><i class="fas fa-envelope icon"></i></span>
                        <input type="text" name="nome" class="form-control inputs" placeholder="Seu email/Nome">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text inputs"><i class="fas fa-lock icon"></i></span>
                        <input type="password" name="senha" class="form-control inputs" placeholder="Senha">
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input"> <label for="lembrarcod"> Lembrar codigo</label>
                        
                        
                    </div>
                                                                           <br><br><br>
                    <div class="text-center mb-4">
                
                <button type="submit" value="Entrar" class="btn btn-primary" id="btnlog"><i class="fas fa-key ic"></i> Login</button>
    
 
                 </div>
 
 
               <div class=" text-center group mb-3">
     
                     <a  id="linklog"class="text-center  " href="">Esqueci minha senha</a>
                    </div>
             </div>
                </form>
              
        </div>
    </div>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/cssgeral/dadiva/all.min.js"></script>
</body>

</html>