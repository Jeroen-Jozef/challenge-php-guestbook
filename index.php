<?php

require 'post.php';
require 'PostLoader.php';

//$date = '';
//$title = '';
//$message = '';
//$author ='';

if (isset($_POST['submit'])) {

    $date = $_POST['date'];
    $title = $_POST['title'];
    $message = $_POST['messageContent'];
    $author = $_POST['authorName'];

    if (isset($date) && isset($title) && isset($message) && isset($author)) {
        $message = new Post($date, $title, $message, $author);
        $post = json_encode($message);
        file_put_contents('posts.json', $post );
    }

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
<h1>Sign our guestbook</h1>

<?php
$loader = new PostLoader();
$whatever = $loader->loadPosts();

//var_dump($loader);

//$formList = new PostLoader();
//$formList->loadPosts();
foreach ($whatever AS $formItem): ?>
    <h3><?php echo $formItem->getDate(); ?></h3>
    <h2><?php echo $formItem->getTitle(); ?></h2>
    <p><?php echo $formItem->getContent(); ?></p>
    <p><?php echo $formItem->getAuthorName(); ?></p>
<?php endforeach; ?>


<h1>Thank you for your message</h1>
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


