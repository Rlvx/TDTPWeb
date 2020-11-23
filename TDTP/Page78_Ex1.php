<?php
$arr_test = array(5,8,14,2,24);
function absolue($number){
    return abs($number);
}
function racine($number){
    return sqrt($number);
}
function puissance($number,$power=2){
    return pow($number,$power);
}
function mini($number1,$number2){
    if($number1>$number2){
        return $number2;
    }else{
        return $number1;
    }
}
function maxi($number1,$number2){
    if($number1>$number2){
        return $number1;
    }else{
        return $number2;
    }
}
function max_array($arr){
    $buffer_max = $arr[0];
    foreach ($arr as $value){
        if($buffer_max<$value){
            $buffer_max = $value;
        }
    }
    return $buffer_max;
}
function min_array($arr){
    $buffer_min = $arr[0];
    foreach ($arr as $value){
        if($buffer_min>$value){
            $buffer_min = $value;
        }
    }
    return $buffer_min;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExosPHP</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<div class="card border-secondary my-3 mx-auto" style="max-width: 40rem;">
    <p class="mx-2 my-2"><?php echo "La valeur absolue de -5 est : ".absolue(-5)?></p>
    <p class="mx-2 my-2"><?php echo "La racine carré de 25 est : ".racine(25) ?></p>
    <p class="mx-2 my-2"><?php echo "2 a la puissance 3 vaut : ".puissance(2,3) ?></p>
    <p class="mx-2 my-2"><?php echo "4 a la puissance 2 vaut : ".puissance(4) ?></p>
    <p class="mx-2 my-2"><?php echo "La valeur min entre 50 et 25 est : ".mini(50,25) ?></p>
    <p class="mx-2 my-2"><?php echo "La valeur max entre 50 et 25 est : ".maxi(50,25) ?></p>
    <p class="mx-2 my-2"><?php echo "La valeur max du tableau [5,8,14,2,24] est : ".max_array($arr_test) ?></p>
    <p class="mx-2 my-2"><?php echo "La valeur min du tableau [5,8,14,2,24] est : ".min_array($arr_test) ?></p>

</div>
</body>
</html>
