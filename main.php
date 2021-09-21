<?php

require_once("dbc.php");
$dbh = dbConnect();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>

<body>
    <h2>投稿内容</h2>
    <?php $contents = $dbh->query("SELECT * FROM posted"); ?>
    <?php foreach ($contents as $row) : ?>
        <?php echo $row["id"] . ":" . $row["contents"] . ":" . $row["time_stamp"] . "<br>"; ?>
    <?php endforeach ?>
    <a href="index.html">新規投稿する</a>
</body>

</html>