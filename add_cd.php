<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>Add CD</title>
<body>
    <h1>Add CD</h1>
    <?php
    if (!$mysql = @mysqli_connect("134.74.112.21", "zhe19f", "jun", "d129")) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    error_reporting(E_ALL ^ E_NOTICE);
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
    
<?php
?>
	</table>
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
</body>
</html>
