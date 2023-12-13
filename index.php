

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Email Validation</h2>
    <form action="index.php" method="GET">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="your.email@gmail.com">

        <button type="submit">Invia</button>
    </form>
    
    
    <?php 
        if (isset($_GET["email"])) {
            if (str_contains($_GET["email"], '@')) {
                if (str_contains($_GET["email"], '.')) {
                    ?>
                        <h3>L'email è valida</h3>
                    <?php 
                } else {
                    ?>
                        <h3>L'email non è valida, manca: "."</h3>
                    <?php
                }
            } elseif (str_contains($_GET["email"], '.')) {
                ?>
                    <h3>L'email non è valida, manca: "@"</h3>
                <?php 
            } else {
                ?>
                    <h3>L'email non è valida, manca: "." e "@"</h3>
                <?php
            }
        }
    ?>
</body>
</html>