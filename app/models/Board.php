<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Board{
    public $board = array();

    private $square_length = '3';

    private $squares = array();

    private $template = array(
        '0'=>'1',
        '1'=>'2',
        '2'=>'3',
        '3'=>'4',
        '4'=>'5',
        '5'=>'6',
        '6'=>'7',
        '7'=>'8',
        '8'=>'9'
    );
    
    private $square = array(
        '0'=>array(
            '0'=>'',
            '1'=>'',
            '2'=>''), 
        '1'=>array(
            '0'=>'',
            '1'=>'',
            '2'=>''), 
        '2'=>array(
            '0'=>'',
            '1'=>'',
            '2'=>'')
        );
    
    private $row = array();
    
    private $collapsed = array();
    
    public function __construct(){
    }
    
    public function init(array $param = array()){
        $this->board = $param;
        if(isset($param)){
            foreach($this->board as $key=>$value){
                foreach($this->board[$key] as $option_key=>$option_value){
                    if(!empty($param[$key][$option_key])){
                        $this->board[$key][$option_key] = $param[$key][$option_key];
                    }
                    else{
                        $this->board[$key][$option_key] = array(1,2,3,4,5,6,7,8,9);
                    }
                }
            }
        }
    }
    
    public function collapse_square(){
        foreach($this->square as $row){
            foreach($row as $value){
                $this->collapsed[] = $value;
            }
        }
    }

    private function combine_arrays(&$array1, $array2){
        foreach($array2 as $element){
            $array1[] = $element;
        }
    }

    private function get_column($id){
        $ret_array = array();
        foreach($this->board as $row){
            if(!is_array($row[$id])) {
                $ret_array[] = $row[$id];
            }
        }
        return $ret_array;
    }

    private function get_row($id){
        $ret_array = array();
        for($i=0;$i<$this->square_length*$this->square_length;$i++){
            if(!is_array($this->board[$id][$i])){
                $ret_array[] = $this->board[$id][$i];
            }
        }
        return $ret_array;
    }

    public function solve(){
        $is_solved = false;
        $this->square();
        foreach($this->board as $row_number => $row){
            foreach($row as $column_number=>$column){
                if(is_array($this->board[$row_number][$column_number])) {
                    $square_row = (int) ($row_number / $this->square_length);
                    $square_column = (int) ($column_number / $this->square_length);
                    $main_array = $this->get_row($row_number);
                    $column_array = $this->get_column($column_number);
                    $this->combine_arrays($main_array, $column_array);
                    $this->combine_arrays($main_array,$this->squares[$square_row][$square_column]);
                    $this->board[$row_number][$column_number] = array_diff($this->template, $main_array);
                }
            }
        }
        do{
            $solved = $this->set_elements();
        }
        while(!$solved);
    }

    private function square(){
        $count = 1;
        for($i=0; $i<$this->square_length; $i++){
            for($j=0; $j<$this->square_length;$j++){
                $test = ($j+1) * $this->square_length -1;
                for($k=$this->square_length*($i+1) - $this->square_length;$k<=($i+1) * $this->square_length -1;$k++){
                    for($l=$this->square_length*($j+1)-$this->square_length;$l<=($j+1) * $this->square_length -1;$l++){
                        if(!is_array($this->board[$k][$l])) {
                            $this->squares[$i][$j][] = $this->board[$k][$l];
                        }
                    }
                }
                if(!isset($this->squares[$i][$j])){
                    $this->squares[$i][$j] = array();
                }
                $count++;
            }
        }
    }

    private function set_elements(){
        $is_solved = true;
        foreach($this->board as $row=>$row_values){
            foreach($row_values as $column=>$column_value){
                if(is_array($this->board[$row][$column]) && count($column_value) == 1){
                    $this->board[$row][$column] = implode('',$column_value);
                    $is_solved = false;
                }
            }
        }

        return $is_solved;
    }
}
