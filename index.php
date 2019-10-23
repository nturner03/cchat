<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myfile = fopen("log.txt", "a") or die("Unable to open file!");
    $txt = $_POST["chat"] . "\n";
    fwrite($myfile, $txt);
    echo file_get_contents( "log.txt" );
}
?>

<!DOCTYPE html>
<html>
    <body>
        <center>
            <h1 style="align: center;">Hello World</h1>
            <form method="post">
                <input type="text" name="chat" placeholder="Chat..."><input type="submit" valie="Send">
            </form>
        </center>
    </body>
</html>