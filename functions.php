<?php
    if (isset($_GET["email"])) {
        if (str_contains($_GET["email"], '@')) {
            if (str_contains($_GET["email"], '.')) {
                echo 'L\'email è valida';
            } else {
                echo 'L\'email non è valida, manca: "."';
            }
        } elseif (str_contains($_GET["email"], '.')) {
            echo 'L\'email non è valida, manca: "@"';
        } else {
            echo 'L\'email non è valida, manca: "." e "@"';
        }
    }
?>