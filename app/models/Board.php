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
                    print_r('row:'.$key.': option_key :'.$option_key); echo"<br />";
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
        for($i=0;$i<9;$i++){
            if(!is_array($this->board[$id][$i])){
                $ret_array[] = $this->board[$id][$i][0];
            }
        }
        return $ret_array;
    }

    public function solve(){
        foreach($this->board as $row_number => $row){
            foreach($row as $column_number=>$column){
                if(!is_array($this->board[$row_number][$column_number])) {
                    $test_row = $this->get_row($row_number);
                    $test_column = $this->get_column($column_number);
                    $test_array = array_intersect($test_row, $test_column);
                    $this->board[$row_number][$column_number] = array_diff($this->template, $test_array);
                }
            }
        }
        $this->square();
    }

    public function square(){
        $count = 1;
        for($i=0; $i<$this->square_length; $i++){
            for($j=0; $j<$this->square_length;$i++){
                for($k=0;$k<$this->square_length;$k++){
                    for($l=0;$l<$this->square_length;$l++){
                        $this->squares[$count][] = $this->board[$k][$l];
                    }
                }
                $count++;
            }
        }
        $break = '';
    }
}
