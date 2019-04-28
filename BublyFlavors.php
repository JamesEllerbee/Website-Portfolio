<!DOCTYPE html>
<html>
    <head>
        <title>Bubly flavors</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Bubly flavors demonstration</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
        </table>
        <?php
        $bubly = array("Lime", "Grapefruit", "Mango", "Cherry", "Lemon", "Strawberry", "Apple", "Orange");
        echo "There are so many tasty flavors, including " . $bubly[0] . ", " . $bubly[1] . ", " . $bubly[2] . ", " . $bubly[3] . ", " . $bubly[4] . ", " . $bubly[5] . ", " . $bubly[6] . " and " . $bubly[7] . ".";
        ?>
    </body>
</html>
