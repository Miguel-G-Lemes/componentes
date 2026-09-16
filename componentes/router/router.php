<?php 

function router(){
    echo "22. Router está analisando a URL.<br>";
    $rota = "/usuarios";
    $parametro = "id=123";
    middleware($rota);
    
}