<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
    if(isset($_POST['name'])) {
        echo "こんにちは".$_POST['name']."さん";
    } else {
        echo "POSTがありませんでした";
    }