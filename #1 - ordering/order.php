<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Summary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
    $first_product=$_POST["first"];
    $second_product=$_POST["second"];

    echo "Ordered $first_product first products & $second_product second product <br>\n";

    $first_value=2.99;
    $second_value=7.99;

    $all=$first_value*$first_product + $second_product* $second_value;

    echo "Summary cost: $all PLN <br>\n";
echo<<<END
    <h2>Summary</h2>
    <table border="1" cellpadding="7" cellspacing="0">
    <tr>
    <td>First Product($first_value PLN)</td>
    <td>$first_product</td>
    </tr>
    <tr>
    <td>Second Product($second_value PLN)</td>
    <td>$second_product</td>
    </tr>
    <tr>
    <td>Sum</td>
    <td>$all PLN</td>
    </tr>
    </table>
END
?>

</body>
</html>