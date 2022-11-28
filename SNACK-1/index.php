<?php
  $partite =[
       [
        'Olimpia Milano -',
        'Cantù |',
         '55 -', 
         '60'
       ],
        [
        'Napoli Basket -',
        'EA7 MILANO |',
         '69 -', 
         '72'
       ],
        [
        'Brescia -',
        'Trieste |',
         '48 -', 
         '55'
       ],
        [
        'Foggia -',
        'Cerignola |',
         '74 -', 
         '53'
       ],
        
    ];

    foreach ($partite as $partita){
        echo '<br>';
        foreach ($partita as $kay => $value){
            echo $value .' ';

        }
    }

?>