<section class="content-header">
    <h1>
        <?= $title ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> <?= $title ?></a></li>
    </ol>
</section>

<?php
if (userdata('role') == 1) { ?>
    <!-- DARMA  -->
    <section class="content">
        <div class="row">
            <?php if ($getDarma != null) { ?>
                <div class="col-xs-6">
                    <!-- DARMA  -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Grafik <?= $getDarma->nama ?></h3>
                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_darma"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END DARMA  -->
                </div>
            <?php } ?>
            <?php if ($getCigugur != null) { ?>
                <div class="col-xs-6">
                    <!-- CIGUGUR  -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Grafik <?= $getCigugur->nama ?></h3>
                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_cigugur"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END CIGUGUR  -->
                </div>
            <?php } ?>
            <?php if ($getDalem != null) { ?>
                <div class="col-xs-6">
                    <!-- BALONG DALEM  -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Grafik <?= $getDalem->nama ?></h3>
                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_dalem"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END BALONG DALEM  -->
                </div>
            <?php } ?>
            <?php if ($getMonyet != null) { ?>
                <div class="col-xs-6">
                    <!-- MONYET  -->
                    <div class="box">
                        <div class="box-header">

                            <h3 class="box-title">Grafik <?= $getMonyet->nama ?></h3>


                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_monyet"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END MONYET  -->
                </div>
            <?php } ?>
            <?php if ($getCipaniis != null) { ?>
                <div class="col-xs-6">
                    <!-- cipaniis  -->
                    <div class="box">
                        <div class="box-header">

                            <h3 class="box-title">Grafik <?= $getCipaniis->nama ?></h3>


                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_cipaniis"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END cipaniis  -->
                </div>
            <?php } ?>
            <?php if ($getRemis != null) { ?>
                <div class="col-xs-6">
                    <!-- remis  -->
                    <div class="box">
                        <div class="box-header">

                            <h3 class="box-title">Grafik <?= $getRemis->nama ?></h3>


                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_remis"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END remis  -->
                </div>
            <?php } ?>
            <?php if ($getNilem != null) { ?>
                <div class="col-xs-6">
                    <!-- nilem  -->
                    <div class="box">
                        <div class="box-header">

                            <h3 class="box-title">Grafik <?= $getNilem->nama ?></h3>


                        </div>
                        <div class="col-8">
                            <!-- <canvas id="graph"></canvas> -->
                            <div id="graph_nilem"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- END nilem  -->
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- END DARMA  -->



    <!-- END CIGUGUR  -->

<?php } elseif (userdata('role') == 2) { ?>

    <section class="content">
        <div class="row">
            <?php if ($wisata != null) { ?>
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
            <?php } ?>
        </div>
    </section>

<?php }
?>