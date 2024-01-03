<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<?php
    // Part 2: Handle Form Submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputName = trim($_POST['imie']);

        // Part 3: Read 'zamowienia.txt'
        $fileContent = file_get_contents('zamowienia.txt');
        $lines = explode("\n", $fileContent);
        $found = false;

        // Part 4: Filter Orders Based on Name
        echo '<table border="1">';
        echo '<tr><th>imie</th><th>olej</th><th>klocki</th><th>żarówki</th><th>opony</th></tr>';
        foreach ($lines as $line) {
            $orderDetails = explode(';', $line);
            if (count($orderDetails) >= 5 && $orderDetails[0] == $inputName) {
                $found = true;
                echo '<tr>';
                foreach ($orderDetails as $detail) {
                    echo '<td>' . htmlspecialchars($detail) . '</td>';
                }
                echo '</tr>';
            }
        }
        echo '</table>';

        // If no orders found for the name
        if (!$found) {
            echo 'No orders found for ' . htmlspecialchars($inputName);
        }
    }
    echo 'Zapomniałeś czegoś? <a href="skladanie.html" >Złóż kolejne zamówienie!</a>';

    ?>
</body>
</html>