<?php
// session_start();
// // Verificar se a sessão NÃO existe:
// if(!isset($_SESSION['dados'])){
//   header('Location: login.php');
//   exit();
// }
 
 
require_once('../classes/aluno_class.php');
 
 
$c = new Aluno();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
 
?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <title>Cadastro de Alunos</title>
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
          <th>Nome</th>
          <th>Rua</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th>Pais</th>
          <th>Email</th>
          <th>Cep</th>
          <th>Tel1</th>
          <th>Tel2</th>
        </tr>
      </thead>
      <tbody>
       
        <!-- Insira aqui as linhas da tabela com os dados dos docentes -->
       
        <!-- Exemplo de linha da tabela -->
        <?php foreach($resultado as $aluno){ ?>
          <tr>
            <td><?=$aluno['id_aluno'];?></td>
            <td><?=$aluno['nome_aluno'];?></td>           
            <td><?=$aluno['email_aluno'];?></td>
            <td><?=$aluno['rua_aluno'];?></td>
            <td><?=$aluno['bairro_aluno'];?></td>
            <td><?=$aluno['cidade_aluno'];?></td>
            <td><?=$aluno['estado_aluno'];?></td>
            <td><?=$aluno['pais_aluno'];?></td>
            <td><?=$aluno['cep_aluno'];?></td>
            <td><?=$aluno['tel1'];?></td>
            <td><?=$aluno['tel2'];?></td>
            <td>
           
            <!-- Botões para execução dos modais -->
              <button type="button" class="btn btn-primary" onclick="setAtualizar(<?php echo $aluno['id_aluno']; ?> , '<?php echo $aluno['nome_aluno']; ?>' ,  '<?php echo $aluno['email_aluno'];  ?>' ,'<?php echo $aluno['rua_aluno']; ?>' , '<?php echo $aluno['bairro_aluno'];  ?>', '<?php echo $aluno['cidade_aluno'];  ?>',  '<?php echo $aluno['estado_aluno'];  ?>', '<?php echo $aluno['pais_aluno'];?>',  '<?php echo $aluno['cep_aluno'];  ?>', '<?php echo $aluno['tel1']; ?>', '<?php echo $aluno['tel2']; ?>')" data-bs-toggle="modal" data-bs-target="#atualizarAluno">Editar</button>
              <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $aluno['id_aluno'] ?>)" data-bs-toggle="modal" data-bs-target="#removerAluno" >Excluir</button>
             
               <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $aluno['id_aluno'] ?>)"> EXCLUIR</button> -->
             
             
             
            </tr>
            <?php } ?>
           
           
            <form action="../controller/del_aluno.php" method="post">                                                          
              <input type="text" id="id_aluno" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerAluno"  name="id_aluno">                                    
            <!-- </td> -->
           
           
            <!-- Modal Remover Docente -->
            <div class="modal fade" id="removerAluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Aluno</h1>
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
                           
             
 
              <form action="../controller/atualizar_aluno.php" method="post">                                                          
              <input type="text" id="id_aluno" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerAluno"  name="id_aluno">        
 
 
 
         <!-- Modal Atualizar cadastro docente -->
            <div class="modal fade" id="atualizarAluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Aluno</h1>
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
             
                         <form action="../controller/atualizar_aluno.php" method="post">
                         <input type="text" id="id" class="form-control d-none" aria-describedby="textoSimples" name="id" require>  
             
 
                           <div class="col mt-5">                
                                  <label for="inputText" class="form-label">Nome</label>
                                  <input type="text" id="nome_aluno" class="form-control" aria-describedby="textoSimples" name="nome" require>            
                          </div>
                             
                          <div class="col-4">
                               <label for="inputText" class="form-label">/E-mail></label>
                               <input type="email" id="email_aluno" class="form-control" aria-describedby="textoEndereco" name="email" require>
                            </div>
 
                           <div class="row">
                             <div class="col-8">
                                   <label for="inputText" class="form-label">Rua</label>
                                   <input type="text" id="rua_aluno" class="form-control" aria-describedby="textoEndereco" name="rua" require>
                             </div>    
                             
                             <div class="col-4">
                               <label for="inputText" class="form-label">Bairro</label>
                               <input type="text" id="bairro_aluno" class="form-control" aria-describedby="textoEndereco" name="bairro" require>
                            </div>
                     
                            <div class="col-4">
                               <label for="inputText" class="form-label">Cidade</label>
                               <input type="text" id="cidade_aluno" class="form-control" aria-describedby="textoEndereco" name="cidade" require>
                            </div>

                            <div class="col-4">
                               <label for="inputText" class="form-label">Estado</label>
                               <input type="text" id="estado_aluno" class="form-control" aria-describedby="textoEndereco" name="estado" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">País</label>
                               <input type="text" id="pais_aluno" class="form-control" aria-describedby="textoEndereco" name="pais" require>
                            </div>
 
                            <div class="col-4">
                               <label for="inputText" class="form-label">Cep</label>
                               <input type="text" id="cep_aluno" class="form-control" aria-describedby="textoEndereco" name="cep" require>
                            </div>
                            <div class="col-4">
                               <label for="inputText" class="form-label">Telefone Celular</label>
                               <input type="phonenumber" id="tel1" class="form-control" aria-describedby="textoEndereco" name="tel1" require>
                            </div>  
                            <div class="col-4">
                               <label for="inputText" class="form-label">Telefone</label>
                               <input type="phonenumber" id="tel2" class="form-control" aria-describedby="textoEndereco" name="tel2" require>
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
 
              </form> <!-- Fim do form atualizar aluno -->
        
    
                                   
             </tbody>
 
        </table>
  </div>
 
  <script>
      function setRemover(id) {    
         alert("oioioio")    ;
        document.getElementById('id_aluno').value = id;
      }
 
      function setAtualizar(id_aluno, nome_aluno, email_aluno, rua_aluno, bairro_aluno, cidade_aluno, estado_aluno, cep_aluno, pais_aluno, tel1, tel2) {
               alert("oioioio")    ;
            document.getElementById('id_aluno').value = id;
            document.getElementById('nome_aluno').value = nome;
            document.getElementById('email_aluno').value = email;
            document.getElementById('rua_aluno').value = rua;
            document.getElementById('bairro_aluno').value = bairro;
            document.getElementById('cidade_aluno').value = cidade;
            document.getElementById('estado_aluno').value = estado;
            document.getElementById('cep_aluno').value = cep;
            document.getElementById('pais_aluno').value = pais;
            document.getElementById('tel1').value = tel1;
            document.getElementById('tel2').value = tel2;
      }
      </script>
 
 
 
 
 
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
 
<?php
include ('../alertas.php');
?>
 
 
 
 
 
</body>
</html>