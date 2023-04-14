<?php
// retrieve the data from the form
$serial_number = $_POST['serial_number'];
$name = $_POST['name'];
$english = $_POST['english'];
$biology = $_POST['biology'];
$mathematics = $_POST['mathematics'];

// loop through the data and create a multidimensional array of students
for ($i = 0; $i < count($name); $i++) {
    $students[$i] = array(
        'serial_number' => $serial_number[$i],
        'name' => $name[$i],
        'english' => $english[$i],
        'biology' => $biology[$i],
        'mathematics' => $mathematics[$i]
    );
}

// loop through the students and calculate their grades and averages
foreach ($students as $student) {
    $total_marks = $student['english'] + $student['biology'] + $student['mathematics'];
    $average_marks = $total_marks / 3;

    if ($average_marks >= 70) {
        $grade = 'A';
    } elseif ($average_marks >= 60) {
        $grade = 'B';
    } elseif ($average_marks >= 50) {
        $grade = 'C';
    } elseif ($average_marks >= 40) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    $student['total_marks'] = $total_marks;
    $student['average_marks'] = $average_marks;
    $student['grade'] = $grade;

    $graded_students[] = $student;
}

// sort the graded students by name
usort($graded_students, function($a, $b) {
    return strcasecmp($a['name'], $b['name']);
});

// display the results in an HTML table
echo '<table style="border-collapse: collapse; border: 1px solid black;">';
echo '<tr><th style="border: 1px solid black;">Serial Number</th><th style="border: 1px solid black;">Name</th><th style="border: 1px solid black;">English</th><th style="border: 1px solid black;">Biology</th><th style="border: 1px solid black;">Mathematics</th><th style="border: 1px solid black;">Total Marks</th><th style="border: 1px solid black;">Average Marks</th><th style="border: 1px solid black;">Grade</th></tr>';

foreach ($graded_students as $student) {
    echo '<tr>';
    echo '<td style="border: 1px solid black;">' . $student['serial_number'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['name'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['english'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['biology'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['mathematics'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['total_marks'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['average_marks'] . '</td>';
    echo '<td style="border: 1px solid black;">' . $student['grade'] . '</td>';}