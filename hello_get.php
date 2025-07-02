<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
    if(isset($_GET['name'])) {
        echo "こんにちは".$_GET['name']."さん";
    } else {
        echo "クエリパラメーターがありませんでした";
    }