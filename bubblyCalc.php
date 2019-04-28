<html>
    <head>
        <meta charset="utf-8">
        <title>Bubbly calculator</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <table>
            <caption>Bubbly Calculator</caption>
            <tr>
                <td>
                    <a href="./index.html">Home</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="bubblyCollage.jpg" alt = "bubbly collage" ></img>
                </td>
            </tr>
        </table>
    </body>
    <br>
</html>
<?php
function print_prompt()
{
    $prompt = "Enter a amount numeric amount (in USD) to see how many bubbly cans you can buy: \n";
    echo nl2br($prompt);
}
function print_error()
{
    $output = "Value Error!\n You've entered a negative number!\nPlease enter another value...\n\n";
    echo nl2br($output);
}
function calc_num_bubbly($num_money)
{
    $singular_can = 0.61;
    $num_cans = (int)($num_money / $singular_can);
    $num_money_as_str = number_format($num_money, 2);
    $output  = "Total number of cans you can buy with $" . $num_money_as_str . " is " . $num_cans . " cans\n";

    echo nl2br($output);
}
if($_POST != null)
{
    $input_int = (int)($_POST['value']);
    if($input_int > 0)
    {
        calc_num_bubbly($input_int);
    }
    else
    {
        print_error();
    }
}
else
{
    print_prompt(); //call to print prompt function
}
 ?>
 <html>
    <br>
    <form method="post" action="">
    <input type="number" name="value">
    <input type="submit">
    </form>
    <a href="./bubblyCalc.php">Reset</a>
 </html>
