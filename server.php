<?php
$_POST = json_decode(file_get_contents("php://input"), true); // получаем и работаем с JSON данными
echo var_dump($_POST);//берет данные от клиент, превращает в строку и поазывает обратно на клиенте response
