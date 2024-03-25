<?php
// php code
if (isset($_POST['sign'])) {

    // get the numbers and operator from the form
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $opernd = $_POST['sign'];

    if ($opernd == '+') {
        $answer = $num1 + $num2;
    }
    elseif ($opernd == '-') {
        $answer = $num1 - $num2;
    }
    elseif ($opernd == 'x') {
        $answer = $num1 * $num2;
    }
    elseif ($opernd == '/'){
        $answer = $num1 / $num2;
    }
}

?>
<html>
    <head>

    </head>
    <body>
        <h1>Simple Calculator</h1>

        <form method="post" action="">
            First Number: <input name="n1" value=""> <br>
            <br>
            Second Number: <input name="n2" value=""> <br>
            <input type="submit" name="sign" value="+">
            <input type="submit" name="sign" value="-">
            <input type="submit" name="sign" value="x">
            <input type="submit" name="sign" value="/"> <br> <br>
            Result: <input type="text" value="<?php echo $answer; ?>">
        </form>
    </body>
</html>