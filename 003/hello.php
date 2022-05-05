<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>はろーわーるど</title>
</head>
<body>
<?php
    $now = intval((new Datetime('now'))->format('H'));
    $message = "";
    if(($now >= 0 && $now <= 7) || ($now >= 21 && $now <= 23) ) {
        $message = "こんばんは";
    } elseif($now >= 7 && $now <= 10) {
        $message = "おはようございます";
    } else { // 11〜19
        $message = "こんにちは";
    }
?>
ただいま <?= $now ?>時 です、<?= $message ?>。
</body>
</html>
