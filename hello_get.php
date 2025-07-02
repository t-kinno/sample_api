<?php
    if(isset($_GET['name'])) {
        echo "こんにちは".$_GET['name']."さん";
    } else {
        echo "クエリパラメーターがありませんでした";
    }