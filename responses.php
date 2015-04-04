<?php
require_once "conn.php";
?>
<html>
<head>
<style type="text/css">
th,td {
 border-bottom:1px solid black;
 border-right:1px solid black;
}
</style>
<title>Attendees List</title>
</head>
<body lang=EN-US style='tab-interval:.5in'>
<p><span style='font-size:18.0pt;line-height:115%;font-family:
Forte'>Accepted List</span></p>

<table align="center" style="border-top:1px solid black;border-left:1px solid black;">
<tr><th>Id</th><th>Name</th><th>Email</th><th>Adults</th><th>Kids</th><th>Comments</th><th>Response</th></tr>
<?php 
$sql = mysql_query("select * from Attendees order by id "); 
while($arr = mysql_fetch_array($sql))
{?>
<tr>
	<td><?php echo $arr[0]?></td>
	<td><?php echo $arr[1];?></td>
	<td><?php echo $arr[2];?></td>
	<td><?php echo $arr[3];?></td>
	<td><?php echo $arr[4];?></td>
	<td><?php echo $arr[5];?></td>
	<td><?php echo $arr[6];?></td>
</tr>
<?php } 
$cntYes = mysql_query("select SUM(adults), SUM(kids) from Attendees where response = 'yes'");
$cntNo = mysql_query("select count(0) from Attendees where response = 'no'");
$cntMayBe = mysql_query("select SUM(adults), SUM(kids) from Attendees where response = 'maybe'");
$guestsAttending = mysql_fetch_array($cntYes);
$guestsNotAttending = mysql_fetch_array($cntNo);
$guestsTentative = mysql_fetch_array($cntMayBe);?>
<tr>
<th colspan="7">Attendees Counts</th>
</tr>
<tr>
<th colspan="3">Attending</th><th colspan="1">Not Attending</th><th colspan="3">Tentative</th>
</tr>
<tr>
<td colspan="3">Adults: <?= $guestsAttending[0]?></td><td colspan="1">Adults: <?= $guestsNotAttending[0]?></td><td colspan="3">Adults: <?= $guestsTentative[0]?></td>
</tr>
<tr>
<td colspan="3">Kids: <?= $guestsAttending[1]?></td><td colspan="1">Kids: 0</td><td colspan="3">Kids: <?= $guestsTentative[1]?></td>
</tr>
</table>
<?php include "footer.php"?>