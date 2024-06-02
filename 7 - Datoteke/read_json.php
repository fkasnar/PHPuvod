<?php

$books = file_get_contents('knjige.json');

// echo $books;

$books = json_decode($books, true);

var_dump($books);