

<?php

include './partials/functions.php';

session_start();


?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>


<style>

    #password-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        padding-top: 100px;
    }

    #password{
        font-size: 2em;
        color: red;
    }

    #redirect{
        text-align: center;
        padding-top: 50px;
    }

</style>


<body>
    


    <!-- password container -->
    <div id="password-container">
        
        <h2>Password di <?php echo $_SESSION['passwordLength']?> caratteri: </h2>
        <div id="password"><?php echo createPassword($_SESSION['passwordLength']) ?></div>
        
    </div>

    <div id="redirect">
        <a href="index.php">Back to generator page</a>
    </div>

</body>
</html>