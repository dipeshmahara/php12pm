<?php
$username = 'ram';
$password = 'ram13';
if (($username === 'admin' && $password ==='admin002')
or($username=== 'ram' && $password=== 'ram13')){

    echo "welcome" .$username;
} else {
    echo "username & password not match";
}

$x=30;
$y=20;
$z=25;

//if($x>$y && $x>$z){
//    echo "x";
//}
//elseif ($y>$x && $y>$z){
//    echo "y";
//}else{
//    echo "z";
//}


if($x > $y){
    if ($x > $z){
        echo "x";
    }else {
        echo "z";
    }
}else{
    if($y > $z){
        echo "y";
    }else{
        echo "z";
    }
}

$language='chinese';
switch ($language) {
    case 'nepali';
    echo 'yes' . $language;
    break;
    case 'eng':
        echo 'yes' .$language;
        break;
    default:
        echo "language not found";
}