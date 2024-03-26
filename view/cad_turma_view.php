<<<<<<< HEAD
<?php

require_once('../classes/docente_class.php');
require_once('../classes/curso_class.php');

$c = new Docente();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
$cont = 0;

$d = new Cursos();
$resCurso = $d->Listar();
?>


=======
>>>>>>> c47b1710a452aa07ca8c6dc8858e60512306f8fb
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Escola</title>
  </head>

  <?php
    require_once "menu.html";
    ?>
  <body>
      <div class="row">
        <div class="container-fluid">
          <nav class="nav bg-dark p-1" >
            <!-- <li class="nav-item bg-dark">
              <a class="nav-link active text-light" aria-current="page" href="../index.php">Home</a>
            </li> -->
            <h2 class="mx-auto">
              <span class="text-light mx-auto">Cadastro de turmas</span>
            </h2>
          </nav>
        </div>
      </div>

      
      <form action="../controller/cad_turma.php" method="post"> 
       <div class="row">
          <div class="col-4"><img class="img-fluid" src="../assets/equipe.jpg" alt=""></div>
            <div class="col-6 mt-5">

              <div>
                  <label for="inputText" class="form-label">Nome da turma</label>
                  <input type="text" id="nome_turma" class="form-control" aria-describedby="textoSimples" name="nome_turma">                
              </div>
                
              <div>
                <label for="inputText" class="form-label">Curso</label> 
                <select class="form-select" aria-label="Default select example" name="id_curso">
                <option selected>Selecione</option>

                <?php foreach($resCurso as $curso){ $cont++ ?>                
                  <!-- // Loop através dos resultados da query -->        
                <option value="<?=$curso['id_curso'];?>"> <?=$curso['nome_curso'];?> </option>                    
                  <?php } ?>
                </select>         
              </div>  

              <div>
                <label for="inputText" class="form-label">Docente</label> 
                <select class="form-select" aria-label="Default select example" name="id_docente">
                  <option selected>Selecione</option>
                    <?php foreach($resultado as $docente){ $cont++ ?>                
                      <!-- // Loop através dos resultados da query -->           
                    <option value="<?=$docente["id_docente"];?>"> <?=$docente['nome_docente'];?> </option>                    
                      <?php } ?>
                    </select>          
                </div>                                                      
           
               <div class="row">
                        <div class="col-8">
                          <label for="inputText" class="form-label">Horário</label>
                          <input type="text" id="horario_turma" class="form-control" aria-describedby="textoEndereco" name="horario_turma">  
                        </div>
          
                      <div class="col-4">
                        <label for="inputText" class="form-label">Sala</label>
                        <input type="text" id="sala_turma" class="form-control" aria-describedby="textoEndereco" name="sala_turma">                
                      </div>
                  
               </div>

            
              <div class="row">          
                
                <div class="col-8">
                  <label for="inputText" class="form-label">capacidade máxima</label>
                  <input type="number" id="cap_maxima" class="form-control" aria-describedby="textoEndereco" name="cap_maxima">                
                </div>                            
              </div>         
                       
              
                <div class="col mx-auto d-grid gap-2">
                  <button class="btn btn-dark mt-5 " type="submit">Cadastrar</button>
                </div>
                      
            </form>

            
         

       </div>

       
     


    




    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <?php require_once('../alertas.php'); ?>
   
=======
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>Escola</title>
  </head>
  <body>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Escola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Cadastrar
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="cad_aluno_view.php">Aluno</a></li>
                    <li><a class="dropdown-item" href="cad_docente_view.php">Docente</a></li>
                    <li><a class="dropdown-item" href="cad_turma_view.php">Turma</a></li>
                    <li><a class="dropdown-item" href="cad_cursos_view.php">Curso</a></li>
 
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="cad_turma_view.php">Turma</a></li>
                  </ul>
                </li>
 
              </ul>
            </div>
          </div>
        </nav>
      </div>
 
      <div class="row container">
        <h1>Cadastro Turmas</h1>
   
   
   
        <div class="col-8">
   
          <form class="form-floating" action="./controller/cad_turma.php" method="POST">
               
   
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Turma</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_turma">
                     </div>
   
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Aluno</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_aluno_fk">
                      </div>
   
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Docente</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_docente_fk">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Curso</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_curso_fk">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Horario</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="horario">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sala</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sala">
                      </div>              
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Capacidade Máxima</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="capacidade_maxima">
                      </div>
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                      </div>
                   
        </form>
       </div>
      </div>
    </div> <!--fim do caontainer-->
             
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
                  require_once "./alertas.php";
            ?>                
                   
>>>>>>> c47b1710a452aa07ca8c6dc8858e60512306f8fb
  </body>
</html>