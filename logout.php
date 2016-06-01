<?php
  include 'logica-usuario.php';

  logout();
  $_SESSION['success'] = 'Desogado com sucesso.';
  header('Location: index.php');
  die();
