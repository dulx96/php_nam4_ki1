<!Document>
<html>
<head>
    <title>Color Table</title>
</head>
<body>
<h1>Color Table</h1>
<?php
$favColors = array();
$favColors['BlanceAlmond'] = '#ffebcd';
$favColors['CadetBlue'] = '#5f9ea0';
$favColors['BurlyWood'] = '#deb887';
$favColors['DarkOliveGreen'] = '#556b2f';
$favColors['HotPink'] = '#ff69b4';
$favColors['Papayawhip'] = '#ff3fd5';
?>

<table border="1">
    <tr>
        <th>Color Name</th>
        <th>Hex Code</th>
    </tr>
    <?php
    foreach($favColors as $key => $item) {
        echo "    <tr bgcolor='$key'>
                    <td>$key</td>
                    <td>$item</td>
                    </tr>";

    }
        ?>
</table>
</body>
</html>

