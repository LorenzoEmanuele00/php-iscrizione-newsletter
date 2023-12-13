<?php
    if (isset($_GET["email"])) {
        if (str_contains($_GET["email"], '@')) {
            if (str_contains($_GET["email"], '.')) {
                ?>
                    <h3 class='alert-success'> L'email è valida </h3>
                <?php
            } else {
                ?>
                    <h3 class='alert-danger'> L'email non è valida, manca: "." </h3>
                <?php
            }
        } elseif (str_contains($_GET["email"], '.')) {
            ?>
                <h3 class='alert-danger'> L'email non è valida, manca: "@" </h3>
            <?php
        } else {
            ?>
                <h3 class='alert-danger'> L'email non è valida, manca: "." e "@" </h3>
            <?php
        }
    }
?>

