<?php

function gradingStudents($grade){

    $comment;
    if($grade >= 38){
        $provisional_grade;

        if($grade % 5 != 0){
            $provisional_grade = $grade;
        } else{
            $grade++;
            
            if(($provisional_grade - $grade) < 3){
                $grade = $provisional_grade;
            }
        }
    }

    if($grade >= 40 && $grade < 60){
        $comment = "Pass\n";
    } elseif($grade >=60 && $grade < 70){
        $comment = "Credit\n";
    } elseif($grade >= 70 && $grade <= 100){
        $comment = "Distinction\n";
    }elseif($grade >= 0 && $grade < 40){
        $comment = "Fail";
    } else{
        $comment = "Invalid grade";
    }

    return $grade . " is a " . $comment ;
}

// $grade = 38;

echo gradingStudents(38);
?>
