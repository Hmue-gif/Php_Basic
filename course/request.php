<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="response.php?name=Hmue&age=20&goal=developer">to server</a> <br>


    <form action="response.php" method="post">
        <input type="text" name="name" value="Hmue">
        <input type="text" name="age" value="20">
        <input type="text" name="goal" value="developer">
        <input type="file">
        <input type="submit" value="submit">
    </form>
</body>
</html>