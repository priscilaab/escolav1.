<?php
require_once('banco_class.php');
 
 
 
class Cursos{
    // Atributos:
    public $id;
    public $curso;
    public $descricao;
    public $area;
    public $inicio;
    public $termino;
 
 
    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "INSERT INTO cursos (nome_curso, descricao_curso, area_curso, data_inicio_curso, data_final_prevista_curso) VALUES(?,?,?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->curso, $this->descricao, $this->area, $this->inicio, $this->termino));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM cursos";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
 
 
 
    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM cursos WHERE id_curso = ?";
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
        $sql = "UPDATE cursos SET curso = ?, descicao = ?, area = ?, data_inicio_curso = ?, data_final_prevista_curso = ? WHERE id_curso = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->curso, $this->descricao, $this->area, $this->inicio, $this->termino));
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