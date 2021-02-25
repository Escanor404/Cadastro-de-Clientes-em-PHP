<?php
include_once 'database.php';


$nomCli = $_POST['nome'];
$cpfCli = $_POST['cpf'];
$emailClie = $_POST['email'];
$teleCli = $_POST['fone'];
$dataCli = $_POST['data'];

$sql = "INSERT INTO cliente (nomCli,cpfCli,emailClie,teleCli,dataCli) 
VALUES('$nomCli','$cpfCli','$emailClie','$teleCli','$dataCli');";
mysqli_query($conn, $sql );

header("Location: index.php");

?>
