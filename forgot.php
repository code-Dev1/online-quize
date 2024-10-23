<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/images/logo.png">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
    <title>Self-test</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="gx-5 gx-lg-4 col col-lg-4 col-md-6 col-sm-8 " id="forgitPass">
                <div class="card">
                    <div class="card-header"><div class="card-title"><h3>Forgot Password</h3></div></div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group">
                                <input type="email" name="" id="" class="form-control" placeholder="Enter your email">
                                <input type="submit" value="Next" class="input-group-append btn btn-success emailSub">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="gx-5 gx-lg-4 col col-lg-4 col-md-6 col-sm-8 d-none" id="OTP">
                <div class="card">
                    <div class="card-header"><div class="card-title"><h3>Enter OTP code</h3></div></div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" placeholder="Enter OTP code" min="100000" max="999999">
                                <input type="submit" value="Next" class="input-group-append btn btn-success" id="otpSub">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="gx-5 gx-lg-4 col col-lg-4 col-md-6 col-sm-8 d-none" id="newPass">
                <div class="card">
                    <div class="card-header"><div class="card-title"><h3>Enter new password</h3></div></div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Enter your new password">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Confirm password">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success float-end" id="passSub">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/script.js"></script>
</body>
</html>
