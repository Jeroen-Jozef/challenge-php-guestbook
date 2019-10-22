<?php

require 'post.php';
require 'PostLoader.php';

$date = '';
$title = '';
$message = '';
$author ='';



if(isset( $_POST['submit'] )) {

    $date = $_POST['date'];
    $title = $_POST['title'];
    $message = $_POST['messageContent'];
    $author = $_POST['authorName'];

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form name="message" action="" method="post">
        <input name="date" type="text" value="<?php echo date('d/m/Y H:i'); ?>">
        <br>
        <input name="title" type="text">
        <br>
        <textarea name="messageContent" id="" cols="30" rows="10"></textarea>
        <br>
        <input name="authorName" type="text">
        <br>
        <input type="submit" value="See you next time!">
    </form>

</body>
</html>


