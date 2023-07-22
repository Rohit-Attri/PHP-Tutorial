<?php
$name = $email = $username = $password = $cpassword = '';
$gender;
$image;
$nerr = $eerr = $uerr = $perr = $cperr = $ferr = '';
$disp = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fusername = $_POST['username'];
    $fpassword = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $image = $_FILES['fFile'];
    $cn = preg_match("/^[a-zA-Z ]+$/", $name);
    $ce = filter_var($email, FILTER_VALIDATE_EMAIL);
    $cu = preg_match("/^[a-zA-Z0-9_@\-]+$/", $fusername);
    $cp = preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/", $fpassword);
    $cf = $_FILES['fFile']['type'];
    if ($cpassword != $fpassword) {
        $cperr = "Please match the password and confirm password";
    }
    if (!$cn) {
        $nerr = "Use letters and white spaces Only";
    }
    if (!$ce) {
        $eerr = "Please enter correct email address";
    }
    if (!$cu) {
        $uerr = "do not use spaces use only[@,-,_] as a special charcter";
    }
    if (!$cp) {
        $perr = "Please match the password pattern";
    }
    if ($cf != 'image/png' && $cf != 'image/jpeg' && $cf != 'image/webp') {
        $ferr = "Please upload Imges only(jpeg,png and webp)";
    }
    if ($nerr == '' && $eerr == '' && $uerr == '' && $perr == '' && $cperr == '' && $ferr == '') {
        $disp = true;
        $topath = "Images/" . $image['name'];
        $temp_path = $image['tmp_name'];
        $fileuploaded = move_uploaded_file($temp_path, $topath);
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'registration';
        $mpassword = md5($fpassword);
        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
            $qry = "INSERT INTO `user_info`(`name`,`email`,`username`,`password`,`gender`,`image_file`) VALUES ('$name','$email','$fusername','$mpassword','$gender','$topath');";
            $result = mysqli_query($conn, $qry);
            if ($result) {
                header('location: uploadfiles.php');
            }

        } catch (Exception $e) {
            echo "some error occured";
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Validation!</title>
    <style>
        #main-continer {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #main-continer>div {
            padding: 20px;
            width: 600px;
        }

        #lgender {
            margin-right: 15px;
        }

        .err {
            color: red;
        }

        .img {
            width: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container" id="main-continer">
        <div>
            <h2>Register Here!</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>"
                        required /> <span class="err">
                        <?php echo (empty($nerr)) ? null : '*' . $nerr; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>"
                        required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div><span
                        class="err">
                        <?php echo (empty($eerr)) ? null : '*' . $eerr; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="<?php echo $fusername ?>" required> <span class="err">
                        <?php echo (empty($uerr)) ? null : '*' . $uerr; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="passwordHelp" class="form-text">Password must contain atleast one small character and one
                        capital character,one number, one special character and at least have six digits</div> <span
                        class="err">
                        <?php echo (empty($perr)) ? null : '*' . $perr; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required> <span
                        class="err">
                        <?php echo (empty($cperr)) ? null : '*' . $cperr; ?>
                    </span>
                    <div id="emailHelp" class="form-text">Both the passwords should be same.</div>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label" id="lgender">Gender:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderm" value="male" checked>
                        <label class="form-check-label" for="genderm">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderf" value="female">
                        <label class="form-check-label" for="genderf">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gendero" value="others">
                        <label class="form-check-label" for="gendero">Other</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fFile" class="form-label">Upload Your Profile</label>
                    <input class="form-control" type="file" id="fFile" name="fFile" required /> <span class="err">
                        <?php echo $ferr; ?>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h3>Your data</h3>
        <?php
        if ($disp == true) {
            ?>
            <div>
                <p>Your Name:
                    <?php echo $name ?>
                </p>
                <p>Your Email:
                    <?php echo $email ?>
                </p>
                <p>Your Password:
                    <?php echo $fpassword ?>
                </p>
                <p>Your Gender:
                    <?php echo $gender ?>
                </p>
                <p>Your File:
                    <?php echo $_FILES['fFile']['name'] ?>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="container">
        <img src="<?php echo $topath; ?>" alt="" class="img">
    </div>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>