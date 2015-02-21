<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Diary extends Eloquent{
    public $timestamps = false;
    protected $table = 'entries';
}