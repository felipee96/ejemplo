<?php


use App\Model\registro;

function verRegistro (){
    $users = registro::all();
    return $users;
}

?>