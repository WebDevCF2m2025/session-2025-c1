<?php
echo $pass = "admin123";
echo "<hr>";
echo $hashSha1Pass = sha1($pass);
echo "<hr>";
echo $pass2 = "drytgrykhjkjg46587_kygyeréArde§yrdmin123";
echo "<hr>";
echo $hashSha1Pass2 = sha1($pass2);

// https://10015.io/tools/sha1-encrypt-decrypt

echo "<hr><h3>password_hash()</h3>";
echo $haschRealPass = password_hash($pass,PASSWORD_DEFAULT);

