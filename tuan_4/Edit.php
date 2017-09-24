<?php
?>
<table>
    <form action="bai_7.php" method="GET">
        <tr>
            <td>Name</td> <td><input type="text" name="name_fixed"></td>
        </tr>
        <tr style="display: none">
            <td>Id</td> <td><input value="<?php echo $_GET['id']?>" id="name" name="id"></td>
        </tr>
        <tr>
            <td>Phone number</td> <td><input type="text" name="phone_fixed"></td>
        </tr>
        <tr>
            <td>Email</td> <td><input type="text" name="email_fixed"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </form>
</table>
