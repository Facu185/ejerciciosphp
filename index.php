<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num_1= 20;
        $num_2= 30;
        $sumatoria_1=0;
        $sumatoria_2=0;
        for($num_1=0; $num_1<=20; $num_1++){
           $sumatoria_1 += $num_1;
        }
        echo "La sumatoria es: ".$sumatoria_1."<br>";
        for ($num_2=0; $num_2<=30; $num_2++) { 
            $sumatoria_2 += $num_2;
        }
        echo "La sumatoria es: ".$sumatoria_2."<br>";
        $nums = [2,-6,8,20,-9,30,-10,5,-4,-5,11,-17,13,80,-15];
        $mayor = max($nums);
        $menor = min($nums);
        $sumatoria_nums = array_sum($nums);
        echo "El numero mayor es: ".$mayor."<br>";
        echo "El numero menor es: ".$menor."<br>";
        echo "La sumatoria del arreglo es: ".$sumatoria_nums."<br>";
        echo "Los numeros pares son: ";        
        foreach($nums as $numero){
            if($numero % 2 == 0){
                echo $numero.", ";
            }
        }
        function esPrimo($num){
            if($num < 2){
                return false;
            }
            for($i=2; $i <= sqrt($num); $i++){
                if($num % $i == 0){
                    return false;
                }
            }
            return true;
        }
        echo "<br>"."Los numeros primos son: ";
        foreach($nums as $num){
            if(esPrimo($num)){
                echo $num.", ";
            }
        }
    ?>
</body>
</html>