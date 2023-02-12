<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        $resultat = $number1 + $number2;
        $message = 'La somme de '.$number1 .'+'. $number2.' = <strong>'. $resultat .'</strong>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD | Exo2_W7_D2</title>
</head>
<body>
    <center>
        <h1>Exercise 2 : Sum Of Numbers</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <table>
                <tr>
                    <td><input type="text" name="number1"></td>
                    <td><input type="text" name="number2"></td>
                </tr>
            </table>
            <br>
            <button type="submit" name="submit">Addition</button>
        </form>
        <div><?php if(isset($message)){ echo $message;}?></div>
    </center>
</body>
</html>