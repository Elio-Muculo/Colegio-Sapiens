<!DOCTYPE html>
<html >
<head>

<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqui fica o seu Titulo</title>

 <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">

</head>


    <body>


    <div class="container-fluid">
   

        <div class="col-sm-6 offset-sm-3 card bg-light p-1">


            <h5>cSP</h5>

            <h6>Nome do professor</h6>
        </div>

    




</div>



                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-sm-6 offset-sm-3 card bg-light p-5">
                            
                            <h1 >Agendar Reunião</h1>


                            
                            <form action="controller/" method="post">
                                <div class="mb-3">
                                    
                                    <input type="date" name="datatime"  class="form-control"id="" >
                               
                                   

                                </div> 
                                <div class="mb-3">
                                   
                                  <select name="Participantes" id="" class="form-select"  >

                                        <option value="1">Selecione os participantes</option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                        <option value="4"></option>
                                        <option value="5"></option>
                                        <option value="6"></option>
                                        <option value="7"></option>
                                        <option value="8"></option>
                                        <option value="9"></option>



                                     </select>



                                </div>
        
                                <div class="mb-3">
                                
                                   

                                     <input type="text" name="assunto" placeholder="Assunto da reunião" class="form-control"id="" >
                            
                                   

                                </div> 
        
        
                                <select name="Tipo de reunião" id="" class="form-select my-3">
                                        <option value="1">Tipo de Reunião</option>
                                        <option value="2">Urgente</option>
                                        <option value="3">Trimestral</option>
                                        <option value="4"></option>
                                </select>


                                <div class="class">
                                    <div class="agendar">
                                        <button type="button" class="btn btn-outline-success">Agendar</button>
                                        <span>
                                            <i class="fa-solid fa-calendar-days"></i>
                                          </span> 
                                    </div>
                                    


                                </div>
                             


                                         <div class="cancelar">


                                    <button type="button" class="btn btn-outline-success">Cancelar</button>

                                </div>

                               




                            </form>
                        </div>
                    </div>
                </div>



                </div>
            </div>
        </div>

      
       




    </body>
</html>