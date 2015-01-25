<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Constraint{
    public function set_possibilities($array1, $array2){
        return array_intersect($array1, $array2);
    }
}
