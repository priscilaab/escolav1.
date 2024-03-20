<?php
require_once('banco_class.php');
 
 
 
class Matricula{
    // Atributos:
    public $id;
    public $docente;
    public $curso;
    public $data;
    public $status;
 
 
 
    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "INSERT INTO matricula (id_matricula, id_docente_fk, id_curso_fk, data_matricula, status_matricula) VALUES(?,?,?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->id , $this->docente, $this->curso, $this->data, $this->status));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM matricula";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
 
 
 
    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM matricula WHERE id_matricula = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        echo "Registro deletado com sucesso $this->id";
        return $comando->rowCount();
     
    }
 
 
 
    public function Atualizar(){
        $banco = Banco::conectar();
        $sql = "UPDATE matricula SET matricula = ?, docente = ?, curso = ?, data = ?, status = ? WHERE id_matricula = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->docente, $this->curso, $this->data, $this->status));
        Banco::desconectar();
        // Retornar quantidade de linhas alteradas:
        return $comando->rowCount();
    }
 
 
 
    public function BuscarPorID(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM contatos WHERE id = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}
?>