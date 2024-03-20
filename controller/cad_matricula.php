<?php
 
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/matricula_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Matricula();
 
 
 
        // Definir os valores das suas propriedades:
        $c->id = $_POST['matricula'];
        $c->docente = $_POST['docente'];
        $c->curso = $_POST['curso'];
        $c->data = $_POST['data'];
        $c->status = $_POST['status'];
       
 
 
 
 
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