<!doctype html>
<html lang="pt-BR">
 
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <title>Escola</title>
</head>
 
<body>
 
    <?php
      require_once "./menu.html";
    ?>
 
 
  </div>
 
 
  <!--Cadastro do aluno-->
 
  <div class="row container">
    <h1>Cadastro do Aluno</h1>
 
 
 
    <div class="col-8">
 
      <form class="form-floating" action="./controller/cad_aluno.php" method="POST">
           
 
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nome Aluno</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome">
                 </div>
 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Rua</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="rua">
                  </div>
 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="bairro">
                  </div>              
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="cidade">
                  </div> 

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="estado">
                  </div>              
 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">País</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="pais">
                  </div>  
 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
                  </div>  
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cep</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="cep">
                  </div>
<<<<<<< HEAD
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone Celular</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="tel1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="tel2">
                  </div>
=======
                   
>>>>>>> c47b1710a452aa07ca8c6dc8858e60512306f8fb
                  <button type="submit" class="btn btn-dark">Cadastrar</button>                  
 
      </form> 
         
  </div> <!-- Fim da DIV principal -->
 
 <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
   crossorigin="anonymous"></script> -->

   <?php
   require_once "./alertas.php";
?>                
        
        

</body>

</html>   
 