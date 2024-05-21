<?php

$a = 0;
$a = $a + 1;
$a++; // increment operator - povećaj vrijednost za jedan

echo $a.'<br>';

$a--; // decrement operator - smanji vrijednost za jedan
// --$a;

$b = $a++;

echo $b; // -> b = 1 -> prvo se pridružuje vrijednost pa se onda $a povećava za 1