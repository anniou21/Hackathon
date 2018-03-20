<?php
    require_once 'levels.php';

    class Questions {

        public function getQuestions() {
            $CurrentLevel = null;
            if(CurrentLevel == $level1) {
                echo 'Question with easy difficulty.';
            }
            else if(CurrentLevel == $level2) {
                echo 'Question with medium difficulty.';
            }
            else if(CurrentLevel == $level3) {
                echo 'Question with hard difficulty.';
            }
        }
        
    }
