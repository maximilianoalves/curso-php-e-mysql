<?php
  error_reporting(E_ALL ^ E_NOTICE);
  include 'mostra-alerta.php';
  mostraAlerta('success');
  mostraAlerta('danger');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Minha Loja</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Minha Loja</a>
        </div>
        <div class="">
          <ul class="nav navbar-nav">
            <li><a href="produto-formulario.php">Adiciona Produto</a></li>
            <li><a href="produto-lista.php">Produtos</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="principal">
