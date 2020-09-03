<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP100本ノック</title>
</head>
<body>
<?php
header('Content-Type: text/html; charset=UTF-8');
ini_set("display_errors", 1);
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");

require_once("./phpQuery-onefile.php");
$html = file_get_contents("https://ja.wikipedia.org/wiki/%E3%82%A6%E3%82%A7%E3%83%96%E3%82%B9%E3%82%AF%E3%83%AC%E3%82%A4%E3%83%94%E3%83%B3%E3%82%B0");
$dom = phpQuery::newDocument($html);

// h1タグを取り出す
$h1 = $dom->find("h1")->text();
echo $h1 . '<br/>';

// titleタグの中身を取り出す
$title = $dom->find("title")->text();
echo $title . '<br/>';

// aタグを取り出す
foreach ($dom->find('a') as $a){
$a = $a->getAttribute('href');
echo '<a href=' . $a . '>' . $a . '</a><br/>';
}

?>
</body>
</html>