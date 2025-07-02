<?php
    if(isset($_POST['name'])) {
        echo "こんにちは".$_POST['name']."さん";
    } else {
        echo "POSTがありませんでした";
    }