<?php
    if($_POST){
        include_once ("../Model/Funcionario.php");
        include_once ("../DAO/FuncionarioDAO.php");
        
        $objF = new Funcionario();
        $objDAO = new FuncionarioDAO();
        
        if (isset($_POST['btnReg'])){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $dt_nasc = $_POST['dt_nasc'];
            $salario = $_POST['salario'];
            
            $objF->setCpf_func($cpf);
            $objF->setNome_func($nome);
            $objF->setSobrenome_func($sobrenome);
            $objF->setTelefone($telefone);
            $objF->setDt_nasc($dt_nasc);
            $objF->setSalario($salario);
            
            if ($objDAO->Registrar($objF)){
                header("Location: PagListaFunc.php");
            } else {
                echo ("Erro ao cadastrar");
            }
        }
        
        else if (isset($_POST['btnAlt'])){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $dt_nasc = $_POST['dt_nasc'];
            $salario = $_POST['salario'];
            
            $objF->setId_func($id);            
            $objF->setNome_func($nome);
            $objF->setSobrenome_func($sobrenome);
            $objF->setCpf_func($cpf);
            $objF->setTelefone($telefone);
            $objF->setDt_nasc($dt_nasc);
            $objF->setSalario($salario);
            
            if ($objDAO->Alterar($objF)){
                header("Location: PagListaFunc.php");
            } else {
                echo ("Erro ao alterar os dados");
            }
        }
        
        else if (isset($_POST['btnExc'])){
            $id = $_POST['id'];
            $objF->setId_func($id);
            if ($objDAO->Deletar($objF)){
                header("Location: PagListaFunc.php");
            } else {
                echo ("Erro ao deletar os dados");
            }
        }     
        
    }

