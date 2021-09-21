<?php

require_once("dbc.php");

$result = $_POST;

$sql = "INSERT INTO posted(name,contents) VALUES (:name,:contents)";

$dbh = dbConnect();

try {
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":name", $result["name"], PDO::PARAM_STR);
    $stmt->bindValue(":contents", $result["contents"], PDO::PARAM_STR);
    $stmt->execute();
    echo "ブログを投稿しました";
} catch (PDOException $e) {
    exit($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="main.php">掲示板へ移動</a>

<body>

</body>

</html>