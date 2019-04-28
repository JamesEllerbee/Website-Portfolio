<!DOCTYPE html>
<html>
    <head>
        <title>Bubly survey</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Bubly survey Demonstration</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
        </table>
        <?php
        $nameErr = $emailErr = $flavorErr = "";
        //$name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          }
          if (empty($_POST["flavor"])) {
            $flavorErr = "Favorite flavor is required.";
          }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail:
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Favorite Bubly Flavor:
        <select name="flavor">
            <option value = "">Please choose one.</option>
            <option value = "apple">Apple</option>
            <option value = "peach">Peach</option>
            <option value = "raspberry">Rasberry</option>
            <option value = "other">Other</option>
        </select>
        <span class="error">* <?php echo $flavorErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
