
<?php 


    


    // funzione che crea una password randomica
    function createPassword($length){

        // array di array di caratteri
        $charaters = [

            // array lettere minuscole
            "lowerLetters" => ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","x","y","z"],

            // array lettere maiuscole
            "upperLetters" => ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","Z"],

            // array numeri
            "numbers" => ["1","2","3","4","5","6","7","8","9","0"],

            // array caratteri speciali
            "specialCharaters" => ["@","#","*","<",">","£","$","%","&","!",",",".","-","_","/","(",")","=","?","^"],

        ];
        

        // array password inizializzato vuoto
        $password = [];
        

        // ciclo di creazione della password
        for($i = 0; $i < $length; $i++){
            
            // variabile che prende un array casuale nell'array caratteri per "$length" volte
            $randomCharaterArray = $charaters[array_rand($charaters)];

            // inserisco nell'array password un carattere casuale dell'array casuale preso sopra 
            $password[] = $randomCharaterArray[array_rand($randomCharaterArray)] ;


        }

        // ritorno l'array password convertito in stringa
        return implode($password);
    }