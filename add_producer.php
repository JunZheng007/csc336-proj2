<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>Add Producer</title>
<body>
    <h1>Add Producer</h1>
    <?php
    if (!$mysql = @mysqli_connect("134.74.112.21", "zhe19f", "jun", "d129")) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    ?>
    <h3>Producer</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Name</b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b>Address</b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>
	<?php
	    error_reporting(E_ALL ^ E_NOTICE);
	    if ($_REQUEST['name'] != "") {
		    $name = mysqli_real_escape_string($mysql, $_REQUEST['name']);
		    $address = mysqli_real_escape_string($mysql, $_REQUEST['address']);
		    mysqli_query($mysql, "INSERT INTO Producer (name, address) VALUES ('$name','$address')");
	    }
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
</body>
</html>
