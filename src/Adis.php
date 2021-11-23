<?php

class Adios{
private $despedida;

function __construct($nombre)
{
    $this->despedida="Adios $nombre";
}

function despedida(){

    echo $this->despedida;
}

}