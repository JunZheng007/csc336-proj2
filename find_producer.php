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
    <h2>Find Puducer</h2>


<?php
    error_reporting(E_ALL ^ E_NOTICE);
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
    </table>
</body>

</html>
