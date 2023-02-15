<?php view('/partials/head.php') ?>
<style>
    #wrapper {
        display: block;
    }
</style>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5">

                        <!-- Registration-->
                        <div class="card shadow p-5 animated zoomIn slow"  style="height: 33rem">
                            <img src="./views/img/aw_noman.jpg" class="img-fluid" height="33rem">

                        </div>
                    </div>
                    <div class="col-md-6 mb-5">

                        <div class="card shadow animated zoomIn slow p-5"  style="height: 33rem">
                            <h3 class="text-center font-weight-bold text-uppercase mb-3">Login Here</h3>

                            <form action="/php_test/login" method="post">
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
                            <h6 class="mt-3">Don't have an account? <a href="#"> Create Account Here</a></h6>
                            <p class="text-center mt-3"> or Login with<p>
                            <div class="text-center">
                                <i class="fab fa-facebook mx-2 fa-2x"></i>
                                <i class="fab fa-twitter  mx-2 fa-2x"></i>
                                <i class="fab fa-instagram  mx-2 fa-2x"></i>
                                <i class="fab fa-google  mx-2 fa-2x"></i>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>

<?php view('/partials/footer.php') ?>
