<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$fig = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, "$name,$mail"."\r\n");//yama,test@test.jp
fclose($file);


/* if($name==""){
     $name = "未入力です";
     $fig = 1;
 }
 if($mail==""){
     $mail = "未入力です";
     $fig = 1;
 }
*/
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>

<!-- <?php
    if($fig == 0){
?>
    <button>登録</button>
<?php
    }
?> -->

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>

<!-- 課題は
名前とメールの変数をカンマ区切りの文字列にしてファイルに書き込めるようにしてください。
文字列イメージ
例） yamazaki , test@test.jp
daisu yamazaki12:16
確認のURL（必ずここから）
localhost/php01/post.php -->