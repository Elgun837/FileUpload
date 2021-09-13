<?php

//  1 setrlik
/*
    chox setirli
*/



/*
    $ isharesile bashlayir
    yalniz herflerden ibaret olmadir
    daxili _ ola bler ve bashlangicinda
    reqem ola bilez
    boyuk ve kichik herfler olar - case

    Case-in novleri
    1.Camel case - productList;
    2. Pascal case - ProductList
    3. Snake case - product_list
    4. Kebab case - product-list
*/

// $value = "test";

// $value = "test1";

// sabit deyishen
// define("value", "test3");

// echo value;


// Verilenlerin tipleri
/*
    1. string
    2. integer
    3. float ve ya double
    4. boolen
    5. array
    6. object
    7. Null 
    gettype();
*/

// $string = "Cybertech";
// $integer = 100;
// $bool = 3.5;
// $boolen = false;
// $array = array();
// $object = new stdClass;
// $null = null;
// echo gettype($null);

// Operatorlar

// riyazi - arithmetic operations
/*
    + toplama
    - chixma
    * vurma
    / bolme
    % qaliq
*/

// $a = 5;
// $b = 2;
// $c = 5;
// $d = 2;
// $e = 5;

// echo ($a + ($b * $c)) *( $d / $e);

// Menimsetme operatorlar - Assignment operations
/*
    = menimsetme
    += toplayib menimsetme
    -= chixib menimsetme
    *= vurub menimsetme
    /= bolub menimsetme
*/
// $a = 5;
// $b = 2;

// $a = $a * 2;
// $a *= 2;
// $a += 2;
// $a -= 2;
// $a /= 2;

// echo $a;

// $a = -2;

// if($a > 0){
//     echo "sifirdan boyukdur";
// }else{
//     echo "sifirdan kichikdir";
// }


// if($a > 0){
//     echo "sifirdan boyukdur";
// }elseif($a < 5 && $a < 3){
//     echo "5 ve 3den kichikdir";
// }


// qarshilashdirma operatorlar

/*
    == beraberdirse
    === eynidirse
    != eyni deyilse
    <= kichik beraberdirse
    >= boyuk beraberdise
*/
// $a = 5;
// $b = 5;
// echo $a === $b && AND $a > $b;
// echo $a === $b || $a > $b;

// $array = ['Elgun', 'Xelilov'];
// for ($i=0; $i < count($array); $i++) { 
//     echo $array[$i] . "<br>";
// }
// print_r($array);
// foreach($array as $arr){
//     echo $arr;
// }
// $i = 0;
// while(count($array) > $i){
//     echo $array[$i];
//     $i++;
// }