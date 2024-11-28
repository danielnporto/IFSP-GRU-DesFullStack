<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-6">
                    <h1 class="m-0">McLaren F1 Panel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Principal Results</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php include('includes/component/grafico.php')?>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-lg-6">
                    <?php include('includes/component/tabela.php')?>
                </div>
                <div class="col-lg-6">
                    <?php include('includes/component/tabela2.php')?>
                </div>
            </div>

            <?php include('includes/component/calendar.php')?>

        </div>
    </div>
</div>
