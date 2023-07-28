<?php
session_start();
require('connection.php');
$page_title = "Register";
include('includes/header.php'); ?>
<div class="center">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-6">
                <div class="alert">
                <?php
        if (isset($_SESSION['status'])) {
        ?>
            <div class="alert alet-success">
                <h5><?= $_SESSION['status']; ?></h5>
            </div>
        <?php
            unset($_SESSION['status']);
        }
        ?>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" autocomplete="off">
                            <!-- <div class="form-group mb-1 ">
                                <label for="">User Type</label>
                                <input type="text" name="user_type" value ="User" class="form-control"disabled>
                            </div> -->
                            <div class="form-group mb-1 ">
                                <label for="">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" pattern="[^0-9]*" title="Please dont include number or special characters." required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" pattern="[^0-9]*" title="Please dont include number or special characters." required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Email </label>
                                <input type="text" name="email" id="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Address </label>
                                <input type="text" name="addr" id="addr" class="form-control" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Phone Number</label>
                                <input type="tel" name="pnum" id="pnum" class="form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="(XXX)-YYY-ZZZZ" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Username</label>
                                <input type="text" name="usern" id="usern" class="form-control" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Password</label>
                                <input type="password" name="passw" id="passw" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                                <hr>
                                <br>You have an account? <a href="login.php">Go back.</a></br>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>