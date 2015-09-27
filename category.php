<?php
    /*
    $pdo = new PDO("mysql:host=localhost;dbname=news_academy;charset=utf8", "root", "");
    $sql = "SELECT top_image_path, contents_title FROM category_contents_top JOIN contents_detail ON category_contents_top.contents_id = contents_detail.contents_id";
    //var_dump($sql);
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();
    //var_dump($result);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
    */
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>カテゴリー紹介</title>

        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <script type="text/javascript" src="./js/masonry.pkgd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>

        <?php include "sidemenu.php" ?>
        
        <div id="container">
            
            <div id="subview">
                <div class="row" id="masonry">
                    <?php
                        $c_id = $_GET["id"];

                        $pdo = new PDO("mysql:host=localhost;dbname=news_academy;charset=utf8", "root", "");
                        $sql = "SELECT * FROM category_contents_top JOIN contents_detail ON category_contents_top.contents_id = contents_detail.contents_id WHERE category_contents_top.category_id = " .$c_id;
                        
                        $stmt = $pdo->prepare($sql);
                        $result = $stmt->execute();
                        //var_dump($result);
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        //var_dump($results);

                        foreach($results as $row) {
                            $contents_id = $row["contents_id"];
                            $image_path = $row["top_image_path"];
                            $image_title = $row["contents_title"];

                            echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-1">';
                                echo '<div class="panel">';
                                    echo '<div class="panel-body">';
                                        echo "<a href='contents_detail.php?id=$contents_id'>";
                                        echo '<img src="' .$image_path. '">';
                                        echo '<p align="center">' .$image_title. '</p>';
                                        echo "</a>";
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <?php include "footer.php" ?>

            </div>
        </div>

    </body>
</html>