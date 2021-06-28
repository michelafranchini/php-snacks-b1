<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $randomArray = []; 

    // for ($i = 0; $i < 15; $i++) {
    //     $number = rand(1, 100); 

    //         if (!in_array($number, $randomArray)) {

    //             $randomArray[] = $number; 
    //         }
    //         echo $randomArray[$i] . " " ;
    // }

    while (count($randomArray) < 15) {

        $number = rand(1, 100); 

        if (!in_array($number, $randomArray)) {

            $randomArray[] = $number; 
        }
 
        //echo $randomArray[$i] . " " ;
    }

    var_dump($randomArray) ; 
    

?>


