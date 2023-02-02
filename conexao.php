<?php
$hostname=$.ENV['HOST'];
$dbName = $.ENV['DATABASE'];
$username = $.ENV['USERNAME'];
$password = $.ENV['PASSWORD'];
$port = $.ENV['3306'];
$ssl = $.ENV['MYSQL_ATTR_SSL_CA'];

// Set SSL cert and open connection to the MySQL server
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$mysqli->real_connect($hostname, $username, $password, $dbName, $port);

if ($mysqli->connect_error) {
    echo "Not connected to the database";
} else {
    echo "Successfully connected to the database";
}
