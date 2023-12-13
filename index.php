<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Email Validation</h2>
    <form action="index.php" method="GET">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="your.email@gmail.com">

        <button type="submit">Invia</button>
    </form>
    
    <h3><?php include_once __DIR__ . "/functions.php"?></h3>
</body>
</html>

