<?php

for ($i = 0; $i <100; $i++) {
    $arr[$i]=rand(10,1234);
}
asort($arr);
var_dump($arr);