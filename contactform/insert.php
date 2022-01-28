<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");

$pdo -> exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問合わせ内容確認</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<div class="container">
    <h2>お問合わせフォーム</h2>

    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>
        3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>

</div>
</body>
</html>
