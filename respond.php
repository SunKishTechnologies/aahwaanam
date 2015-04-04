<?php
require_once "conn.php";
?>
<html>
<body lang=EN-US style='tab-interval:.5in'>
<p><span style='font-size:18.0pt;line-height:115%;font-family:
Forte'>Please fill in your details below.</span></p>

<form name="responseForm" id="responseForm" action="index.php" method="post">
<table align="center" style="">
<tr><td style='font-size:18.0pt;line-height:115%;font-family:
Forte'><label>Your Name: </label></td><td align="left" style=""><input type="text" name="guest_name" id="guest_name" style="width:200px" /></td></tr>
<tr><td style='font-size:18.0pt;line-height:115%;font-family:
Forte'><label>Email address: </label></td><td align="left" ><input type="text" name="guest_email" id="guest_email" style="width:200px" /></td></tr>
<?php if (isset($_REQUEST['response']) && $_REQUEST['response'] != "no") {?>
<tr>
<td style='font-size:18.0pt;line-height:115%;font-family:
Forte'><label>Adults(including you): </label></td>
<td align="left" >
<input type="text" name="adult_count" id="adult_count" style="width:20px" />
</td>
</tr>
<tr>
<td style='font-size:18.0pt;line-height:115%;font-family:
Forte'><label>Kids: </label></td>
<td align="left" >
<input type="text" name="kids_count" id="kids_count" style="width:20px" />
</td>
</tr>
<?php } ?>
<tr><td style='font-size:18.0pt;line-height:115%;font-family:
Forte'><label>Comments: </label></td><td align="left" ><textarea name="comments" id="comments" style="width:100px;" scrollable=true></textarea></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td colspan="2" align="center"><input type="submit" style="height: 2.5em; width: 10em; background-color:lightgreen" id="done" value="Confirm this!!!" /></td><td><input type="hidden" name="response" value="<?php echo $_REQUEST['response'] ?>" /></td></tr>
</table>
</form>
<?php include "footer.php"?>