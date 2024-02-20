<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        .form-gap {
            padding-top: 70px;
        }
    </style>
</head>

<body style="background: url('../public/image/back-image.jpeg') no-repeat center center fixed  !important;">
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3 style="color:#020832;"><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 style="color:#020832;" class="text-center">Quên mật khẩu !</h2>
                            <p style="color: #0ed0ef;">Bạn có thể khởi tạo lại mật khẩu tại đây.</p>
                            <div class="panel-body">
                                <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group">
                                        <div style="margin-bottom:5px;" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="email" placeholder="Email " class="form-control" type="email" required>
                                        </div>
                                        <small style="opacity:0.5">Email chứa mật khẩu mới sẽ gửi tới hộp thư của bạn</small>
                                    </div>
                                    <div style="display: flex;">
                                        <span style="margin-bottom:10px; opacity:0.7; " class="pull-right"> <a href="index.php"> Về trang chủ </a></span>

                                        <input style="float: right !important;margin-left: 75px;" name="submit" class="btn btn-md btn-primary" value="Phục hồi mật khẩu" type="submit">
                                    </div>


                                    <div id="noti" class="btn btn-success" style="display:none;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php

// Hash mot chuoi ki tu ngau nhien, $length la do dai chuoi
function rand_string($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen($chars);
    $str = "";
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, $size - 1)];
    }
    return $str;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbangiay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    // get email
    $email = $_POST["email"];

    // check if email exists
    $checkemail = "select * from usser where email='" . $email . "'";
    $result = $conn->query($checkemail);
    if ($result->num_rows == 0) {
        echo "<script>document.getElementById('noti').innerHTML='Email Không Tồn Tại !';
        document.getElementById('noti').style.display='block'</script>";
        die();
    };

    // hash a new password
    $hash = rand_string(5);
    $to_email = $email;
    $subject = 'Reset Password';
    $message = 'This is your new password: ' . $hash . ' !';
    $headers = 'From: webbangiay';
    mail($to_email, $subject, $message, $headers);

    $sql = "update usser    
        set password = '" . $hash . "'
        where Email ='" . $email . "'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>document.getElementById('noti').innerHTML='Mật Khẩu Mới Đã Được Chuyển Vào Hộp Thư';
            document.getElementById('noti').style.display='block';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}


?>

<!-- done forget password -->