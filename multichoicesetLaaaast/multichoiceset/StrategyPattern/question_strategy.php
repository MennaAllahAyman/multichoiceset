<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Ibrahim
 */
interface question_strategy {
    public function grade_response($numwrong, $correct, $minus_marks, $defaultmark);
}
