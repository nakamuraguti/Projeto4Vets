<?php
    require_once ("../ConnectionFactory/ConnectionFactory.php");
    require_once ("../Model/Funcionario.php");
    
    class FuncionarioDAO{
        var $connection;
        
        public function __construct() {
            $this->connection = ConnectionFactory::getConnection();
        }
        
        public function Registrar(Funcionario $func){
            try {
                $sql = 'INSERT INTO Funcionario (cpf_func, nome_func, sobrenome_func, telefone, dt_nasc, salario) values (?, ?, ?, ?, ?, ?)';
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue(1, $func->getCpf_func(), PDO::PARAM_STR);
                $stmt->bindValue(2, $func->getNome_func(), PDO::PARAM_STR);
                $stmt->bindValue(3, $func->getSobrenome_func(), PDO::PARAM_STR);
                $stmt->bindValue(4, $func->getTelefone(), PDO::PARAM_STR);
                $stmt->bindValue(5, $func->getDt_nasc(), PDO::PARAM_STR);
                $stmt->bindValue(6, $func->getSalario(), PDO::PARAM_STR);
                $stmt->execute();
                if ($stmt->rowCount() == 1){
                    return true;
                } else{
                    return false;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        
        public function Listar(){
            try {
                $stmt = $this->connection->prepare("SELECT * FROM Funcionario");
                $stmt->execute();
                if ($stmt->rowCount() > 0):
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                endif;
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        
        public function Deletar(Funcionario $func){
            try {
                $sql = "DELETE FROM Funcionario WHERE id_func = ?";
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue(1, $func->getId_func(), PDO::PARAM_INT);
                $stmt->execute();
                if ($stmt->rowCount() == 1){
                    return true;
                } else{
                    return false;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        
        public function Alterar(Funcionario $func){
            try {
                $sql = "UPDATE Funcionario SET cpf_func = ?, nome_func = ?, sobrenome_func = ?, telefone = ?, dt_nasc = ?, salario = ? WHERE id_func = ?";
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue(1, $func->getCpf_func(), PDO::PARAM_STR);
                $stmt->bindValue(2, $func->getNome_func(), PDO::PARAM_STR);
                $stmt->bindValue(3, $func->getSobrenome_func(), PDO::PARAM_STR);
                $stmt->bindValue(4, $func->getTelefone(), PDO::PARAM_STR);
                $stmt->bindValue(5, $func->getDt_nasc(), PDO::PARAM_STR);
                $stmt->bindValue(6, $func->getSalario(), PDO::PARAM_STR);
                $stmt->bindValue(7, $func->getId_func(), PDO::PARAM_INT);
                $stmt->execute();
                if ($stmt->rowCount() == 1){
                    return true;
                } else{
                    return false;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
    }