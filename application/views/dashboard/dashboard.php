<section class="content-header">
    <h1>
        <?= $title ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> <?= $title ?></a></li>
    </ol>
</section>

<?php
if (userdata('role') != 1) { ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data <?= $wisata->nama ?></h3>
                    </div>
                    <div class="col-8">
                        <!-- <canvas id="graph"></canvas> -->
                        <div id="graph"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>

<?php } else { ?>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php foreach ($wisata as $key => $data) { ?>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data <?= $data->nama ?></h3>
                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph<?= $data->wisata_id?>"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }
?>