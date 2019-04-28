<!DOCTYPE html>
<html>
    <head>
        <title>Random Flavor</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Random Flavor Demonstration</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
        </table>
    <?php
    echo "<h2>Can't choose? </h2>";
    echo "Try...<br>";
    $input = array("Lime", "Grapefruit", "Mango", "Cherry", "Strawberry", "Apple", "Orange");
    $rand_keys = array_rand($input, 2);
    echo $input[$rand_keys[0]] . "\n";
    ?>
    </body>
</html>
