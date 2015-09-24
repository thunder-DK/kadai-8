<?php
    /*
    $pdo = new PDO("mysql:host=localhost;dbname=news_academy;charset=utf8", "root", "");
    $sql = "SELECT * FROM category_master ORDER BY id ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($results);
    */
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XXXXXXX</title>

        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <script type="text/javascript" src="./js/masonry.pkgd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>

        <?php include "sidemenu.php" ?>
        <!--
        <div id="sidemenu">

            <ul>
                <?php
                    /*
                    foreach($results1 as $row) {
                        $category_id = $row["id"];
                        $category_name = $row["category_name"];
                        $category_show = $row["show_flg"];

                        if($category_show == 1){
                            echo "<li><a href='category.php?id=$category_id'>" .$category_name. "</a></li>";
                        }
                    }
                    */
                ?>
            </ul>

            <ul>
                <li>ビジネス全般</li>
                <li>経営</li>
                <li>営業</li>
                <li>SE／プログラマー</li>
                <li>エンジニア</li>
                <li>経理</li>
                <li>総務</li>
                <li>人事</li>
                <li>グルメ</li>
                <li>その他お役立ち情報</li>

            </ul>

            <ul>
                <li>企業情報</li>
                <li>ニュース</li>
                <li>お知らせ</li>
            </ul>
        </div>
        -->
        
        <div id="container">
            
            <div id="keyvisual">
                <img src="./images/keyvisual01.jpg">
            
            </div>
            
            <div class="row" id="masonry">
                
                <!-- ここから -->
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-1">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image01.jpg">
                            <p align="center">テストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image02.jpg">
                            <p align="center">テストテストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image03.jpg">
                            <p align="center">テストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image04.jpg">
                            <p align="center">テストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image05.jpg">
                            <p align="center">テストテストテストテストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image06.jpg">
                            <p align="center">テストテストテストテストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image07.jpg">
                            <p align="center">テストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image08.jpg">
                            <p align="center">テストテストテストテストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="./images/image09.jpg">
                            <p align="center">テストテストテストテストテストテストテストテスト</p>
                        </div>
                    </div>
                </div>
                <!-- この部分を繰り返す -->
            </div>
        </div>
        
        <!--
        <script>
            $(function(){
                $('#masonry').masonry({
                    itemSelector: '.grid',
                    isFitWidth: true,
                    isAnimated: true
                });
            });
        </script>
        -->

    </body>
</html>