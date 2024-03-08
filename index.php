<?php 
$path= 'Paginas/'; //Pasta onde encontra-se as paginas
include_once($path."header.php");
$pagina = $_GET['pg'];
$TypeFile=".php";
switch ($pagina) {
// Pagina default quando não é setado uma estring
default:
include_once($path.'home'. $TypeFile);
break;
//////////////////
case 'home';
include_once($path.'home'.$TypeFile);
break;

case 'sobre';
include_once($path.'sobre'.$TypeFile);
break;

case 'portifolio';
include_once($path.'portifolio'.$TypeFile);
break;

case 'contato';
include_once($path.'contato'.$TypeFile);
break;

}

include_once($path."footer". $TypeFile);