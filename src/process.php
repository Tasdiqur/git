<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP Response</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <header>
            <h1>PHP Dynamic Response</h1>
        </header>
        <main>
            <h2>Hello, $name!</h2>
            <p>Welcome to our PHP-powered website.</p>
            <a href='index.php'>Go Back</a>
        </main>
    </body>
    </html>";
}
?>
