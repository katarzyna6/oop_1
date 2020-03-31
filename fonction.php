<?php

$user1 = "Alice";
$user2 = "Bob";
$user3 = "Mary";
$user4 = "Paul";

//echo "Salut $user1 <br>";

direSalut($user1);
direSalut($user2);
direSalut($user3);
direSalut($user4);

function direSalut(string $utilisateur) {
    echo "Salut $utilisateur <br>";
}