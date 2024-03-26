<?php
require_once('banco_class.php');
 
 
 
class Aluno{
    // Atributos:
    public $id;
    public $nome;
    public $rua;
    public $bairro;
    public $estado;
    public $cidade;
    public $pais;
    public $email;
    public $cep;
   
 
 
 
    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "INSERT INTO aluno (nome_aluno, rua_aluno, bairro_aluno, estado_aluno, cidade_aluno, pais_aluno, email_aluno, cep_aluno) VALUES(?,?,?,?,?,?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->nome, $this->rua, $this->estado, $this->bairro, $this->cidade, $this->pais, $this->email, $this->cep));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM aluno";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
 
 
 
    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM aluno WHERE id_aluno = ?";
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
        $sql = "UPDATE aluno SET nome = ?, rua = ?, bairro = ?, estado = ?, cidade = ?, pais = ?, email = ?, cep = ? WHERE id_aluno = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->nome, $this->rua, $this->bairro, $this->estado, $this->cidade, $this->pais, $this->email, $this->cep));
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