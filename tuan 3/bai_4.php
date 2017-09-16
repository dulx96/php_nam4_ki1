<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8"/>
</head>
<body>
<table align ="center" width="400px" border="1px" cellspacing="0" cellpadding="3">
    <tr>
        <th>STT</th>
        <th>Noi dung</th>
        <th>Hinh anh</th>
        <th>Thao tac</th>
    </tr>
    <?php
    $n = 10;
    $chuoi = "lap trinh PHP";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo "<tr bgcolor='#669933'>";
        } else echo "<tr>";
        ?>
        <td> <?php echo $i; ?> </td>
        <td>Dong <?php echo $i . " : " . $chuoi; ?> </td>
        <td><img src="https://images-na.ssl-images-amazon.com/images/I/81SlqH1xc5L._SX425_.jpg" width="50px" height="auto"></td>
        <td style="text-align: center"><a href="details.php">Xem</a> </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>