<?php
require_once('banco_class.php');
 
 
 
class Turma{
    // Atributos:
   
    public $id;
    public $id_aluno_fk;
    public $id_docente_fk4;
    public $id_curso_fk;
    public $horario;
    public $sala;
    public $capacidade_maxima;
   
 
 
 
    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "INSERT INTO turma (id, id_aluno_fk, id_docente_fk4, id_curso_fk, horario, sala, capacidade_maxima) VALUES(?,?,?,?,?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->id, $this->id_aluno_fk, $this->id_docente_fk4, $this->id_curso_fk, $this->horario, $this->sala, $this->capacidade_maxima));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM turma";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
 
 
 
    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM turma WHERE id_turma = ?";
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
        $sql = "UPDATE turma SET id_turma = ?, id_aluno_fk = ?, id_docente_fk4 = ? WHERE id_turma = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id, $this->id_aluno_fk, $this->id_docente_fk4));
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
