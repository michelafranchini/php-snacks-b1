<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $campionato = [
        [
            squadraCasa => "Milano", 
            squadraOspite => "Cantù", 
            puntiCasa => 50, 
            puntiOspite => 32
        ], 
        [
            squadraCasa => "Sassari", 
            squadraOspite => "Pesaro", 
            puntiCasa => 60, 
            puntiOspite => 15
        ],
        [
            squadraCasa => "Treviso", 
            squadraOspite => "Varese", 
            puntiCasa => 32, 
            puntiOspite => 51
        ],
        [
            squadraCasa => "Brindisi", 
            squadraOspite => "Brescia", 
            puntiCasa => 36, 
            puntiOspite => 38
        ],
        [
            squadraCasa => "Bologna", 
            squadraOspite => "Cremona", 
            puntiCasa => 27, 
            puntiOspite => 12
        ],
    ]; 

    for ($i = 0; $i < count($campionato); $i++) {

        echo $campionato[$i][squadraCasa]. " - " . $campionato[$i][squadraOspite] . " | " . $campionato[$i][puntiCasa] . " - " . $campionato[$i][puntiOspite] ."<br>"; 
    }

         
?>
