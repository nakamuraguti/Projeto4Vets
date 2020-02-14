<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];
        $cpf = $_GET['cpf'];
        $telefone = $_GET['telefone'];
        $dt_nasc = $_GET['dt_nasc'];
        $salario = $_GET['salario'];
        
    } else {
        $id = "";
        $nome = "";
        $sobrenome = "";
        $cpf = "";
        $telefone = "";
        $dt_nasc = "";
        $salario = "";
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Dados</title>
    </head>
    <body>
        <center>
            <h1>Alterar Dados</h1>
            <form method="POST" action="VerificacaoDados.php" name="FrmAlt">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>"><br><br>
                Sobrenome: <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>"><br><br>
                CPF: <input type="text" name="cpf" value="<?php echo $cpf ?>"><br><br>
                Telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>"><br><br>
                Data de Nascimento <input type="date" name="dt_nasc" value="<?php echo $dt_nasc ?>"><br><br>
                Salário: <input type="text" name="salario" value="<?php echo $salario ?>"><br><br>
                <input type="submit" value="Alterar Dados" name="btnAlt" style="height:30px;width:200px"> &ensp;&ensp;&ensp;
                <input type="submit" value="Excluir Dados" name="btnExc" style="height:30px;width:200px"><br><br>
            </form>
            <button onclick="window.location.href='PagListaFunc.php'" style="height:30px;width:200px">Voltar</button>
        </center>
    </body>
</html>
