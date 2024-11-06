<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>


        <input type="submit" value="Set" name="set">
        <input type="submit" value="Delete" name="delete">
       
    </form>

<?php
$fruit="apple";
setcookie("fruit","apple",time()+(86400));
print_r($_COOKIE);

if(isset($_COOKIE['fruit'])){
    echo "Cookie is set";
    print_r($_COOKIE);
}
else{
    echo "Cookie is not set";
}

if(isset($_POST['set'])){
    $cok=setcookie('user',$_POST['name'],time()+(86400));
    echo 'cookie is set';
}
if(isset($_POST['delete'])){
    if(isset($_COOKIE['user'])){
    $cok=setcookie('user',null,-1);
    echo 'cookie delete';
    }
}
?>