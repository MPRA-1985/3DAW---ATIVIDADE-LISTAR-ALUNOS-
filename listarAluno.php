<?php
	// Criar conexão com o banco
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$nomeBanco = "faeterj3daw";
	$conn = new mysqli( $servidor, $usuario, $senha, $nomeBanco );

	// passar o comando sql para ler a tabela
	$query = "SELECT * FROM alunos";
	$result = $conn->query($query);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Sistema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

	<div class="row">
        <div class="col-sm-10 offset-1">

			<table class='table table-striped table-bordered' style="margin-top: 20px;"  >

		          <tr>
		            <th> ID </th>
		            <th> Nome </th>
		            <th> E-mail </th>
		            <th> Matrícula</th>
		          </tr>

		          <?php

		            while ( $linha = $result->fetch_assoc() ) {
		        
		              echo "<tr> <td>" . $linha["ID"] . "</td>" .
		                    "<td>" . $linha["Nome"] . "</td>" .
		                    "<td>" . $linha["Email"] . "</td>" .
		                    "<td>" . $linha["Matricula"] . "</td>" .
		                    "</tr>";

		            }

		          ?>

		        </table>

		    </div>
		</div>    

</body>

</html>
