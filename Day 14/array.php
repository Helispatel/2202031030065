<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>indexed array example</p>
    <?php
    $num = array(12,13,15,14,16,17,18);
    print_r ($num);
    echo "<br>num [2] = $num[2]";
    ?>
    <p>Associative array example</p>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.<br>";
    print_r($age);
    ?>

</body>
</html>