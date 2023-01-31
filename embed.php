<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sayHi = array(1.2, '45', '<h1>gvft</h1>', false);
    ?>
    <h1><?php
        print_r($sayHi);
        echo $sayHi[2]; ?></h1>
    <br><br>
    <?php $sayHi1 = array("twelve" => 12); ?>
    <h1><?php print_r($sayHi1);
        echo $sayHi1["wdfdf"]; ?></h1>
    <?php
    $number = 1000;
    switch ($number) {
        case 1:
            echo "1";
        case 2:
            echo "2";
        case 10:
            echo "10";
        case 15:
            echo "15";
            break;
        case 100:
            echo "100";
        default:
            echo "gvuj";
    };

    for ($index = 0; $index < 10; $index++) {
        echo $index . "<br>";
    }
    $arr = array(12, 23, 45, 56, 78, 89, 1234567890);
    foreach ($arr as $item) {
        echo $item . "<br>";
    }
    echo "<br>";
    echo sayHi(0);
    function sayHi($bool)
    {
        return $bool;
    }
    echo "<br>";
    $data = "outside"; // global
    function scope()
    {
        global $data; // get/declare global variable inside the function
        $data = "inside"; // local
        echo $data . "<br>";
    }
    echo $data;
    echo "<br>";
    scope();
    echo $data;
    echo "<br>";
    echo "<br>";
    define("PI", 3.142); // defining a constant
    echo PI . "<br>";
    echo pow(2, 10);
    echo "<br>";
    echo rand(1, 100);
    echo "<br>";
    echo sqrt(144);
    echo "<br>";
    echo ceil(12.3);
    echo "<br>";
    echo floor(56.678);
    echo "<br>";
    echo round(45.4);
    echo "<br>";
    echo "<br>";

    // string functions : https://www.php.net/ref.strings

    $statement = "This is PHP.";
    echo strlen($statement);
    echo "<br>";
    echo strtoupper($statement);
    echo "<br>";
    echo strtolower($statement);
    echo "<br>";
    print "he";
    echo "<br>";
    echo "<br>";

    $list = [213, 63, 5435, 2542];
    echo min($list);
    echo "<br>";
    echo max($list);
    echo "<br>";
    print_r(sort($list));
    echo "<br>";
    $list2 = ["what", "is", "this", "behavior", "?"];
    print_r($list);

    // array functions : https://www.php.net/manual/en/ref.array.php


    ?>
</body>

</html>