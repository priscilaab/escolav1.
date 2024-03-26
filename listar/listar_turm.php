<?php
// session_start();
// // Verificar se a sessão NÃO existe:
// if(!isset($_SESSION['dados'])){
//   header('Location: login.php');
//   exit();
// }
 
 
 
require_once('../classes/turma_class.php');
 
 
$c = new Turma();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
 
 
?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <title>Cadastro de Turmas</title>
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
          <th>id_turma</th>
          <th>id_aluno_fk</th>
          <th>id_docente_fk4</th>
          <th>id_curso_fk4</th>
          <th>horario</th>
          <th>sala</th>
          <th>capacidade_maxima</th>
         
        </tr>
      </thead>
      <tbody>
       
        <!-- Insira aqui as linhas da tabela com os dados dos docentes -->
       
        <!-- Exemplo de linha da tabela -->
        <?php foreach($resultado as $turma){ ?>
          <tr>
            <td><?=$turma['id_turma'];?></td>
            <td><?=$turma['id_aluno_fk'];?></td>
            <td><?=$turma['id_docente_fk4'];?></td>
            <td><?=$turma['id_curso_fk4'];?></td>
            <td><?=$turma['horario'];?></td>
            <td><?=$turma['sala'];?></td>
            <td><?=$turma['capacidade_maxima'];?></td>
           
            <td>
           
            <!-- Botões para execução dos modais -->
              <button type="button" class="btn btn-primary" onclick="setAtualizar(<?php echo $turma['id_turma']; ?> , '<?php echo $turma['id_aluno_fk']; ?>' , '<?php echo $turma['id_docente_fk4']; ?>' , '<?php echo $turma['id_curso_fk4']; ?>'  , '<?php echo $turma['horario']; ?>'  , '<?php echo $turma['sala']; ?>'  , '<?php echo $turma['capacidade_maxima']; ?>' )" data-bs-toggle="modal" data-bs-target="#atualizarTurma">Editar</button>
              <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $turma['id_turma'] ?>)" data-bs-toggle="modal" data-bs-target="#removerTurma" >Excluir</button>
             
               <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $turma['id_turma'] ?>)"> EXCLUIR</button> -->
             
             
             
            </tr>
            <?php } ?>
           
           
            <form action="../controller/del_turma.php" method="post">                                                          
              <input type="text" id="id_turma" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerTurma"  name="id_turma">                                    
            <!-- </td> -->
           
           
            <!-- Modal Remover Turma -->
            <div class="modal fade" id="removerTurma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Turma</h1>
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
                           
             
 
              <form action="../controller/atualizar_turma.php" method="post">                                                          
              <input type="text" id="id_turma" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerTurma"  name="id_turma">        
 
 
 
         <!-- Modal Atualizar cadastro turma -->
            <div class="modal fade" id="atualizarTurma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Turma</h1>
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
             
                         <form action="../controller/atualizar_turma.php" method="post">
                         <input type="text" id="id" class="form-control d-none" aria-describedby="textoSimples" name="id" require>  
             
 
                           <div class="col mt-5">                
                                  <label for="inputText" class="form-label">Nome do Aluno</label>
                                  <input type="text" id="id_aluno_fk" class="form-control" aria-describedby="textoSimples" name="nome" require>            
                          </div>
                             
                                   
                           <div class="row">
                             <div class="col-8">
                                   <label for="inputText" class="form-label">Curso</label>
                                   <input type="text" id="id_curso_fk4" class="form-control" aria-describedby="textoEndereco" name="curso" require>
                             </div>    
                             
                             <div class="col-4">
                               <label for="inputText" class="form-label">Docente</label>
                               <input type="text" id="id_docente_fk4" class="form-control" aria-describedby="textoEndereco" name="docente" require>
                            </div>
                     
                            <div class="col-4">
                               <label for="inputText" class="form-label">Horário</label>
                               <input type="text" id="horario" class="form-control" aria-describedby="textoEndereco" name="horario" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Sala</label>
                               <input type="text" id="sala" class="form-control" aria-describedby="textoEndereco" name="sala" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Capacidade Máxima</label>
                               <input type="text" id="capacidade_maxima" class="form-control" aria-describedby="textoEndereco" name="capacidade_maxima" require>
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
 
        </form> <!-- Fim do form atualizar turma -->                        
                                   
                                   
                                   
             </tbody>
 
        </table>
  </div>
 
  <script>
      function setRemover(id) {    
         alert("oioioio")    ;
        document.getElementById('id_turma').value = id;
      }
 
      function setAtualizar(id_turma , id_aluno_fk , id_docente_fk4, id_curso_fk4, horario, sala, capacidade_maxima) {
               alert("oioioio")    ;
            document.getElementById('id_turma').value = id;
            document.getElementById('id_aluno_fk').value = aluno;
            document.getElementById('id_docente_fk4').value = id_docente;
            document.getElementById('id_curso_fk4').value = id_curso;
            document.getElementById('horario').value = horario;
            document.getElementById('sala').value = sala;
            document.getElementById('capacidade_maxima').value = capacidade_maxima;
      }
      </script>
 
 
 
 
 
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
 
<?php
include ('../alertas.php');
?>
 
 
 
 
 
</body>
</html>