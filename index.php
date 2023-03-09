<?php 
    require_once 'control.php';
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>URL Check</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post">
            <label for="urlCheck">Please provide the URLs, separated by comma.</label><br>
            <textarea id="urlCheck" name="url"></textarea>
            <input type="hidden" name="event" value="send">
            <button>Send</button>
        </form>
    </body>
</html>