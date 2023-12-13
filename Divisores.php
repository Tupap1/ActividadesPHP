<?php
    $numero=9.0;
    echo "Divisores del numero" .$Numero.": ";
    for ($i=1;$i<=$numero;$i++){
        $residuo=$numero % $i;
        if($residuo==0)
        {
            echo "[ ".$i." ] ";
        }
    }
    ?>