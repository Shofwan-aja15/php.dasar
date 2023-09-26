<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>

    <?php
        $Produk1 = 'Laptop';
        $Produk2 = 'Handphone';
        $Produk3 = 'Tablet';

        $Harga1 = '3000000';
        $Harga2 = '200000';
        $Harga3 = '300000';

        $Diskon1 = $Harga1 * 0.1;
        $Diskon2 = $Harga2 * 0.1;
        $Diskon3 = $Harga3 * 0.2;

        $afterdic1 = $Harga1 * $Diskon1;
        $afterdic2 = $Harga2 * $Diskon2;
        $afterdic3 = $Harga3 * $Diskon3;

        $stok1 = 89;
        $stok2 = 50;
        $stok3 = 40;

        $total = $stok1 + $stok2 + $stok3;
        $totalHarga= $afterdic1 + $afterdic2 + $afterdic3;
    ?>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding= "5">
        <tr style="background-color: gray">
            <th>Produk</th>
            <th>Harga</th>
            <th>Diskon (10%)</th>
            <th>Harga setelah Diskon</th>
            <th>Stok</th>
        </tr>
        <tr>
            <td><?php echo $Produk1?></td>
            <td><?php echo $Harga1?></td>
            <td><?php echo $Diskon1?></td>
            <td><?php echo $afterdic1?></td>
            <td><?php echo $stok1?></td>
        </tr>
        <tr>
            <td><?php echo $Produk2?></td>
            <td><?php echo $Harga2?></td>
            <td><?php echo $Diskon2?></td>
            <td><?php echo $afterdic2?></td>
            <td><?php echo $stok2?></td>
        </tr>
        <tr>
            <td><?php echo $Produk3?></td>
            <td><?php echo $Harga3?></td>
            <td><?php echo $Diskon3?></td>
            <td><?php echo $afterdic3?></td>
            <td><?php echo $stok3?></td>
        </tr>
        <tr>
            <td colspan = "4">Total</td>
            <td><?php echo $total?></td>
        </tr>
        <tr>
            <td colspan = "3">Total Harga</td>
            <td><?php echo $totalHarga?></td>
        </tr>
    </table>
</body>
</html>