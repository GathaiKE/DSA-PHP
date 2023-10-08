<?php

function gradingStudents($grade){

    $comment;
    $provisional_grade = $grade;
    if($grade >= 38){

        while($grade % 5 != 0){
            $grade++;
        }
        if($grade % 5 == 0){
            if(($grade - $provisional_grade) < 3){
                $provisional_grade = $grade;
            }
        }
    }

    switch ($provisional_grade) {
        case $provisional_grade >100 || $provisional_grade < 0:
            $comment = "Invalid grade.\n";
            break;
        
        case $provisional_grade >69:
            $comment = "Distinction\n";
            break;

        case $provisional_grade > 59:
            $comment = "Credit\n";
            break;

        case $provisional_grade > 39:
            $comment = "Pass\n";
            break;

        case $provisional_grade < 40 || $provisional_grade === 0:
            $comment = "Fail";
            break;

        default:
            $comment = "Unknown error.\n";
            break;
    }
    return $provisional_grade;
}


echo gradingStudents(0);
?>
