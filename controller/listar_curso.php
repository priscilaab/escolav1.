<?php
// session_start();
// // Verificar se a sessão NÃO existe:
// if(!isset($_SESSION['dados'])){
//   header('Location: login.php');
//   exit();
// }
 
 
require_once('../classes/curso_class.php');
 
 
$c = new Cursos();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
 
?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <title>Cadastro de Cursos</title>
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
          <th>id</th>
          <th>nome_curso</th>
          <th>descricao_curso</th>
          <th>area_curso</th>
          <th>data_inicio_curso</th>
          <th>data_final_prevista_curso</th>
         
        </tr>
      </thead>
      <tbody>
       
        <!-- Insira aqui as linhas da tabela com os dados dos docentes -->
       
        <!-- Exemplo de linha da tabela -->
        <?php foreach($resultado as $cursos){ ?>
          <tr>
            <td><?=$cursos['id_curso'];?></td>
            <td><?=$cursos['nome_curso'];?></td>
            <td><?=$cursos['descricao_curso'];?></td>
            <td><?=$cursos['area_curso'];?></td>
            <td><?=$cursos['data_inicio_curso'];?></td>
            <td><?=$cursos['data_final_prevista_curso'];?></td>
            <td>
           
            <!-- Botões para execução dos modais -->
              <button type="button" class="btn btn-primary" onclick="setAtualizar(<?php echo $cursos['id_curso']; ?> , '<?php echo $cursos['nome_curso']; ?>' , '<?php echo $cursos['descricao_curso']; ?>' , '<?php echo $cursos['area_curso']; ?> , '<?php echo $cursos['data_inicio_curso']; ?> , '<?php echo $cursos['data_final_prevista_curso']; ?>' )" data-bs-toggle="modal" data-bs-target="#atualizarCursos">Editar</button>
              <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $cursos['id_curso'] ?>)" data-bs-toggle="modal" data-bs-target="#removerCursos" >Excluir</button>
             
               <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $docente['id_docente'] ?>)"> EXCLUIR</button> -->
             
             
             
            </tr>
            <?php } ?>
           
           
            <form action="../controller/del_cursos.php" method="post">                                                          
              <input type="text" id="id_cursos" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerCursos"  name="id_cursos">                                    
            <!-- </td> -->
           
           
            <!-- Modal Remover Curso -->
            <div class="modal fade" id="removerCursos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Cursos</h1>
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
                           
             
 
              <form action="../controller/atualizar_cursos.php" method="post">                                                          
              <input type="text" id="id_cursos" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerCursos"  name="id_cursos">        
 
 
 
         <!-- Modal Atualizar cadastro docente -->
            <div class="modal fade" id="atualizarCursos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Cursos</h1>
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
             
                         <form action="../controller/atualizar_cursos.php" method="post">
                         <input type="text" id="id" class="form-control d-none" aria-describedby="textoSimples" name="id" require>  
             
 
                           <div class="col mt-5">                
                                  <label for="inputText" class="form-label">Nome Curso</label>
                                  <input type="text" id="nome_curso" class="form-control" aria-describedby="textoSimples" name="nome_curso" require>            
                          </div>
                             
                                   
                           <div class="row">
                             <div class="col-8">
                                   <label for="inputText" class="form-label">Descrição Curso</label>
                                   <input type="email" id="descricao_curso" class="form-control" aria-describedby="textoEndereco" name="descricao_curso" require>
                             </div>    
                             
                             <div class="col-4">
                               <label for="inputText" class="form-label">Área Curso</label>
                               <input type="text" id="area_curso" class="form-control" aria-describedby="textoEndereco" name="area_curso" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Início</label>
                               <input type="text" id="data_prevista_inicio" class="form-control" aria-describedby="textoEndereco" name="inicio" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Término</label>
                               <input type="text" id="data_final_prevista_curso" class="form-control" aria-describedby="textoEndereco" name="termino" require>
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
 
        </form> <!-- Fim do form atualizar cursos -->
 
                                          
                                   
             </tbody>
 
        </table>
  </div>
 
  <script>
      function setRemover(id) {    
         alert("oioioio")    ;
        document.getElementById('id_cursos').value = id;
      }
 
      function setAtualizar(id , nome_curso , descricao_curso, area_curso, data_inicio, data_final_prevista_curso) {
               alert("oioioio")    ;
            document.getElementById('id').value = id;
            document.getElementById('nome_curso').value = nome_curso;
            document.getElementById('descricao_curso').value = descricao_curso;
            document.getElementById('area_curso').value = area_curso;
            document.getElementById('data_inicio').value = inicio;
            document.getElementById('data_final_prevista_curso').value = termmino;
      }
      </script>
 
 
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
 
<?php
include ('../alertas.php');
?>
 
 
</body>
</html>