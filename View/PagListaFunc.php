<?php
    include_once ("../DAO/FuncionarioDAO.php");
    $obj = new FuncionarioDAO();
    $select = $obj->Listar();
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
        <title>Lista de Funcionários</title>
    </head>
    <body>
        <center>
            <h1>Lista de Funcionários</h1>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Sobrenome</td>
                    <td>CPF</td>
                    <td>Telefone</td>
                    <td>Data de Nascimento</td>
                    <td>Salário</td>
                    <td>Editar Dados</td>
                </tr>
                <?php
                    if(isset($select)){
                        foreach ($select as $func){
                            echo "<tr>";
                            echo "<td>" . $func['id_func'] . "</td>";
                            echo "<td>" . $func['nome_func'] . "</td>";
                            echo "<td>" . $func['sobrenome_func'] . "</td>";
                            echo "<td>" . $func['cpf_func'] . "</td>";
                            echo "<td>" . $func['telefone'] . "</td>";
                            echo "<td>" . $func['dt_nasc'] . "</td>";
                            echo "<td>" . $func['salario'] . "</td>";
                            echo "<td><a href = 'PagAltFunc.php?id=" . $func['id_func'] .
                                '&&nome=' . $func['nome_func'] .
                                '&&sobrenome=' . $func['sobrenome_func'].
                                '&&cpf=' . $func['cpf_func'].
                                '&&telefone=' . $func['telefone'].
                                '&&dt_nasc=' . $func['dt_nasc'].
                                '&&salario=' . $func['salario']. "'>Editar Dados</a></td>";
                        }
                    }
                ?>
            </table><br><br><br>
            <button onclick="window.location.href='Index.php'" style="height:30px;width:200px">Voltar</button>
        </center>
        
    </body>
</html>
