<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    
    $students = [
        [
            'name' => 'Alice ',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bobo ',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju ',
            'program' => 'BIT',
            'age' => 22
         ],
        ];
    ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Age</th>
          
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>
