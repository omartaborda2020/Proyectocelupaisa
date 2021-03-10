<?php
    
class ConexionDB{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pcelup","root","");

		$link->exec("set names utf8");

		return $link;
	}
}//$obj -> conectar();
?>