<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
</head>
<body>
<h4>SWITCH Statement</h4>
<?php
$j=4;
$j=date("w");
$str="";
switch ($j) {
    case 0:
        $str="Today is Sunday";
        break;
    case 1:
        $str="Today is Monday";
        break;
    case 2:
        $str="Today is Tueday";
        break;
    case 3:
        $str="Today is Wednesday";
        break;
    case 4:
        $str="Today is Thursday";
        break;
    case 5:
        $str="Today is Friday";
        break;
    case 6:
        $str="Today is Saturday";
        break;
    default:
        $str="Today is Sunday";
        break;
}
echo $str;
?>
</body>
</html>