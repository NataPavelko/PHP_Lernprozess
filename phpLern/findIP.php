<?php
$ip_adress=$_SERVER['REMOTE_ADDR'];

if (filter_var($ip_adress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo 'ipv6 Adresse:'.$ip_adress;
} elseif (filter_var($ip_adress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    echo 'ipv4 Adresse'.$ip_adress;
} else {
    echo 'no valid ip address';
}
?>
