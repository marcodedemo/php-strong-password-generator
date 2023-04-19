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

    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    label{
        font-size: 2em;
        font-weight: bold;
    }


</style>

<body>
    
    <div id="container">

        
        <!-- form -->
        <form action="redirect.php" method="get">
            
            <label for="length">Lunghezza Password:</label>
            <input id="length" type="range" min="4" max="16" value="4" name="PasswordLength">
            
            <input type="submit">
            
        </form>
        
        

        
    </div>

</body>
</html>