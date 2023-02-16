<?php view('partials/head.php') ?>
<style>
    #wrapper {
        display: block;
    }
    .h2, h2 {
        font-size: 2rem;
        color: cadetblue;
        font-weight: bold;
    }
</style>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">

                        <!-- Registration-->
                        <div class="card shadow p-5 animated zoomIn slow text-center">
                            <h2 >Fabric Tracker</h2>
                            <p style="background: floralwhite;">Please login to use the application!</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">

                        <!-- Registration-->
                        <div class="card shadow p-5 animated zoomIn slow"  style="height: 24rem">
                            <img src="./views/img/aw_noman.jpg" class="img-fluid" height="33rem">

                        </div>
                    </div>
                    <div class="col-md-6 mb-5">

                        <div class="card shadow animated zoomIn slow p-5"  style="height: 24rem">
                            <h2 class="text-center">Login Here</h2>
                            <p class="text-center" style="color: darkred">
                                <?php echo isset($_SESSION['heading']) ?  $_SESSION['heading'] : '';?>
                            </p>

                            <form action="/fabric_tracker/login" method="post">
                                <div class="form-group">
                                    <label>Enter Username</label>
                                    <input type="text" id="user_id" name="user_id"
                                           class="form-control form-control-lg"
                                           />
                                </div>
                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-outline-dark btn-block rounded-pill">Login</button>
                            </form>
                                <h6 class="mt-3 text-center" style="background: floralwhite;">
                                Don't have an account? Please contact with the admin!</h6>




                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>

<?php view('/partials/footer.php') ?>
<?php view('partials/footer-end.php') ?>
