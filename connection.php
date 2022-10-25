<?php
$nomeServer = 'localhost';
$nomeUtente = 'root';
$passWord ='';
$db = 'progettozaki';

$conn = new mysqli($nomeServer,$nomeUtente,$passWord,$db);
if($conn -> connect_error){ 
    die('Connessione fallita:'.$conn -> connect_error); 
} 

?>