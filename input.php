<html>
    <head>
        <meta charset="utf-8">
        <title>Input demonstration</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Input Demonstration</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
        </table>
    </body>
</html>
<?php
    if($_POST != null)
    {
        echo 'Hello, ';
    }

    echo $_POST['value']?? 'Enter your name:';
    if($_POST != null)
    {
        echo '!';
    }
?>
<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>
<a href="./input.php">Reset</a>
