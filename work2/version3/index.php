<?php
$title = "Главная страница - страница обо мне";
$info = "Информация обо мне";
$year = "2022";

$content = file_get_contents("site.html");

$content = str_replace("{{ title }}, {{ info }}, {{ year }}", $title, $info, $year, $content );

echo ("$content");