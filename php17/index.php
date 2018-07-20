<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
 mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
        <header>
            <h1><a href "#"><img src="4eachblog_logo.jpg" width="200px" height="50px"></a></h1>

            <ul>
                <li><a href="#">トップ</a></li>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">4eachについて</a></li>
                <li><a href="#">登録フォーム</a></li>
                <li><a href="#">問い合わせ</a></li>
                <li><a href="#">その他</a></li>
            </ul>

        </header>

        <main>
            <div class="main-container">
                <div class="left">
                    <h2> プログラミングに役立つ掲示板</h2>

                    <form method="post" action="insert.php">
                        <h3 class="nyuuryoku">入力フォーム</h3>
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>

                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>

                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>


                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>

                    </form>

                    <?php   
while($row = $stmt->fetch()){
echo "<div class='left2'>";
echo "<h3 class='title'>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
    
}
?>

                </div>



                <div class="right">

                    <div class="bx1">
                        <h3>人気の記事</h3>
                        <p><a href="#">PHP オススメ本</a></p>
                        <p><a href="#">PHP MyAdminの使い方</a></p>
                        <p><a href="#">今人気のエディタ　Top5</a></p>
                        <p><a href="#">HTMLの基礎</a></p>
                    </div>
                    <div class="bx2">
                        <h3>オススメリンク</h3>
                        <p><a href="#">インターノウス株式会社</a></p>
                        <p><a href="#">XAMPPのダウンロード</a></p>
                        <p><a href="#">Eclipseのダウンロード</a></p>
                        <p><a href="#">Braketsのダウンロード</a></p>
                    </div>
                    <div class="bx3">
                        <h3>人気の記事</h3>
                        <p><a href="#">HTML</a></p>
                        <p><a href="#">PHP</a></p>
                        <p><a href="#">MySQL</a></p>
                        <p><a href="#">JavaScript</a></p>
                    </div>

                </div>


            </div>




        </main>
        <footer>
            copyright &copy; internous | 4each blog is the one which provides A to Z about programming.
        </footer>


</body>


</html>
