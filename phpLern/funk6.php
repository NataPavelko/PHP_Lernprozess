<?php
$satz="Tajeb dfhjdij, hjgf i rdfgfg! hdhtsrst";
echo WorteZaehlen($satz);


function WorteZaehlen($satz){
$arr=explode(" ",$satz);
$w=count($arr);
return $w;
}