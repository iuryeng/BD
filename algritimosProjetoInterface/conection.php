
<?php 

$host     = "localhost"; //nome da base de dados 
$user     = "root"; // usuario do banco 
$password = ""; // senha do banco 
$database = "sis_academico"; // nome do banco

$connect = mysqli_connect($host, $user, $password, $database);

// Checking Connection

if (mysqli_connect_errno()) {
    echo "falha ao conecetar com o  MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($connect, "utf8");

?>