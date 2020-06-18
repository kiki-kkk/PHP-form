<?php
// teratailaで教えてもらった
$name = filter_input(INPUT_POST, "getname");
echo $name;

// Undefined index: 未定義の配列の要素を使用した時に出るエラー
// $name = $_POST["name"] ?? "getname"; -->