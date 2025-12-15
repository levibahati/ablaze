<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name:<input type="text" name="name"/>
        Age:<input type="text" name="age"/>
        <input type="submit"/>
    </form>
</body>
</html>

<?php
if(isset($_POST["name"]) || isset($_POST["age"])){
    echo "Hi ". $_POST["name"]. "<br/>";
    echo "You are ". $_POST["age"]. " years old";

    exit();
}
?>