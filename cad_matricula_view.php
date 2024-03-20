<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
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
                    <li><a class="dropdown-item" href="cad_matricula_view.php">Matrícula</a></li>
                  </ul>
                </li>
 
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="row container">
        <h1>Matrícula</h1>
   
   
   
        <div class="col-8">
   
          <form class="form-floating" action="./controller/cad_matricula.php" method="POST">
               
   
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Matrícula</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="matricula">
                     </div>
   
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Docente</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="docente">
                      </div>
   
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Curso</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="curso">
                      </div>              
               
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data da Matrícula</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="data">
                      </div>  
   
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status Matrícula</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="status">
           
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
  </body>
</html>