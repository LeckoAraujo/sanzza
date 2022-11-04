<?php 

$azul = 9;
$verde = 8;
$rosa = 7;
$res = $azul + $verde + $rosa;


function elogia($res, $azul, $verde, $rosa){

    if($res > 9){
        $res = (($azul + $verde * $rosa) + $res)/100;
        if($res > 9){ return $res = $res / 10;}
        elseif($res < 1){ return $res = $res * 10;}
        else {return $res;}
    }
    elseif($res <= 9){
        $res = (($azul * $verde * $rosa) + $res)/100;
        if($res < 1){return $res = $res * 10;}
        elseif($res > 9){ return $res = $res / 10;}
        else {return $res;}
    }
    else {
        return $res;
    }

}

echo $res = elogia($res, $azul, $verde, $rosa);

// switch($res){
//     case 0:
//         echo "Você errou algo";
//         break;
//     case 1:
//         echo "Você é inteligente";
//         break;
//     case 2:
//         echo "Você é engraçado";
//         break;
//     case 3:
//         echo "Você é esforçado";
//         break;
//     case 4:
//         echo "Você é bonito";
//         break;
//     case 5:
//         echo "Você é especial";
//         break;
//     case 6:
//         echo "Você é adorável";
//         break;
//     case 7:
//         echo "Você é cheiroso";
//         break;
//     case 8:
//         echo "Você é destemido";
//         break;
//     case 9:
//         echo "Você é carismático";
//         break;
// }