<?php
// iniciando pequenas cofigurações básicas.
session_start(); //iniciando sessão
error_reporting(E_ALL); // definir (0) para esconer erros
$pathPhP= 'Paginas/'; //Pasta onde encontra-se as paginas
$pathCSS= 'assets/css/'; //Pasta onde encontra-se os arquivos css
$pathJS= 'assets/js/'; //Pasta onde encontra-se os arquivos js
$phpfile =".php"; // Arquivos com extensão PHP
$cssfile =".css"; // Arquivo com extensão CSS
$jsfile =".js"; // Arquivos com extensão JS
//////////////////////////////////////////////////////////
$pagina = $_GET['pg']; // pegando dados da pagína
//////////////////////////////////////////////////////////
$titulo = '';
$desc = '';
$keywords = '';
$nameSite = 'Fabianno Limma';

// the below code fragment can be found in: 