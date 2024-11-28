<?php
session_start();
require '../mysql/conexao.php'
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>McLaren F1</title>
  <link rel="icon" href="../includes/images/icon-mclaren.png" type="image/ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

        
    <div class="wrapper">

        <?php include('../includes/component/navbar2.php')?>
        <?php include('../includes/component/sidebar3.php')?>
        <?php include('../includes/component/contentbox3.php'); ?>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            <b>Atividade</b> 0.0.1
            </div>
            <strong>Copyright &copy; 2004-2024 <a href="https://www.mclaren.com/racing/formula-1/">McLaren_F1_Team</a>.</strong> All rights reserved.
        </footer>

    </div>



<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>