<?php
require_once 'pessoa.php';

$obj = new pessoa;
$obj->setNome("Linicker");
$obj->setIdade("26");
$obj->setGenero("Homem");
$obj->dormir();

var_dump($obj);