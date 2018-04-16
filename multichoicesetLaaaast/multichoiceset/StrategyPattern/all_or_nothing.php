<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of all_or_nothing
 *
 * @author Ibrahim
 */
require_once('question_strategy.php');

class all_or_nothing implements question_strategy{
    public function grade_response($numwrong, $correct, $minus_marks, $defaultmark) {
        $fraction = 0;
        if ($numwrong == 0 && $correct) {
            $fraction = 1;
        }
        return $fraction;
    }
}
