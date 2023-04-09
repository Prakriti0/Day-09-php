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
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM movies where id = $id";
    $res = $conn->query($sql);
    if($res === TRUE){
        echo("deleted successfully");
        header("Location:movies.php");
    }
    else{
        echo ("cannot delete");
    }

    ?>
</body>
</html>