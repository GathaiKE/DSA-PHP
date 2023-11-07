<?php

function gradingStudents($grades){
    $n = $grades[0];
    $grade_array= $grades;
    array_shift($grade_array);
    $rounded_grades = array();
    if($n > 0 && $n <= 60){
        foreach($grade_array as $grade){
            if($grade <0 || $grade >100){
                echo "Invalid grade!";
                exit;
            }

            if($grade <=37){
                $rounded_grades[]= $grade;
            }
            if($grade >37){
                $prov_grade = $grade;
            while($prov_grade % 5 !== 0){
                $prov_grade++;
            }
            if($prov_grade - $grade < 3){
                $grade = $prov_grade;
            }
            $rounded_grades[]=$grade;
            }
        }
    }

    return $rounded_grades;
}

$grades = [5,73,67,38,33];
$result = gradingStudents($grades);
print_r($result);
?>
