<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- https://www.php.net/manual/en/function.get-browser.php -->
<?php
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

    $browser = get_browser(null, true);
    print_r($browser);
?>

</body>
</html>