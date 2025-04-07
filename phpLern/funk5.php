<?php
$zahl=125;
echo umrechnen($zahl);


function umrechnen($zahl){
    $b=decbin($zahl);
    $h=dechex($zahl);
    $o=decoct($zahl);
    return "$zahl ist binär $b, oktal $o und hexadezimal $h";
}