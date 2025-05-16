<?php

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password_hash</title>
</head>
<body>
<h1>password_hash()</h1>
<p>Cette page permet de crypter un mot de passe pour le mettre en base de donnée, il pourra être vérifié avec password_verify()</p>
<form action="" name="hash" method="post">
    <input type="text" name="pwd" placeholder="Votre mot de passe" required> <input type="submit" value="hachez !">
</form>
<?php
if(isset($_POST['pwd'])):
    $hashPwd = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
?>
<h3>Votre mot de passe non haché</h3>
    <input type="text" value="<?=$_POST['pwd']?>">
    <h3>Votre mot de passe haché</h3>
<p>A mettre dans la DB</p>
    <input type="text" value="<?=$hashPwd?>" size='100'>
<?php
endif;
?>
<?php
var_dump($_POST);
?>
</body>
</html>
