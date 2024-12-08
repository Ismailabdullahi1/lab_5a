<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3 </title>
</head>
<body>
    <?php
   
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                "No" => $i,
                "Multiplier" => $multiplier,
                "Answer" => $i * $multiplier
            ];
        }
        return $results;
    }

    
    $multiplier = 2; 
    $multiplicationTable = multiplication($multiplier);
    ?>

    
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
       
        foreach ($multiplicationTable as $row) {
            echo "<tr>";
            echo "<td>{$row['No']}</td>";
            echo "<td>{$row['Multiplier']}</td>";
            echo "<td>{$row['Answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
