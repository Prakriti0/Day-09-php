<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    echo "connection successful";
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    if($result->num_rows>0){
       while( $row= $result->fetch_assoc()){
        {
            ?>
            <div class="box">
            <div class="innerbox">
            <div class="id">
                    <?php  echo $row['id']; ?>
                </div>
                <div class="title">
                    <?php  echo $row['title']; ?>
                </div> 
                <div class="rating"><br>
                    <?php  echo $row['rating']; ?>
                </div>
                <div class="desc">
                    <?php  echo $row['description']; ?>
                </div>
            </div>
            </div>
           
            <?php
        }
    }
}

    $conn->close();
    ?>
</body>
</html>