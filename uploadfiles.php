<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // echo "<prev>";
    // print_r($_FILES);
    // echo "<prev/>";
    $uploaded = $_FILES;
    echo "<pre>";
    print_r($uploaded);
    echo "<pre/>";
    echo "Uploaded file type is :".$_FILES['uploadedfile']['type']." with the  name : " .$_FILES['uploadedfile']['name'];
    $temp_name = $_FILES['uploadedfile']['tmp_name'];
    $topath = 'Images/'.$_FILES['uploadedfile']['name'];
    // echo move_uploaded_file($temp_name,$topath); this methods return true or false
    if(move_uploaded_file($temp_name,$topath)){
        echo " files has been uploaded successfully";
    }else{
        echo "some error occurs during uploaddation";
    }
}else{
    echo "didn't get any data";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

  <div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadedfile"  id="uploadedfile">
        <button type="submit">Upload</button>
    </form>
  </div>
    
</body>
</html>