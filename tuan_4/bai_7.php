<html>
<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="style/bai_7.css">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['address'])) {
    $address = array();
    $address[] = array('Alexa', '430-5552-2522', 'shunshine@fakeadress.com');
    $address[] = array('Baloo', '484-5555-6666', 'ballo@junglebook.com');
    $_SESSION['address'] = $address;
} else $address = $_SESSION['address'];
$myJSON = json_encode($address);
?>
<h1>Address Book</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td colspan="2">Admin</td>
    </tr>
    <tr>
        <td colspan="5" align="right">
            <a href="add_contacts.php">Add Contacts</a>
        </td>
    </tr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if ((isset($_GET['name'])) && (isset($_GET['phone'])) && isset($_GET['email'])) {
            $address[] = array($_GET['name'], $_GET['phone'], $_GET['email']);

        }
    if ((isset($_GET['name_fixed'])) && (isset($_GET['phone_fixed'])) && isset($_GET['email_fixed'])) {
        $address[$_GET['id']] = array($_GET['name_fixed'], $_GET['phone_fixed'], $_GET['email_fixed']);
    }
        $_SESSION['address'] = $address;

    }
    // delete
    if(isset($_GET['action']))
    if(($_GET['action'] == 'delete') && isset($_GET['id'])) {
        array_splice($address,$_GET['id'],1);
        $_SESSION['address'] = $address;
    }
    // edit
    print_table($address);
    ?>
</table>
<?php
function print_table($address)
{
    for ($i = 0; $i < count($address); $i++) {
        echo "<tr id = 'so" . $i . "'>";
        echo "<td>" . $address[$i][0] . "</td>";
        echo "<td>" . $address[$i][1] . "</td>";
        echo "<td>" . $address[$i][2] . "</td>";
        echo "<td><a href=" . "Edit.php?action=edit&id=". "$i" . ">Edit</a></td>";
        echo "<td><a href=" . "bai_7.php?action=delete&id=". "$i" . " class='delete'>Remove</a></td>";
        echo "</tr>";

    }
}

?>
</body>
<script>var address = <?php echo json_encode($address)?></script>
<script src="js/bai_7.js"></script>
</html>
<?php

?>