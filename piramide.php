# Piramide--0a7d1140 #

<?php
$number = readline("hoeveel wil je ");

for ($i = 1; $i < $number ; $i++) {
    echo str_repeat("*" , $i);
    echo PHP_EOL;
}
?>