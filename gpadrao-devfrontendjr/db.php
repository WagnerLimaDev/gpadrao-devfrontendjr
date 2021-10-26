<?php
/*Elimina mensagens de erro do PHP***************/
error_reporting(0);
/*Tentativa de comunicação com o servidor***********/
$connect = mysql_connect("localhost", "root", "") OR DIE ("FALHA AO CONECTAR AO SERVIDOR");
$db = mysql_select_db("db_gpadrao",$connect) OR DIE ("FALHA AO SELECIONAR O BANCO DE DADOS")
?>