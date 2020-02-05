<?php
//pirma uzduotis, sujungti kad printintu mano batai buvo du
// $a = 'du';
// $b = 'mano';
// $c = 'batai buvo';

// print $b.' '.$c.' '.$a;
//antra uzduotis

// $a ='45';
// $b ='12';

// if ($a>$b) {
//     print 'a daugiau uz b';
// }else {
//     print 'b daugiau uz a';
// }

//trecia uzduotis istaisyti klaidas, kad ekrane spausdintu zodi Vokietija:
// $salis= "de";
// switch($salis) {

//     case "ca";

//     echo ("Kanada");

// break;

// case "cr";

// echo("Kosta Rika");

// break;

// case "de";

// echo("Vokietija");

// break;

// case"uk";

// echo ("Didzioji britanija");

// break;
// };


//Ketvirta uzduotis
//Kokias operacijas atlikti su $a kintamuoju ir $b, kad atspausdintu skaiciu 11:

// $a = "10 maisu";
// $b = "1 maisu";

// $aex = explode(" ",$a);
// $bex = explode(" ",$b);

// print $c=$aex[0] + $bex[0];

//8 uzduotis:

// $vardas = 'Jonas';
// $pavarde = 'Jonaitis';
// $atlyginimas = 5000;

// if (isset($vardas) &&
//     isset($pavarde) && $atlyginimas>=5000) {
//     print 'visi duomenys yra';

// }else{
//     print $vardas .' '.
//             $pavarde .' '.
//             $atlyginimas;

// }

//10. padidinkite masyvo elementu reiksmes 10 kartu ir atspausdinkite foreach pagalba. tekstines lieka nepakeistos:

// $a=array(10,20,30,1,1,50,0,0,"jonas","petras");

// foreach ($a as $value) {
//     if (is_integer($value)){
//         print $value * 10 . '<br>';
//     }
// }

//11 uzduotis. sukurkite seno masyvo pagrindu nauja masyva. sumazinkite jo elemtu kieki 2 kartus, t.y. paikite kas antra elementa ir atspausdinkite:
//tarp [] skliaustu rasomas indexas visada
$a=array(10,20,30,50,60,70,80);

for ($x=0; $x<=count($a); $x+=2){
    $b[] = $a[$x];
   
}
var_dump($b);
?>