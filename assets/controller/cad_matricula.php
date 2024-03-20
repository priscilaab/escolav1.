<?php
 
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/matricula_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Matricula();
 
 
 
        // Definir os valores das suas propriedades:
        $c->id_matricula = $_POST['id_matricula'];
        $c->id_docente = $_POST['id_docente_fk'];
        $c->id_curso_fk = $_POST['id_curso_fk'];
        $c->data_matricula = $_POST['data_matricula'];
        $c->status_matricula = $_POST['status_matricula'];
       
 
 
 
 
        try{
            $c->Inserir();
            // header('Location: ../view/cad_docente_view.php?msg=6');
            header('Location: ../cad_matricula_view.php?msg=6');
            // header('Location: ../cad_docente.html');
           
           
           
           
           
        }catch(PDOException $e) {
            header('Location: ../cad_matricula_view.php?erro=5');
            // header('Location: ../cad_docente.html');
 
            exit();
 
        }
 
 
 
 
        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:      
       
       
    //     echo '
    //     <script>
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
     
      echo '<script>window.location.href = "../view/cad_matricula_view.php";</script>';
 
 
 
        // header('Location: ../cad_matricula.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    //
}
require_once "../alertas.php";
?>