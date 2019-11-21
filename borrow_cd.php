<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>Borrow CD</title>
<body>
    <h1>Borrow CD</h1>
    <?php
    if (!$mysql = @mysqli_connect("134.74.112.21", "zhe19f", "jun", "d129")) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('America/New_York');
    //insert customer borrow a CD
    if ($_REQUEST['customer'] != "") {
	    $customer = mysqli_real_escape_string($mysql, $_REQUEST['customer']);
	    $SSN = mysqli_real_escape_string($mysql, $_REQUEST['SSN']);
	    $telephone = mysqli_real_escape_string($mysql, $_REQUEST['telephone']);
	    $CD = mysqli_real_escape_string($mysql, $_REQUEST['CD']);
	    $date = Date('Y-m-d');
	    //check if the customer exist or not
	    $check = mysqli_query($mysql, "SELECT name FROM Customer WHERE name = '$customer' AND SSN = '$SSN'");
	    if (!mysqli_num_rows($check)) {
		    mysqli_query($mysql, "INSERT INTO Customer (name, SSN, telephone) VALUES ('$customer', '$SSN', '$telephone')");
		    echo "insert a new customer, $customer, $SSN, $telephone, $CD, $date";
	    }
	    mysqli_query($mysql, "INSERT INTO Rent (CD_name, Customer_name, Customer_SSN, date) VALUES ('$CD','$customer', '$SSN', '$date')");
	    //check VIP
	    $vip = mysqli_real_escape_string($mysql, $_REQUEST['vip']);
	    $CD = mysqli_real_escape_string($mysql, $_REQUEST['CD']);
	    if ($vip) {
		    if ($_REQUEST['start'] == "") {
			    $start = Date('Y-m-d');
		    } else {
			    $start = mysqli_real_escape_string($mysql, $_REQUEST['start']);
		    }
		    if ($_REQUEST['discount'] == "") {
			    $discount = '10';
		    } else {
			    $discount = mysqli_real_escape_string($mysql, $_REQUEST['discount']);
		    }
		    mysqli_query($mysql, "INSERT INTO VIP_customer (name, SSN, staring_date, discount) VALUES ('$customer', '$SSN', '$start', '$discount')");
		    echo "insert a new VIP customer, $customer, $SSN, $telephone, $CD, $date";
	    }
	    echo "INSERT SUCCEED";
    }
	?>
<h3>Customer</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>SSN</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Telephone</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Customer");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['SSN'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
        <h3>VIP</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>SSN</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Staring Date</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Discount</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM VIP_customer");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['SSN'] . "</td>";
                echo "<td>" . $row['staring_date'] . "</td>";
                echo "<td>" . $row['discount'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
	</table>
        <h3>Rent</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>CD Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Customer Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Customer SSN</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Date</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Rent");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['CD_name'] . "</td>";
                echo "<td>" . $row['Customer_name'] . "</td>";
                echo "<td>" . $row['Customer_SSN'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
	</table>
<h2>Borrow CD</h2>
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
	<table border="0" cellpadding="0" cellspacing="0">
	    <tr>
		<td>Name</td>
		<td><input type="text" size="30" name="customer"></td>
                <td align="center">VIP</td>
                <td><input type="checkbox" name="vip" value="VIP"></td>
            </tr>
            <tr>
                <td>SSN</td>
                <td> <input type="text" size="30" name="SSN"></td>
                <td>Staring Date</td>
                <td> <input type="text" size="30" name="start"></td>
            </tr>
            <tr>
                <td>telephone#</td>
                <td> <input type="text" size="30" name="telephone"></td>
                <td align="center">Discount</td>
                <td> <input type="text" size="30" name="discount"></td>
            </tr>
            <tr>
                <td>CD title</td>
                <td> <input type="text" size="30" name="CD"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Borrow the CD"></td>
            </tr>
        </table>
    </form>

</body>
</html>
