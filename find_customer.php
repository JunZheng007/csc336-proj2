<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>Find Producer</title>
<body>
    <h1>Find Producer</h1>
    <?php
    if (!$mysql = @mysqli_connect("134.74.112.21", "zhe19f", "jun", "d129")) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    ?>
    <h2>Find Customer</h2>

    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>CD Title</td>
                <td><input type="text" size="30" name="find"></td>
                <td><input type="submit" value="Find"></td>
            </tr>
        </table>
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    if ($_REQUEST['find'] != "") {
        $find = mysqli_real_escape_string($mysql, $_REQUEST['find']);
        echo '<table border="0" cellpadding="0" cellspacing="0">
		<tr bgcolor="#f87820">
		<td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Customer Name</b></td>
		<td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Telephone Number</b></td>
		<td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Borrow Date</b></td>
		<td><img src="img/blank.gif" alt="" width="10" height="25"></td>
		</tr>';
        $result = mysqli_query($mysql, "SELECT Customer_name, telephone, date FROM Rent, Customer WHERE CD_name = '$find' AND Customer_name = name");
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr valign='middle'>";
            echo "<td>" . $row['Customer_name'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</td>";
            echo "</tr>";
            $i++;
        }
    }
    ?>
    </table>

</body>
</html>
