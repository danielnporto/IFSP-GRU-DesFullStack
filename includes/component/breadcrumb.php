<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $breadcrumb_title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            <!-- Printa os elementos do array breadcrumb_path -->
            <?php for($i = 0; $i < count($breadcrumb_path) - 1; $i++): ?>

                <li class="breadcrumb-item">
                  <a href="#"><?= $breadcrumb_path[$i] ?></a>
                </li>
                
            <?php endfor ?>

            <!-- Printa o ultimo elemento do array breadcrumb_path -->
              <li class="breadcrumb-item active">
                <?= $breadcrumb_path[count($breadcrumb_path) - 1]; ?>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>