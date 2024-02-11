<!DOCTYPE html>
<html>
<head>
    <title>Calculate Potential Energy</title>
</head>
<body>
    <h2>Calculate Potential Energy</h2>
    <form method="post">
        <label for="mass">Enter the mass of the object in kg:</label><br>
        <input type="text" id="mass" name="mass"><br>
        
        <label for="height">Enter the height in meters from which the object was thrown:</label><br>
        <input type="text" id="height" name="height"><br>
        
        <label for="speed">Enter the initial speed of the object in m/s:</label><br>
        <input type="text" id="speed" name="speed"><br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $g = 9.81;

        $m = intval($_POST['mass']);
        $h_0 = floatval($_POST['height']);
        $v_0 = floatval($_POST['speed']);

        $t = $v_0 / $g;
        $h = $h_0 + $v_0 * $t - (0.5 * $g * $t * $t);
        $E = $m * $g * $h;

        echo "<br>h = $h m and Potential energy = $E J.";
    }
    ?>
</body>
</html>
