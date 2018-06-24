   <?php


if(isset($_POST['submit'])){
    $name = htmlentities($_POST['name'])
        
    setcookie('name', $name, time()+3600);
    
    header('Location: cookie-test.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Cookies</title>    
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>