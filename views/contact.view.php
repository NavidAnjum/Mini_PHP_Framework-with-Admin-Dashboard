<?php require('partials/head.php') ?>
<?php require('partials/sidebar.php') ?>
<?php require('partials/nav.php')?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div>
<!--hello-->




    <?php require('partials/footer.php') ?>
<?php require('partials/footer-end.php') ?>