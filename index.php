<?php
require_once(dirname(__FILE__) .'/configuracoes.php');
include_once($pathPhP.'header'. $phpfile);
switch ($pagina) {
// Pagina default quando não é setado uma estring
default:
include_once($pathPhP.'home'. $phpfile);
break;
//////////////////
case 'home';
include_once($pathPhP.'home'. $phpfile);
break;

case 'sobre';
include_once($pathPhP.'sobre'. $phpfile);
break;

case 'portifolio';
include_once($pathPhP.'portifolio'.$phpfile);
break;

case 'contato';
include_once($pathPhP.'contato'.$phpfile);
break;

}

include_once($pathPhP.'footer'. $phpfile);