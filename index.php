
<?php


    $passwordLength = $_GET['PasswordLength'];

    
    include './partials/functions.php';



?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    
</head>


<style>

    #container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        padding-top: 100px;
    }

    #password{
        margin-top: 20px;
    }

</style>

<body>
    
    <div id="container">

        
        <!-- form -->
        <form action="index.php" method="get">
            
            <label for="length">Lunghezza Password:</label> <br>
            <input id="length" type="range" min="4" max="12" value="4" name="PasswordLength"> <br>
            
            <input type="submit">
            
        </form>
        
        
        <!-- password container -->
        <div id="password">
            
            <strong>Password:</strong>
            <span><?php echo createPassword($passwordLength) ?></span>
            
        </div>
        
    </div>

</body>
</html>