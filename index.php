<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel to HTML</title>
    <style>
        body, th, td {
            text-align: center;
            border: 1px solid black;
        }

        .lightgray-bg {
            background-color: lightgray;
        }
    </style>
</head>
<body>
<?php
    ini_set('auto_detect_line_endings', true);
    $file = fopen("us-500.csv", "r");
    $data = fgetcsv($file);
    echo "<table>";
    echo "  <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>State</th>
                <th>Zip</th>
                <th>Phone1</th>
                <th>Phone2</th>
                <th>email</th>
                <th>web</th>
            </tr>";
    $row = 1;
    while (($data = fgetcsv($file)) !== FALSE ) {
        if ($row % 10 == 0) echo "<tr class='lightgray-bg'>";
        else echo "<tr>";
        echo "<td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>".$data[6]."</td><td>".$data[7]."</td><td>".$data[8]."</td><td>".$data[9]."</td><td>".$data[10]."</td><td>".$data[11];
        echo "</tr>";
        $row++;
    }
    fclose($file);
    echo "</table>";
?>
</body>
</html>