<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Reunião</title>
   
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/cssgeral/edmilson/style.css">
</head>

<body>

                    <div class="alinhamento">
                            <div class="alinhamnento4">
                               cSP 
                            </div>
                                 
                            <div class="alinhamento3">
                             
                                    Nome do Professor
                                
                            </div>

                    </div>

    <div class="container-fluid">
        <div class="centro w-40">
            <div class="w-40">
                <div class="row">
                    

                    <div class="telaP col-md-9 col-lg-9 col-sm-12 px-auto mx-auto">


            
                        <h1 class="texto text-center mt-5">Agendar Reunião</h1>
                        <form action="controller/" method="post" class=" row p-3">
                            
                <div class="alinhamento1" tyle="background-color: #d9d9d9"  >

                 
<p></p>
                    
                            <div class=" col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                    <input type="date" class="form-control" name="dete" placeholder="data da Reunião" style="width: 80%">
                                </div>
                            </div>

<p></p>

                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fas fa-user"></i></i></span>
                                    <select class="form-select" name="participantes" placeholder="Selecione os Participantes" style="width: 80%">
                                        <option selected>Selecione Participantes</option>
                                        <option>Turma A</option>
                                        <option>Turma B</option>
                                    </select>
                                </div>
                            </div>
<p></p>
                            
                            <div class=" col-md-4 col-lg-4 col-sm-12">
                                <div class="input-group mb-3" style="width: 185%">
                                    <span class="input-group-text"><i class="fa-regular fa-calendar-check"></i></span>
                                    <input type="text" class="form-control" name="assunto" placeholder="Assunto da Reunião" style="width: 80%">
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
                                <button class="btn" >Canselar</button>
                            </div>
                       
                   
                       


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
