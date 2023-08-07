<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D_I | Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <script src="../assets/js/jquery-3.6.3.min.js"></script>

</head>

<body>
    <div class="container">
        <center>
            <div class="alert-part">

            </div>
        </center>
        <div class="row mt-5 pt-5">
            <div class="col-2"></div>
            <div class="col-8" style="height: 10rem;">
                <div class="row">
                    <div class="card  col-6 bg-primary">
                        <div class="row mt-5">
                            <div class="col-12 bg-light p-4">
                                <h5 class="text-center fw-bold text-primary">INVENTORY MANAGEMENT SYSTEM</h5>
                            </div>
                            <p class="text-center mt-5 text-light p-5">&copy; Nischal Shakya Lalitpur, Nepal. ALL Rights Preserved.</p>
                        </div>
                    </div>
                    <div class=" card p-5 col-6" style="background-color: rgb(232, 227, 227);">
                        <h4 class="text-center" id="login_heading">USER LOGIN</h4><br>
                        <br>
                        <input type="text" class="form-control mt-4" id="username" placeholder="Username">
                        <input type="password" id="password" class="form-control mt-3" placeholder="Password">
                        <a href="forget_password" class="text-end text-secondary text-decoration-none">Forget password?</a>
                        <input type="submit" value="login" class="form-control col-12 mt-4 btn btn-warning" style="color:white;" id="login_btn">
                    </div>
                </div>

            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="../assets/js/index.js?v=1"></script>
</body>

</html>