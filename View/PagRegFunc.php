<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Funcionários</title>
    </head>
    <body>
        <center>
            <h1>Registro de Funcionários</h1><br><br>
            <form method="POST" action="VerificacaoDados.php" name="FrmFunc">
                Nome: <input type="text" name="nome"><br><br>
                Sobrenome: <input type="text" name="sobrenome"><br><br>
                CPF: <input type="text" name="cpf"><br><br>
                Telefone: <input type="text" name="telefone"><br><br>
                Data de Nascimento <input type="date" name="dt_nasc"><br><br>
                Salário: <input type="text" name="salario"><br><br>
                <input type="submit" value="Registrar Funcionário" name="btnReg" style="height:30px;width:200px" ><br><br>
            </form>
            <button onclick="window.location.href='Index.php'" style="height:30px;width:200px" >Voltar</button>
        </center>
    </body>
</html>