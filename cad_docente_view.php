<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
 
    <title>Escola</title>
  </head>
  <body>
    <?php
      require_once "./menu.html";
    ?>
 
 
    </div>
 
    <div class="container">
     <div class="row">
      <h1>Cadastro de Docentes</h1>
 
 
 
      <div class="col-8">
 
        <form class="form-floating" action="./controller/cad_docente.php" method="POST">
             
 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome">
                   </div>
 
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
                    </div>
 
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Especialização</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="especializacao">
                    </div>  
 
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                      </div>
                   
        </form>
       </div>
      </div>
    </div> <!--fim do caontainer-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
   
    <?php
          require_once "./alertas.php";
    ?>
  </body>
</html>