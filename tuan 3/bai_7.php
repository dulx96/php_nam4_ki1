<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
    <link rel="stylesheet" href="style/bai_7.css">
</head>
<body>
<div class="big">
    <h2>TINH TIEN KARAOKE</h2>
        <form action="bai_7.php" method="post">
            <table>
            <tr>
                <td>Gio bat dau:</td>
                <td><label>
                        <input type="text" name="gio_bat_dau">
                    </label></td>
                <td>(h)</td>
            </tr>
            <tr>
                <td>Gio ket thuc:</td>
                <td><label>
                        <input type="text" name="gio_ket_thuc">
                    </label></td>
                <td>(h)</td>
            </tr>
                <?php
                if(isset($_POST["gio_bat_dau"]) && isset($_POST["gio_ket_thuc"])){
                    $gio_bat_dau = $_POST["gio_bat_dau"];
                    $gio_ket_thuc = $_POST["gio_ket_thuc"];
                    $value = karaoke($gio_bat_dau,$gio_ket_thuc);
                }
                function karaoke($start,$end){
                    if($start < $end){
                        if($start >= 10 && $end <= 24) {
                            return $start<=17 ? (17-$start) * 20000 + ($end <=17 ? ($end -17) *20000 : ($end-17)*45000): ($end-$start)*45000;
                        }
                        else alert('gio nghi!!');
                    }
                    else alert('gio ket thuc > gio bat dau');
                }
                function alert($msg) {
                    echo "<script type='text/javascript'>alert('$msg');</script>";
                }

                ?>
            <tr>
                <td>Tien thanh toan</td>
                <td><label>
                        <input type="text" name="tien_thanh_toan" readonly value="<?php echo $value?>" style="background-color: greenyellow; color:darkgreen">
                    </label></td>
                <td>(VND)</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tinh Tien">  </td>
            </tr>

            </table>
        </form>
</div>
</body>
</html>