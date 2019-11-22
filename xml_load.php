<?php
$student = simplexml_load_file('student.xml');
echo "<table border='2'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Roll no</th>";
echo "<th>Reg no</th>";
echo "<th>Phone no</th>";
echo "</tr>";
foreach ($student->studentinfo as $st)
{
echo "<tr>";
echo "<tr>$st->name</td>";
echo "<td>$st->roll_no</td>";
echo "<td>$st->regd_no</td>";
echo "<td>$st->phone</td>";
echo "</tr>";
}
echo "</table>";
?>