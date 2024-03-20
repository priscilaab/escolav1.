<?php
 
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/aluno_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Aluno();
 
 
 
        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nome'];
        $c->rua = $_POST['rua'];
        $c->bairro = $_POST['bairro'];
        $c->cidade = $_POST['cidade'];
        $c->pais = $_POST['pais'];
        $c->email = $_POST['email'];
        $c->cep = $_POST['cep'];
        $c->estado = $_POST['estado'];
 
 
        try{
            $c->Inserir();
            // header('Location: ../view/cad_docente_view.php?msg=6');
            header('Location: ../cad_aluno_view.php?msg=6');
            // header('Location: ../cad_docente.html');
           
           
           
           
           
        }catch(PDOException $e) {
            header('Location: ../cad_aluno_view.php?erro=5');
            // header('Location: ../cad_docente.html');
           
            exit();
        }
 
 
 
 
        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:      
       
       
    //     echo '
    //     <script>
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
     
      echo '<script>window.location.href = "../view/cad_aluno_view.php";</script>';
 
 
 
        // header('Location: ../cad_docente.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    //
}
require_once "../alertas.php";
?>
