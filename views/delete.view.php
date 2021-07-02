<?php
  include '../controllers/Controller.php';

  $deleteArticle = new controller();
  $me = $deleteArticle->delete($_GET['id']);
    header('Location: /');
?>