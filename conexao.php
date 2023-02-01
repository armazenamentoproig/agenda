<?php
$HOST = "aws-sa-east-1.connect.psdb.cloud";
$USERNAME = "nsjkrpnb9n3u93bthfui";
$PASSWORD = "pscale_pw_9iK5RzHduNKUtaPcupxApWBV9pt3uCbXf6hFEvB3o8a";
$DATABASE = "formulario";

//Criar a conexao
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($["HOST"], $["USERNAME"], $["PASSWORD"], $["DATABASE"]);
  $mysqli->close();
?>

