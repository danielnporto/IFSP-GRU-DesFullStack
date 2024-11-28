<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4>Membros</h4>
          <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar Membros</a>
        </div>  
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Cargo</th>
                <th>Equipe</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $SQL = 'SELECT * FROM membro';
                $USUARIOS = mysqli_query($conexao, $SQL);
                if (mysqli_num_rows($USUARIOS) > 0){
                  foreach ($USUARIOS as $USUARIO) {
              ?>
              <tr>
                <td><?=$USUARIO['idMembro']?></td>
                <td><?=$USUARIO['nomeMembro']?></td>
                <td><?=date('d/m/Y', strtotime($USUARIO['dataNasc']))?></td>
                <td><?=$USUARIO['cargo']?></td>
                <td><?=$USUARIO['equipe_id']?></td>
                <td>
                  <a href="usuario-edit.php?id=<?=$USUARIO['idMembro']?>" class="btn btn-success btn-sm"><span
                      class="bi-pencil-fill"></span>&nbsp;Editar</a>
                  <form action="acoes.php" method="POST" class="d-inline">
                    <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit"
                      name="delete_usuario" value="" class="btn btn-danger btn-sm">
                      <span class="bi-trash3-fill"></span>&nbsp;Excluir
                    </button>
                  </form>
                </td>
              </tr>
              <?php
                }
              }
                else{
                  echo'<h5>Nenhum Usuario Encontrado</h5>';
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>