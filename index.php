<?php

// Traccia 2:

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $arr=[1,2,3,4,5,6,7,8,9,10];
// $somma=0;
// $contatore=0;

// foreach ($arr as $numero) {
//     if($numero % 2 == 0){
//     $somma+=$numero;
//     $contatore++;

//   }
// }
//     $media=$somma/$contatore;
//     echo "La media dei numeri pari è $media";

// Traccia 3:

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere.

// Es. $users = [

//  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],

// ];

// output= Buongiorno sig. Davide Cariola

// $students = [
//     [ "Nome" => "Maria", "Cognome"=> "Pippo", "Genere"=> "F"],
//     [ "Nome" => "Pinko", "Cognome" => "Pallino", "Genere"=> "M"],
//     ["Nome" => "Mauri", "Cognome" => "Pappino", "Genere"=> "F"],

// ];

// foreach($students as$student){
//     switch($student["Genere"]){
//         case "M":
//         echo "Buongiorno Sig." .$student["Nome"]." ".$student["Cognome"]. "\n";
//         break;
//         case "F":
//         echo "Buongiorno Sig." .$student["Nome"]." ".$student["Cognome"]. "\n";
//         default;
//     }
// }

// Traccia 4:



// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY180".

// for ($i=1; $i <= 100; $i++) { 
//     if($i %15==0){
//         echo "HACKADEMY180"."\n";
//     }
//     else if($i% 5 == 0){
//         echo "JAVASCRIPT"."\n";
//     }
//     else if ($i % 3 == 0){
//         echo "PHP"."\n";
//     }else{
//         echo $i."\n";
//     }
// }