<?php

// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
// 2. Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite.


// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.

//Čitanje filea:
$polazniciJson = file_get_contents(__DIR__ . '/podaci/polaznici.json');

var_dump($polazniciJson);

$polazniciJson = json_decode($polazniciJson, true);

var_dump($polazniciJson);

