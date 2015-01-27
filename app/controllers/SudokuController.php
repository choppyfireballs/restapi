<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SudokuController extends BaseController{
    
    public function solve(){
        require_once('/var/www/html/sudoku/app/models/Board.php');
        $input_array = Input::get('sudoku_array');
        $board = new Board();
        $board->init($input_array);
        $board->solve();
        $board->set_full_squares();
        return View::make('sudoku',get_object_vars($board));
    }
}