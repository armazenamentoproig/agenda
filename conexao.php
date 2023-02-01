<?php
$hostname = $_ENV['aws-sa-east-1.connect.psdb.cloud'];
$dbName = $_ENV['formulario'];
$username = $_ENV['ioudoj7c787zzow91xbp'];
$password = $_ENV['pscale_pw_b9NXLvxy1gtj3EJA7JrPitgv48QPwqeXjm03FzDKjH8'];
$ssl = $_ENV['MYSQL_ATTR_SSL_CA'];

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$mysqli->real_connect($hostname, $username, $password, $dbName, $port);

if ($mysqli->connect_error) {
    echo 'not connected to the database';
} else {
    echo "Connected successfully";
}
