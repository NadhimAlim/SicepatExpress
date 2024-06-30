<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pengiriman</h1>
        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Data Pengiriman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $filename = 'data_pengiriman.txt';
                    $lineNumber = 1;

                    if (file_exists($filename)) {
                        $file = fopen($filename, "r");
                        if ($file) {
                            while (($line = fgets($file)) !== false) {
                                // Assuming each line is structured as "Jarak:Biaya"
                                list($jarak, $biaya) = explode(':', $line, 2);
                                ?>
                                <tr>
                                    <td><?php echo $lineNumber++; ?></td>
                                    
                                    <td><?php echo htmlspecialchars(trim($jarak).trim($biaya)); ?></td>
                                </tr>
                                <?php
                            }
                            fclose($file);
                        } else {
                            echo "<tr><td colspan='2'>Gagal membuka file.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Tidak ada data pengiriman.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


