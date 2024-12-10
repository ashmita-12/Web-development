<!DOCTYPE html>
<head>
    <title>Lab 3.4</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Text File Content</h1>
<table>
    <?php
    $file = fopen("data.txt", "r");
    if (($line = fgets($file)) !== FALSE) {
        $headers = explode(",", trim($line));
        echo "<tr>";
        foreach ($headers as $header) {
            echo "<th>{$header}</th>";
        }
        echo "</tr>";
    }
    while (($line = fgets($file)) !== FALSE) {
        $row = explode(",", trim($line));
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>{$cell}</td>";
        }
        echo "</tr>";
    }
    fclose($file);
    ?>
</table>
</body>
</html>
