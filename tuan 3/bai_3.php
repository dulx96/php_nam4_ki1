<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8"/>
</head>
<body>
<table border="0px" width="auto" align="center">
    <tr>
        <td>Ngay:
            <select name="ngay" id="ngay">
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </td>

        <td>Thang:
            <select name="thang" id="thang">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </td>
        <td>Nam:
            <select name="nam" id="nam">
                <?php
                for ($i = 1900; $i <= 2050; $i++) {
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
</table>
</body>
</html>