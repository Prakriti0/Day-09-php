<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="cinemas";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    echo ("connection successful");
    $title =$_GET['title'];
    $rating =$_GET['rating'];
    $desc =$_GET['description'];
    $sql= "INSERT INTO movies(id,title,rating,description) VALUES(null,'$title',$rating,'$desc')";
    $res = $conn->query($sql);
    if($res === TRUE){
        echo("inserted successfully");
        header("Location:movies.php");
    }
    else{
        echo ("could not insert");
    }
    ?>
</body>
</html>
</body>
</html>