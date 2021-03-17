<?php


/**
 * @param array $colecVinosCant
 * @param array $colecVinosPrecios
 * @return array
 */
function promedioVino($colecVinosCant, $colecVinosPrecios){
    $sumaCantTotal = 0;
    $sumaPrecios = 0;
    for($i=0; $i<count($colecVinosCant); $i++){
        $sumaCantTotal = $sumaCantTotal + $colecVinosCant[$i];
        $sumaPrecios = $sumaPrecios + $colecVinosPrecios[$i];
    }
    $promedioPrecios = $sumaPrecios / count($colecVinosPrecios);
    $infoTotalVinos = array();
    $infoTotalVinos = ["sumaCant" => $sumaCantTotal, "promedioPrecios" => $promedioPrecios];
    return $infoTotalVinos;
}



function main(){
    /** Coleccion de vinos */
    $coleccionVinos = array();
    $coleccionVinos['Malbec'] = array(
        "variedad" => ["Semidulce", "Dulce", "Semiamargo"],
        "cantidadBotellas" => [30, 16, 42], 
        "anioElaboracion" => [1980, 1969, 1995], 
        "precioUnidad" => [1230, 2032, 1470]
    );
    $coleccionVinos['Cabernet Suavignon'] = array(
        "variedad" => ["Amargo", "Semidulce", "Dulce"],
        "cantidadBotellas" => [45, 20, 32], 
        "anioElaboracion" => [1980, 1977, 1989], 
        "precioUnidad" => [1560, 1690, 1320]
    );
    $coleccionVinos['Merlot'] = array(
        "variedad" => ["Semiamargo", "Semidulce", "Dulce"],
        "cantidadBotellas" => [33, 67, 49], 
        "anioElaboracion" => [1999, 1987, 1979], 
        "precioUnidad" => [2045, 2654, 2979]
    );

    /** Empiezo a comunicarme con el usuario para que vea la informacion de los vinos */
    // echo "Desea ver la informacion de nuestros vinos? si/no" . "\n";
    // $respuesta = trim(fgets(STDIN));
    do{
        echo "Elija una opcion para ver la informacion de los vinos disponibles: 1-Malbec, 2-Cabernet Suavignon, 3-Merlot \n";
        $opcionVino = trim(fgets(STDIN));
        
        if($opcionVino==1){
            for($i=0; $i<3; $i++){
                echo "--------------Informacion individual---------------" . "\n";
                echo "La variedad de vino es: " . $coleccionVinos['Malbec']['variedad'][$i] . "\n";
                echo "Cantidad de botellas disponibles: " . $coleccionVinos['Malbec']['cantidadBotellas'][$i] . "\n";
                echo "Anio de elaboracion: " . $coleccionVinos['Malbec']['anioElaboracion'][$i] . "\n";
                echo "Precio por unidad: $" . $coleccionVinos['Malbec']['precioUnidad'][$i] . "\n\n";
            }

            $infoFinalVino = promedioVino($coleccionVinos['Malbec']['cantidadBotellas'], $coleccionVinos['Malbec']['precioUnidad']);
            echo "--------------Informacion general---------------" . "\n";
            echo "En total hay " . $infoFinalVino['sumaCant'] . " vinos Malbec" . "\n";
            echo "El precio promedio es: $" . round($infoFinalVino['promedioPrecios']) . "\n\n";
            
        }elseif($opcionVino==2){
            for($i=0; $i<3; $i++){
                echo "--------------Informacion individual---------------" . "\n";
                echo "La variedad de vino es: " . $coleccionVinos['Cabernet Suavignon']['variedad'][$i] . "\n";
                echo "Cantidad de botellas disponibles: " . $coleccionVinos['Cabernet Suavignon']['cantidadBotellas'][$i] . "\n";
                echo "Anio de elaboracion: " . $coleccionVinos['Cabernet Suavignon']['anioElaboracion'][$i] . "\n";
                echo "Precio por unidad: $" . $coleccionVinos['Cabernet Suavignon']['precioUnidad'][$i] . "\n\n";
            }

            $infoFinalVino = promedioVino($coleccionVinos['Cabernet Suavignon']['cantidadBotellas'], $coleccionVinos['Cabernet Suavignon']['precioUnidad']);
            echo "--------------Informacion general---------------" . "\n";
            echo "En total hay " . $infoFinalVino['sumaCant'] . " vinos Cabernet Suavignon" . "\n";
            echo "El precio promedio es: $" . round($infoFinalVino['promedioPrecios']) . "\n\n";

        }elseif($opcionVino==3){
            for($i=0; $i<3; $i++){
                echo "--------------Informacion individual---------------" . "\n";
                echo "La variedad de vino es: " . $coleccionVinos['Merlot']['variedad'][$i] . "\n";
                echo "Cantidad de botellas disponibles: " . $coleccionVinos['Merlot']['cantidadBotellas'][$i] . "\n";
                echo "Anio de elaboracion: " . $coleccionVinos['Merlot']['anioElaboracion'][$i] . "\n";
                echo "Precio por unidad: $" . $coleccionVinos['Merlot']['precioUnidad'][$i] . "\n\n";
            }

            $infoFinalVino = promedioVino($coleccionVinos['Merlot']['cantidadBotellas'], $coleccionVinos['Merlot']['precioUnidad']);
            echo "--------------Informacion general---------------" . "\n";
            echo "En total hay " . $infoFinalVino['sumaCant'] . " vinos Merlot" . "\n";
            echo "El precio promedio es: $" . round($infoFinalVino['promedioPrecios']) . "\n\n";

        }else{
            echo "Opcion incorrecta, vuelva a intentar" . "\n";
        }
        echo "Desea ver otra opcion? si/no" . "\n";
        $respuesta = trim(fgets(STDIN));
    }while($respuesta<>"no");
}

/**
 * Programa principal
 */

main();