<meta charset="UTF-8">
<html>

<head>
<title>Hello!</title>
</head>

<body>

<?php
if (!isset($_SESSION)) session_start();
//Obtendo o id da sessão iniciada:
echo"Bem-Vindo,  <br>";
?>

Nivel 1
<a href="logout.php">Sair</a>
</body>
</html>
