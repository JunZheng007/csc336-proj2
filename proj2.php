<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<body>
    <h2>CSC33600 Project 2</h2>
    <?php
    if (!$mysql = @mysqli_connect("134.74.112.21", "zhe19f", "jun", "d129")) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    ?>
    <table>
        <h3>CD</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Title</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Artist</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Year</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Type</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM CD");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['artist'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
        <h3>Producer</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Address</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Producer");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
        <h3>Produced</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>CD Title</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Producer</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Produced");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['CD_title'] . "</td>";
                echo "<td>" . $row['Producer_name'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
        <h3>Supplier</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Address</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Supplier");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
        <h3>Supplied</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>CD Title</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Supplier</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM Supplied");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr valign='middle'>";
                echo "<td>" . $row['CD_title'] . "</td>";
                echo "<td>" . $row['Supplier_name'] . "</td>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
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
    </table>
    <?php
    date_default_timezone_set('America/New_York');
    error_reporting(E_ALL ^ E_NOTICE);
    //insert input data
    if ($_REQUEST['name'] != "") {
        $name = mysqli_real_escape_string($mysql, $_REQUEST['name']);
        $address = mysqli_real_escape_string($mysql, $_REQUEST['address']);
        mysqli_query($mysql, "INSERT INTO Producer (name, address) VALUES ('$name','$address')");
        echo "INSERT INTO Producer (name, address) VALUES('$name','$address)";
    }
    //insert CD with producer and supplier
    if ($_REQUEST['title'] != "") {
        if ($_REQUEST['year'] == "") {
            $year = "NULL";
        } else {
            $year = intval($_REQUEST['year']);
        }
        $title = mysqli_real_escape_string($mysql, $_REQUEST['title']);
        $artist = mysqli_real_escape_string($mysql, $_REQUEST['artist']);
        $type = mysqli_real_escape_string($mysql, $_REQUEST['type']);
        $producer = mysqli_real_escape_string($mysql, $_REQUEST['producer']);
        $supplier = mysqli_real_escape_string($mysql, $_REQUEST['supplier']);
        mysqli_query($mysql, "INSERT INTO CD (title, type, year, artist) VALUES ('$title','$type', '$year', '$artist')");
        mysqli_query($mysql, "INSERT INTO Producer (name, address) VALUES ('$producer','NULL')");
        mysqli_query($mysql, "INSERT INTO Supplier (name, address) VALUES ('$supplier','NULL')");
        mysqli_query($mysql, "INSERT INTO Produced (CD_title, Producer_name) VALUES ('$title','$producer')");
        mysqli_query($mysql, "INSERT INTO Supplied (CD_title, Supplier_name) VALUES ('$title','$supplier')");
        echo "INSERT SUCCEED";
    }
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
    </table>

    <h2>Add Producer</h2>

    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>Name</td>
                <td><input type="text" size="30" name="name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td> <input type="text" size="30" name="address"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Add Producter"></td>
            </tr>
        </table>
    </form>

    <h2>Add CD</h2>

    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>Title</td>
                <td><input type="text" size="30" name="title"></td>
            </tr>
            <tr>
                <td>Artist</td>
                <td> <input type="text" size="30" name="artist"></td>
            </tr>
            <tr>
                <td>Year</td>
                <td> <input type="text" size="30" name="year"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td> <input type="text" size="30" name="type"></td>
            </tr>
            <tr>
                <td>Supplied by</td>
                <td> <input type="text" size="30" name="supplier"></td>
            </tr>
            <tr>
                <td>Produced by</td>
                <td> <input type="text" size="30" name="producer"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Add CD"></td>
            </tr>
        </table>
    </form>

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


    <h2>Find Puducer</h2>

    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>CD Artist</td>
                <td><input type="text" size="30" name="find_artist"></td>
            <tr>
                <td>CD Year</td>
                <td><input type="text" size="30" name="find_year"></td>
                <td><input type="submit" value="Find"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_REQUEST['find_artist'] != "") {
        $find_artist = mysqli_real_escape_string($mysql, $_REQUEST['find_artist']);
        $find_year = mysqli_real_escape_string($mysql, $_REQUEST['find_year']);
        echo '<table border="0" cellpadding="0" cellspacing="0">
		<tr bgcolor="#f87820">
		<td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Producer Name</b></td>
		<td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Producer Address</b></td>
		<td><img src="img/blank.gif" alt="" width="10" height="25"></td>
		</tr>';
        $result = mysqli_query($mysql, "SELECT name, address FROM Producer, Produced, (SELECT title FROM CD WHERE artist = '$find_artist' AND year = '$find_year') cd WHERE CD_title = title AND Producer_name = name");
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr valign='middle'>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</td>";
            echo "</tr>";
            $i++;
        }
    }
    ?>
    </table>
</body>

</html>
