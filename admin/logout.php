<?php
    if(!isset($_SESSION["loginid"])){
        session_start();
        session_destroy();
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");
    }   
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="../css/default.css">
    </head>
    <body>
        <div id="container">
        </div>
    </body>
</html>