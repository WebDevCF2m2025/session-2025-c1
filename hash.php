<?php
echo $pass = "admin123";
echo "<hr>";
echo "<hr><h3>sha1 (obsolète)</h3>";
echo $hashSha1Pass = sha1($pass);
echo "<hr>";
echo $pass2 = "drytgrykhjkjg46587_kygyeréArde§yrdmin123";
echo "<hr>";
echo "<hr><h3>sha256 (pas obsolète, mais plus une bonne pratique)</h3>";
echo $hashSha1Pass2 = hash("sha256",$pass2);

// https://10015.io/tools/sha1-encrypt-decrypt

echo "<hr><h3>password_hash()</h3>";
echo $haschRealPass = password_hash($pass,PASSWORD_DEFAULT);
echo "<hr><h3>password_verify()</h3>";
if(password_verify($pass,$haschRealPass)){
    echo "$haschRealPass est bien compatible avec $pass";
}else{
    echo "$haschRealPass n'est pas compatible avec $pass";
}
echo "<hr>";
$pass .="n";
if(password_verify($pass,$haschRealPass)){
    echo "$haschRealPass est bien compatible avec $pass";
}else{
    echo "$haschRealPass n'est pas compatible avec $pass";
}
