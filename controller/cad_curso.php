<?php
 
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/curso_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Cursos();
 
 
 
        // Definir os valores das suas propriedades:
       
        $c->curso = $_POST['curso'];
        $c->descricao = $_POST['descricao'];
        $c->area = $_POST['area'];
        $c->inicio= $_POST['inicio'];
        $c->termino = $_POST['termino'];
       
       
 
 
 
 
         try{
            $c->Inserir();
            // header('Location: ../view/cad_docente_view.php?msg=6');
            header('Location: ../cad_curso_view.php?msg=6');
            // header('Location: ../cad_docente.html');
           
           
           
           
           
          }catch(PDOException $e) {
            header('Location: ../cad_curso_view.php?erro=5');
            // header('Location: ../cad_docente.html');
 
 
 
 
            exit();
 
         }
 
 
 
 
        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:      
       
       
    //     echo '
    //     <script>
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
     
      echo '<script>window.location.href = "../view/cad_curso_view.php";</script>';
 
 
 
        // header('Location: ../cad_curso.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    //
}
 
require_once "../alertas.php";
?>
