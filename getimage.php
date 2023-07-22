<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';
$conn = new mysqli($servername, $username, $password, $dbname);
$qry = "SELECT * FROM `USER_INFO`;";
$result = mysqli_query($conn, $qry);
$num = mysqli_num_rows($result);
$num2 = mysqli_affected_rows($conn);
echo $num . "and" . $num2;
$image_data = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $image = $row['image_file'];
        $image_data[$name] = $image;
    }
}
print_r($image_data);
echo "<br/>";
$x = false and true;
$x = true and false;
echo var_dump($x);
//in the above case it will always consider value before and

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Images form data base</title>
</head>
<body>
    <div>
        <h3>Gopal Image</h3>
        <img src="<?php echo $image_data['Gopal Saraswat']  ?>" alt="" width='300px'>
        <h3>Mohit Image</h3>
        <img src="<?php echo $image_data['Mohit Chaudhary']  ?>" alt="" width='300px'>
    </div>
</body>
</html>