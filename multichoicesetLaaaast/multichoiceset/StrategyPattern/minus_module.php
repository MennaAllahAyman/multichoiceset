<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of minus_module
 *
 * @author Ibrahim
 */

require_once('question_strategy.php');

class minus_module implements question_strategy {
    public function grade_response($numwrong, $correct, $minus_marks, $defaultmark) {
        $fraction = ($minus_marks/$defaultmark)* -1;
        return $fraction;
    }
    
}
