<?php
function palindrome($mot){

    $var = strtolower(str_replace(" ", " ", $mot));
    return $var === strrev($var);
}
$var = readline("veuillez entrer un mot : ");

if (palindrome($var)) {
    echo "le $var encodé est un palindrome";
} else {
    echo "le $var encodé n'est pas un palindrome";
}
