<?php


    $url = readline(" input  : ");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $exe = curl_exec($ch);
    curl_close($ch);
    $exp = explode('<body><a href="',$exe);
    $exo = explode('">',$exp[1]);
    $exa = $exo[0];
    echo " result [ ".$exa." ]\n";
?>
