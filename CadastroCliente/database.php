<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'clientes';

$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Erro ao conectar com o banco de dados:' .mysql_error());
}
?>