<?php
 
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/turma_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Turma();
 
 
 
        // Definir os valores das suas propriedades:
        $c->id_turma = $_POST['id_turma'];
        $c->id_aluno_fk = $_POST['id_aluno_fk'];
        $c->id_docente_fk = $_POST['id_docente_fk'];
        $c->id_curso_fk = $_POST['id_curso_fk'];
        $c->horario = $_POST['horario'];
        $c->sala = $_POST['sala'];
        $c->capacidade_maxima = $_POST['capacidade_maxima'];
     
 
 
 
      //  try{
            $c->Inserir();
            // header('Location: ../view/cad_docente_view.php?msg=6');
            header('Location: ../cad_turma_view.php?msg=6');
            // header('Location: ../cad_docente.html');
           
           
           
           
           
       // }catch(PDOException $e) {
            header('Location: ../cad_turma_view.php?erro=5');
            // header('Location: ../cad_docente.html');
 
            exit();
 
 
       // }
 
 
 
 
        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:      
       
       
    //     echo '
    //     <script>
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
     
      echo '<script>window.location.href = "../view/cad_turma_view.php";</script>';
 
 
 
        // header('Location: ../cad_turma.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    //
}
require_once "../alertas.php";
?>