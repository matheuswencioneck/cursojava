
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste GET e POST</title>
</head>
<body>
<form action="" method="POST">
    <input type="texto" name="login" placeholder="login">
    <input type="password" name="senha" placeholder="senha">
    <input type="submit" value="enviar">
    <?php
     $login = $_POST['login'];
     $senha = $_POST['senha'];
 
     echo 'login: ' . $login;
     echo ' canal: ' . $senha;
?> 
</body>
</html>
