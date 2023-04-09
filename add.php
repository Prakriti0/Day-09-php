<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Please enter all the details:</legend>
    <form action="create.php" method="GET">
        <label for="title">TITLE:</label>
        <input type="text" name ="title" placeholder="enter title" required> <br>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" placeholder="ratings" min="1" max="5" required><br>
        <label for="desc">Description:</label>
        <textarea name="description" placeholder="enter description" required> </textarea>
        <input type="submit">
    </form>
    </fieldset>
 
</body>
</html>