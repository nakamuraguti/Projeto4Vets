<?php
    class Funcionario{
        private $id_func;
        private $cpf_func;
        private $nome_func;
        private $sobrenome_func;
        private $telefone;
        private $dt_nasc;
        private $salario;
        
        function getId_func() {
            return $this->id_func;
        }

        function getCpf_func() {
            return $this->cpf_func;
        }

        function getNome_func() {
            return $this->nome_func;
        }

        function getSobrenome_func() {
            return $this->sobrenome_func;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getDt_nasc() {
            return $this->dt_nasc;
        }

        function getSalario() {
            return $this->salario;
        }

        function setId_func($id_func) {
            $this->id_func = $id_func;
        }

        function setCpf_func($cpf_func) {
            $this->cpf_func = $cpf_func;
        }

        function setNome_func($nome_func) {
            $this->nome_func = $nome_func;
        }

        function setSobrenome_func($sobrenome_func) {
            $this->sobrenome_func = $sobrenome_func;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setDt_nasc($dt_nasc) {
            $this->dt_nasc = $dt_nasc;
        }

        function setSalario($salario) {
            $this->salario = $salario;
        }
    }

