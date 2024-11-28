<?php
session_start();
require 'conexao.php';
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <?php include('../includes/component/navbar2.php')?>
    <?php include('../includes/component/sidebar3.php')?>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Editar Membro</h4>
                <a href="page3.php" class="btn btn-danger">Voltar</a>
            </div>
                <div class="card-body">
                    <?php 
                        if (isset($_GET['idMembro'])) {
                        $USUARIO_ID = mysqli_real_escape_string($conexao, $_GET['idMembro']);
                        $SQL = "SELECT * FROM usuarios WHERE id='$USUARIO_ID'";
                        $QUERY = mysqli_query($conexao, $SQL);

                        if(mysqli_num_rows($QUERY) > 0) {
                            $USUARIO = mysqli_fetch_array($QUERY);
                    ?>
                    <form action="../mysql/acoes.php" method="POST">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?=$USUARIO['nomeMembro']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Data de Nascimento</label>
                            <input type="date" name="data_nascimento" value="<?=$USUARIO['dataNasc']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Cargo</label>
                            <input type="text" name="cargo" value="<?=$USUARIO['cargo']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Equipe</label>
                            <input type="text" name="equipe" value="<?=$USUARIO['equipe_id']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                    <?php
                        }
                        }else{
                            echo'<h5>Usúario não encontrado!</h5>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>