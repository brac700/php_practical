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

echo "<html>
<head>
    <title>Marks Table</title>
    <style>
        table { 
            width: 50%; 
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>";

echo "<h2>Marks for each subject:</h2>";
echo "<table>
        <tr>
            <th>Serial No.</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>";

$serialNo = 1; // Initialize serial number
foreach ($subjects as $subject => $marks) {
    echo "<tr>
            <td>$serialNo</td>
            <td>$subject</td>
            <td>$marks</td>
          </tr>";
    $serialNo++; // Increment serial number after each iteration
}

echo "<tr>
        <td colspan='2'><b>Total Marks:</b></td>
        <td><b>$totalMarks / " . ($totalSubjects * 100) . "</b></td>
      </tr>";

echo "<tr>
        <td colspan='2'><b>Percentage:</b></td>
        <td><b>" . number_format($percentage, 2) . "%</b></td>
      </tr>";

echo "</table>";

echo "<br><b>This program is written and executed by Harshit Sidher (2220100250)</b>";

echo "</body>
</html>";
?>
