<?php

namespace app\models;

abstract class TemplateModel {

protected function __call(string $name, array $args){

        echo "teste";   
    
}

}