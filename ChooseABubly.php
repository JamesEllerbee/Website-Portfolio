<!DOCTYPE html>
<html>
    <head>
        <title>Choose a Bubly</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Choose a bubly</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
        </table>
        <?php

        $flavor = "raspberry";

        switch ($flavor) {
        case "apple":
            echo "You chose an apple Bubly!";
        break;
        case "peach":
            echo "You chose a peach Bubly!";
        break;
        case "raspberry":
            echo "You chose a raspberry Bubly!";
        break;
        default:
            echo "You chose neither apple, peach, nor raspberry :(";
        }
        ?>
    </body>
</html>
