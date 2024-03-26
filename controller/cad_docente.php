<?php
 
//  session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/docente_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Docente();
 
 
 
        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nome'];
        $c->email = $_POST['email'];
        $c->especializacao= $_POST['especializacao'];
        $c->tel1 = $_POST['tel1'];
        $c->tel2 = $_POST['tel2'];
 
 
 
 
        try{
            $c->Inserir();
            // header('Location: ../view/cad_docente_view.php?msg=6');
            header('Location: ../cad_docente_view.php?msg=6');
            // header('Location: ../cad_docente.html');
                exit();
           
           
        }catch(PDOException $e) {
            header('Location: ../cad_docente_view.php?erro=5');
            // header('Location: ../cad_docente.html');
        }

        echo '<script>window.location.href = "../view/cad_docente_view.php";</script>';
}
 
require_once "../alertas.php";
 
?>