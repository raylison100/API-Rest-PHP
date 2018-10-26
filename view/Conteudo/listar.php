<?php
include '../../controller/ConteudoControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){

    echo $data =  json_encode($valor);

}


?>