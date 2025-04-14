<?php
$subjects = array(
    "Math" => 85,
    "English" => 75,
    "Science" => 90,
    "History" => 80,
    "Computer" => 88
);

$totalMarks = array_sum($subjects);

$totalSubjects = count($subjects);
$percentage = ($totalMarks / ($totalSubjects * 100)) * 100;

echo "Marks for each subject:<br>";
foreach ($subjects as $subject => $marks) {
    echo "$subject: $marks\n". "<br>";
}

echo "<br> Total Marks: $totalMarks / " . ($totalSubjects * 100);
echo "<br> Percentage: " . number_format($percentage, 2) . "%";
echo "<br> This program is written and executed by Harshit Sidher (2220100250)"
?>