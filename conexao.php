<?php
$HOST = "aws-sa-east-1.connect.psdb.cloud";
$USERNAME = "smwtjehkm3ky0z8zzbvj";
$PASSWORD = "pscale_pw_A6tAIL5oSE6usBu54IdCcfLyDMxDhYMiE0t4Wn8THnc";
$DATABASE = "formulario";

//Criar a conexao
 $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($["HOST"], $["USERNAME"], $["PASSWORD"], $["DATABASE"]);
  $mysqli->close();
?>
