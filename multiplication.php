<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

    <h2>Multiplication Table of 5</h2>

    <?php
        $num = 5;

        for ($i = 1; $i <= 10; $i++) {
            echo $num . " x " . $i . " = " . ($num * $i);
            echo "<br>";
        }
    ?>

</body>
</html>