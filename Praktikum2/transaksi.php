<?php
    if(isset($_POST['submit'])){
        $cst = $_POST['customer'];
        $prd = $_POST['barang'];
        $jml = $_POST['total'];
        $btn = $_POST['submit'];

        switch ($prd){
            case "Handphone";
                $total = $jml * 2000000;
                break;
            case "charger";
                $total = $jml * 100000;
                break;
            case "earphone";
                $total = $jml * 75000;
                break;
        }
        $total_format = number_format($total, 0, ',', '.');
    }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 15px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
            font-size: 1.2em;
            text-align: center;
            background-color: white;
        }

        th, td {
            border: 2px solid black;
            padding: 12px;
        }

        th:first-child {
            font-weight: normal;
        }

    </style>
</head>

<body>
    
    <?php 
        if(isset($_POST['submit'])){
            echo '<table>';
            echo '<tr><th>Nama Pembeli</th><td>' . $cst . '</td></tr>';
            echo '<tr><th>Barang yang dipilih</th><td>' . $prd . '</td></tr>';
            echo '<tr><th>Jumlah Produk</th><td>' . $jml . '</td></tr>';
            echo '<tr><th>Harga yang dibayar</th><td>' . $total_format . '</td></tr>';
            echo '</table>';
        }
    ?>
</body>

</html>
