<?php 
    if(isset($_POST['submit'])){

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if(!empty($name)){
            if(!empty($email)){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if(!empty($password)){
                        if(strlen($password) >= 8){

                            $message = "Votre nom est $name, votre email est $email et le mot de passe est $password.";
                        }else{

                            $message = "Le password doit etre superieur à 8 caracteres";
                        }
                    }else{
                        $message = "Veuillez saisir le mot de passe ";
                    }
                }else{
                    $message = "Veuillez entrer un E-mail valide ";
                }
            }else{
                $message = "Veuillez saisir votre E-mail ";
            }
        }else{
            $message = "Veuillez saisir votre nom ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD | W7_D2</title>
</head>
<body>
    <center>
        <h1>Exercise 1 : Validate User Input.</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <table>
                <tr>
                    <td> <label for="name">Name: </label></td>
                    <td><input type="text" id="name" name="name" placeholder="Your Name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" id="email" name="email" placeholder="Your E-mail"></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" id="password" name="password" placeholder="Your Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="color:red;"><?php if(isset($message)){ echo $message;} ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Soumettre</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>