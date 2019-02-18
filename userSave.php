<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            background-color: #30ccff;
            height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<form action="userSaveProcess.php" method="post"><br>
    <legend>
        <a href="viewUsers.php">View Users</a>
    </legend>
    <input type="text" name="x" placeholder="item" class="form group"><br>
    <input type="quantity" name="y" placeholder="quantity" class="form-group"><br>
    <input type="price" name="z" placeholder="price" class="form-group"><br>
    <input type="submit" name="btnsubmit" value="save" class="btn btn-outline-succes"><br>
    <input type="reset" name="btnreset" value="refresh" class="btn btn-primary">
</form>

</body>
</html>