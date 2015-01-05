<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<form action='http://localhost/sudoku/public/solve' method='POST'>";
for($i=0; $i<9; $i++){
    for($j=0; $j<9; $j++){
        echo "<input type='text' name='sudoku_array[$i][$j]' style='width:50px;height:50px;'>";
    }
    echo "<br />";
}

echo "<button type='submit' value='submit'>submit</button>";
echo "</form>";