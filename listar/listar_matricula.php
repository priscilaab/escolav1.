<?php
// session_start();
// // Verificar se a sessão NÃO existe:
// if(!isset($_SESSION['dados'])){
//   header('Location: login.php');
//   exit();
// }
 
 
require_once('../classes/matricula_class.php');
 
 
$c = new Matricula();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
 
?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <title>Cadastro de Matrículas</title>
  </head>
  <body>
   
    <?php
    require_once "../view/menu.html";
    ?>
 
 
<div class="container-fluid">
 
    <div class="row justify-content-end mt-2 clearfix">
     
     
     
     
      <div class="col-1">
        <a href="sair.php" class="btn btn-danger">Sair</a>
      </div>
    </div>
   
   
   
    <table class="table mt-5">
      <thead class="thead-dark">
        <tr>
          <th>id_matricula</th>
          <th>id_docente</th>
          <th>id_curso</th>
          <th>data_matricula</th>
          <th>status_matricula</th>
         
         
        </tr>
      </thead>
      <tbody>
       
        <!-- Insira aqui as linhas da tabela com os dados das matrículas -->
       
        <!-- Exemplo de linha da tabela -->
        <?php foreach($resultado as $matricula){ ?>
          <tr>
            <td><?=$matricula['id_matricula'];?></td>
            <td><?=$matricula['id_docente'];?></td>
            <td><?=$matricula['id_curso'];?></td>
            <td><?=$matricula['data_matricula'];?></td>
            <td><?=$matricula['status_matricula'];?></td>
     
           
            <td>
           
            <!-- Botões para execução dos modais -->
              <button type="button" class="btn btn-primary" onclick="setAtualizar(<?php echo $matricula['id_matricula']; ?> , '<?php echo $matricula['id_docente']; ?>' , '<?php echo $matricula['id_curso']; ?>' , '<?php echo $matricula['data_matricula']; ?>'  , '<?php echo $matricula['status_matricula']; ?>')" data-bs-toggle="modal" data-bs-target="#atualizarMatricula">Editar</button>
              <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $matricula['id_matricula'] ?>)" data-bs-toggle="modal" data-bs-target="#removerMatricula" >Excluir</button>
             
               <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $matricula['id_matricula'] ?>)"> EXCLUIR</button> -->
             
             
             
            </tr>
            <?php } ?>
           
           
            <form action="../controller/del_matricula.php" method="post">                                                          
              <input type="text" id="id_matricula" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerMatricula"  name="id_matricula">                                    
            <!-- </td> -->
           
           
            <!-- Modal Remover Matricula -->
            <div class="modal fade" id="removerMatricula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Matrícula</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">                    
                    <p id="mod-1">Tem certeza que gostaria de remover o cadastro?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Excluir</button>
                  </div>
                </div>
                                        </div>
                                      </div>
              <!-- Fim do modal -->
                                     
                                     
              </form>                          
                           
             
 
              <form action="../controller/atualizar_matricula.php" method="post">                                                          
              <input type="text" id="id_matricula" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerMatricula"  name="id_matricula">        
 
 
 
         <!-- Modal Atualizar cadastro turma -->
            <div class="modal fade" id="atualizarMatricula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Matrícula</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
 
                  <div class="row">
                       <div class="container-fluid">
                             <nav class="nav bg-dark " >
                                <ul class="nav">
                                 </ul>
                              </nav>
                            </div>
                          </div>
 
     
 
                 <div class="row">          
 
                    <div class="col">
             
                         <form action="../controller/atualizar_matricula.php" method="post">
                         <input type="text" id="id" class="form-control d-none" aria-describedby="textoSimples" name="id" require>  
             
 
                           <div class="col mt-5">                
                                  <label for="inputText" class="form-label">Matrícula</label>
                                  <input type="text" id="id_matricula" class="form-control" aria-describedby="textoSimples" name="matricula" require>            
                          </div>
                             
                                   
                           <div class="row">
                             <div class="col-8">
                                   <label for="inputText" class="form-label">Docente</label>
                                   <input type="text" id="id_docente" class="form-control" aria-describedby="textoEndereco" name="docente" require>
                             </div>    
                             
                             <div class="col-4">
                               <label for="inputText" class="form-label">Curso</label>
                               <input type="text" id="id_curso" class="form-control" aria-describedby="textoEndereco" name="curso" require>
                            </div>
                     
                            <div class="col-4">
                               <label for="inputText" class="form-label">Data Matrícula</label>
                               <input type="text" id="data_matricula" class="form-control" aria-describedby="textoEndereco" name="data_matricula" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Status Matrícula</label>
                               <input type="text" id="status_matricula" class="form-control" aria-describedby="textoEndereco" name="status_matricula" require>
                            </div>
 
                           
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Atualizar</button>
                  </div>
                </div>
                                        </div>
                                      </div>
              <!-- Fim do modal -->
 
        </form> <!-- Fim do form atualizar Matrícula-->
 
                                                                   
             </tbody>
 
 </table>
</div>
 
<script>
function setRemover(id) {    
  alert("oioioio")    ;
 document.getElementById('id_matricula').value = id;
}
 
function setAtualizar(id_matricula , id_matricula , id_docente, id_curso, data_matricula, status_matricula) {
        alert("oioioio")    ;
     document.getElementById('id_matricula').value = id;
     document.getElementById('id__docente').value = id_docente;
     document.getElementById('id_curso').value = id_curso;
     document.getElementById('data_matricula').value = data_matricula;
     document.getElementById('status_matricula').value = status_matricula;
}
</script>
 
 
 
 
 
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
 
<?php
include ('../alertas.php');
?>
 
 
 
 
 
</body>
</html>