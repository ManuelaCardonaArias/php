<?php
function verificarLogin(string $usr, string $pwr){
    return $usr."".$pwr;
}
echo verificarLogin(0,0);