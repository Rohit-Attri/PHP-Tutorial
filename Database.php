<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('log_errors', 1);
// ini_set('error_log', 'error.log');  chat gpt solution but didn't work


$Server = "localhost";
$Username = "root";
$Password = "";
$database = "registration";


$conn = mysqli_connect($Server, $Username, $Password, $database);
if (!$conn) {
    echo (
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> We are unable to connect you to  ' . $database . ' database. ' . mysqli_connect_error() . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
    );
} else {
    echo (
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You are successfully connected to ' . $database . ' database.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
    );
}

// the below code is to create database from your program
// $qry = "CREATE DATABASE registration";
// mysqli_query($connection, $qry);
// echo (
//     '<div class="alert alert-success alert-dismissible fade show" role="alert">
//           <strong>Success!</strong> Database created Successfully.
//           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//         </div>'
// );

//crete a table in your database
// $qry = "CREATE TABLE `users` (`Srno.` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`Srno.`));";
// $result = mysqli_query($conn,$qry);
// if($result){
//     echo (
//         '<div class="alert alert-success alert-dismissible fade show" role="alert">
//               <strong>Success!</strong> Table has successfully created in '. $database .' database.
//               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//             </div>'
//     );
// } else {
//     echo "there is an error occured". mysqli_error($conn);
// }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rohit Attri">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DatabaseTutorial</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/PhpBasics">DatabaseTutorial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" saria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/PhpBasics">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    $email = "";
    $pass = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $qry = "INSERT INTO `users` (`email`, `password`, `date`) VALUES (' $email' , '$pass' , current_timestamp())";
        $result = mysqli_query($conn, $qry);
        if ($result) {
            echo (
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> Data has been submitted successfully to ' . $database . ' database.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
            );
        } else {
            echo "something happend wrong";
        }
    } else {
        echo "there is a problem occured submitting the form";
    }
    ?>

    <div class="container my-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container my-2">
        <h4>Data Fatched from database</h4>
    </div>
    <div class="container">
        <?php
        $qry2 = "SELECT * FROM `users`;";
        $result2 = mysqli_query($conn, $qry2);
        //   echo var_dump($result2); here we can check type of you result variable
        $num = mysqli_num_rows($result2);
        echo "Total Users: " . $num;
        echo "<br/>";
        if ($num > 0) {
            // $row = mysqli_fetch_assoc($result2);
            // echo var_dump($row);
            // echo "<br/>";
            // $row = mysqli_fetch_assoc($result2);
            // echo var_dump($row);
            // echo "<br/>";
            // $row = mysqli_fetch_assoc($result2);
            // echo var_dump($row);
            // echo "<br/>";
            // $row = mysqli_fetch_assoc($result2);
            // echo var_dump($row);
            // echo "<br/>";
            // $row = mysqli_fetch_assoc($result2);
            // echo var_dump($row);
            // echo "<br/>";
            // echo "<br/>";  we can pick every row manually or we can use 
            while ($row = mysqli_fetch_assoc($result2)) {
                // echo var_dump($row);
                echo "<h6> User " . $row["Srno."] . "'s credentials are, email is" . $row['email'] . " and password is " . $row["password"] . " and this account created on " . $row["date"] . "</h6>";
                echo "<br/>";
            }
        }
        ?>
    </div>
    <div class="container">
        <h4>Fatch Data on specific conditions</h4>
        <?php
        $qry = "SELECT * FROM `users` WHERE `email` = 'test@gmail.com';";
        $result = mysqli_query($conn, $qry);
        // echo var_dump($result);
        $num = mysqli_num_rows($result);
        echo "Total Fake Users: " . $num;
        echo "<br/>";
        $no = 1;
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // echo "<h6> User " . $no . "'s credentials are, email is" . $row['email'] . " and password is " . $row["password"] . " and this account created on " . $row["date"] . "</h6>";
                // echo "<br/>";
                // $no = $no +1;
                echo "<h6> User " . $row['Srno.'] . "'s credentials are, email is" . $row['email'] . " and password is " . $row["password"] . " and this account created on " . $row["date"] . "</h6>";
                echo "<br/>";
                $no = $no + 1;
            }
        }
        ?>
    </div>
    <div class="container">
        <?php
        $qry = "UPDATE `users` SET `password` = 'Test@123' WHERE `email` = 'test@gmail.com';";
        $result = mysqli_query($conn, $qry);
        // echo var_dump($result);
        $num = mysqli_affected_rows($conn);
        if ($result) {
            echo (
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> We have successfully updated  ' . $num . ' rows.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
            );
        } else {
            echo (
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Unable to update data.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'
            );
        }
        ?>
    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>