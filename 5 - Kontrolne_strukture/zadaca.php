
<style>


    h1{
        color: rgb(6, 85, 125);
    }
    h2{
        color: rgb(98, 107, 112);
    }
    p{
        color: rgb(98, 107, 112);
    }
    body{
        background-color: black;
        color: rgb(130, 55, 63);
        font-family: sans-serif;
    }
</style>


<h1>PHP kontrolne strukture – Zadaća</h1>

<p>
1. Koristeći petlju while, ispišite prvih deset brojeva.<br>
<br>
2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.
<br>
3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.<br>
    Primjer:<br>
        1 x 1 = 1<br>
        1 x 2 = 2<br>
        ...<br>
        10 x 10 = 100<br>
        <br>

4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.<br>
    Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. <br>
    <br>
6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak<br>
    Primjer:<br>
        Harry, Ron, Hermione, Snake<br>
        <br>
7. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.<br>
    Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.<br>
    Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.<br>
    Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. <br>
    <br>
8. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.<br>
    Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.<br>

</p>

<?php

echo "Ispis prvih 10 brojeva: ";

$i = 1;
while ($i <= 10) {
    echo $i . "\n";
    $i++;
}

echo "<br>Ispis višekratnika broja 3 do 100 koristeći se petljom: ";

for ($i = 3; $i <= 100; $i += 3) {
    echo $i . "\n";
}


echo "<br>Tablica množenja: ";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n"; // Dodavanje praznog reda radi bolje čitljivosti
}

echo "<br>Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.<br>
Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. <br>
 ";

 $names = ["Ana", "Ivan", "Marko", "Lucija", "Petar"];

foreach ($names as $key => $value) {
    echo "Ključ: $key, Vrijednost: $value\n";
}
 // check this is no good

 echo "<br>Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak<br>
 Primjer:<br>
     Harry, Ron, Hermione, Snake<br>
     <br> ";
     $names = ["Ana", "Ivan", "Marko", "Lucija", "Petar"];
     echo implode(", ", $names);

     echo "<br>Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.<br>
    Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.<br>
    Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.<br>
    Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. <br>";


    echo "<br>Ispis dana u tjednu koristeći switch i funkciju date(): ";

    $dan_u_tjednu = date("N"); // "N" daje numerički prikaz dana u tjednu (1 za ponedjeljak, 7 za nedjelju)

    switch ($dan_u_tjednu) {
        case 1:
            echo "Ponedjeljak";
            break;
        case 2:
            echo "Utorak";
            break;
        case 3:
            echo "Srijeda";
            break;
        case 4:
            echo "Četvrtak";
            break;
        case 5:
            echo "Petak";
            break;
        case 6:
            echo "Subota";
            break;
        case 7:
            echo "Nedjelja";
            break;
        default:
            echo "Nepoznat dan";
            break;
    }


?>