<?php
    $pdo = new PDO("mysql:host=localhost;dbname=news_academy;charset=utf8", "root", "");
    $sql = "SELECT * FROM category_master ORDER BY id ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($results);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
    <body>
        <div id="sidemenu">
            <div id="side_top">
                <a href="index.php"><img src="images/btn-k_top.png"></a>
            </div>    
            
            <div id="side_menubar">
                <ul>
                    <?php
                        foreach($results as $row) {
                            $category_id = $row["id"];
                            $category_name = $row["category_name"];
                            $category_show = $row["show_flg"];

                            if($category_show == 1){
                                echo "<li><a href='category.php?id=$category_id'>" .$category_name. "</a></li>";
                            }
                        }
                    ?>
                </ul>
                <ul>
                    <li>企業情報</li>
                    <li>ニュース</li>
                    <li>お知らせ</li>
                </ul>
            </div>
        </div>

    </body>
</html>