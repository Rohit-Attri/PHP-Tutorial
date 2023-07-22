<?php
$message = "";
$conn = new mysqli('localhost', 'root', '', 'test');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $username = $_POST['username'];
    $qry = "INSERT INTO `userdata` (`name`,`email`,`username`,`password`) VALUES ('$name','$email','$username','$pass')";
    $result = $conn->query($qry);
    $num = mysqli_affected_rows($conn);
    if ($num > 0) {
        $message = "Toal Inserted Rows " . $num;
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

        .error {
            border: solid 1px red;
        }

        .err {
            color: red;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <div class="container" id="main-continer">
        <div>
            <h2>Provide Your Info!</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="myform">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                    <span class="err" name="nameerr"> </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <span class="err" name="emailerr"> </span>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <span class="err" name="usererr"></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <span class="err" name="passerr"></span>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    <span class="err" name="cpasserr"> </span>
                </div>
                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
            </form>
            <h4>Your data: </h4>
            <div>
                <?php
                if ($conn) {
                    $fetch = "SELECT * FROM `userdata`";
                    $result = $conn->query($fetch);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <p>
                                Your Name :
                                <?php echo $row['name']; ?>
                            </p>
                            <p>
                                Your email :
                                <?php echo $row['email']; ?>
                            </p>
                            <p>
                                Your Username:
                                <?php echo $row['username']; ?>
                            </p>
                            <p>
                                Your Password:
                                <?php echo $row['password']; ?>
                            </p>
                        <?php }
                    }
                }

                ?>
            </div>

        </div>
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
    <script>
        const name = document.forms['myform']['name'];
        const email = document.forms['myform']['email'];
        const username = document.forms['myform']['username'];
        const password = document.forms['myform']['password'];
        const cpassword = document.forms['myform']['cpassword'];
        const span = document.getElementsByClassName('err');
        const btn = document.getElementById('btn');
        let nameerr;
        name.addEventListener("blur", () => {
            let pattern = /^[a-zA-Z ]{3,}$/;
            let str = name.value;
            if (!pattern.test(str)) {
                name.classList.add('error');
                span['nameerr'].innerHTML = "*Please type only alphabets and white spaces and at least have 3 characters";
                btn.setAttribute('disabled', "");
            } else {
                name.classList.remove('error');
                span['nameerr'].innerHTML = "";
                btn.removeAttribute('disabled');
            }
        });
        email.addEventListener("blur", () => {
            let pattern = /^[A-Za-z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/;
            let str = email.value;
            if (!pattern.test(str)) {
                name.classList.add('error');
                span['emailerr'].innerHTML = "*Please type correct email adderess";
                btn.setAttribute('disabled', "");
            } else {
                name.classList.remove('error');
                span['emailerr'].innerHTML = "";
                btn.removeAttribute('disabled');
            }
        });
        username.addEventListener("blur", () => {
            let pattern = /^[a-zA-z0-9]+$/;
            let str = username.value;
            if (!pattern.test(str)) {
                name.classList.add('error');
                span['usererr'].innerHTML = "*Please include alphabates and number only";
                btn.setAttribute('disabled', "");
            } else {
                name.classList.remove('error');
                span['usererr'].innerHTML = "";
                btn.removeAttribute('disabled');
            }
        });
        password.addEventListener("blur", () => {
            let pattern = /^(?=.{6,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/;
            let str = password.value;
            if (!pattern.test(str)) {
                password.classList.add('error');
                span['passerr'].innerHTML = "*Should include at least one uppercase,number,lowercase,special character and ofminimum length 6";
                btn.setAttribute('disabled', "");
            } else {
                password.classList.remove('error');
                span['passerr'].innerHTML = "";
                btn.removeAttribute('disabled');
            }
        });
        cpassword.addEventListener("blur", () => {
            if (password.value == cpassword.value) {
                cpassword.classList.remove('error');
                span['cpasserr'].innerHTML = "";
                btn.removeAttribute('disabled');
            } else {
                cpassword.classList.add('error');
                span['cpasserr'].innerHTML = "*Please match password and confirm password";
                btn.setAttribute('disabled', "");
            }
        });
        function handlesubmit() {
            console.log(name.value);
            console.log(email.value);
            console.log(username.value);
            console.log(password.value);
            return false;
        }
        btn.addEventListener('click', handlesubmit);
    </script>
</body>

</html>