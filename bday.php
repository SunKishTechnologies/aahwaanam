<?php
$message = "";
if (!empty($_REQUEST) && isset($_REQUEST['response'])) {
    	$name = "'".addslashes($_REQUEST['guest_name'])."'";
	$email = "'".addslashes($_REQUEST['guest_email'])."'";
	$adults = isset($_REQUEST['adult_count']) ? "'".addslashes($_REQUEST['adult_count'])."'" : '0';
	$kids = isset($_REQUEST['kids_count']) ? "'".addslashes($_REQUEST['kids_count'])."'" : '0';
	$comments = "'".addslashes($_REQUEST['comments'])."'";
	$response = "'".addslashes($_REQUEST['response'])."'";
	if(mysql_query("insert into Attendees(Name,Email,Adults,Kids,Comments,Response) values($name,$email,$adults,$kids,$comments,$response)",$dbh)) {
	    if ($_REQUEST['response'] == "yes")
	        $message = "Thank you for accepting the invite .<br /> See you on the 11th";
	    else if ($_REQUEST['response'] == "no")
	        $message = "We are sad to know you will not be here.<br /> We do need your blessings, though. Thank you.";
	    else if ($_REQUEST['response'] == "maybe")
	        $message = "Hope you will make it.<br /> We need your blessings. Thank you.";
	}
	else {
		var_dump(mysql_error());
	    $message = "Error receiving details. Sorry for the inconvenience.<br /> Please call us. Thank you.";
	}
}
?>
<body lang=EN-US style='tab-interval:.5in'>
<div id="example"></div>
<?php if ($message != "") {
?>
<p><span style="font-size:18.0pt;line-height:115%;font-family:
Forte;<?php print(strpos($message,'call') > 0 ? 'color:red' : 'color:green') ?>"><?php echo $message; ?></span></p>
<?php } ?>
<div id="main">
<br>
<br>
<br>
<!--<h1 style="text-align:center;font-size:48.0pt;font-family:
Forte;color:#aa1234;padding-top:50px">Our little Princess turning</h1> <br />
<h1 style="text-align:center;font-size:48.0pt;font-family:
Forte;color:#1aa254;">THREE</h1><br/>-->
<div id="attendance1">
<!-- Begin FreeButtons.org -->
<table id="web-buttons-idtvoa6" width=0 cellpadding=0 cellspacing=0 border=0>
<tr><td>Joining us?</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td style="padding-bottom:0px" title ="Definitely">
<a href="javascript:void(0)" id="yes" title="Definitely
There" style="background-image:url(ourhome-files/bttvoa6.png);width:90px;height:40px;display:block;"><br/></a></td></tr>
<tr><td style="padding-bottom:0px" title ="Can't Make It">
<a href="javascript:void(0)" id="no" title="Can't Make It" style="background-image:url(ourhome-files/btpvoa6.png);width:90px;height:34px;display:block;"><br/></a></td></tr>
<tr><td style="padding-bottom:0px" title ="Will Try">
<a href="javascript:void(0)" id="maybe" title="Will Try" style="background-image:url(ourhome-files/btovoa6.png);width:90px;height:34px;display:block;"><br/></a></td></tr>
</table>
<!-- End FreeButtons.org -->
</div>
<div class="one">
<div class="inv">Hop on by for some spring fun<br/>
Turning 3 is our little hun! <br/>@ <br/>12:00PM on Saturday, April 11th, 2015.</div>
<div class='back'><img src="images/mags.jpg" width=300px height=500px /></div>
</div>
<div class="three">
<div class='bday'><img src="images/bday.gif" width=300px height=300px /></div>
</div>
</div>
<div class="two">
<div class='contact'><img src="images/maggie.png" width=300px height=500px /></div>
</div>
<div class="venue"><br/><br/><u>VENUE</u><br/><b>Fremont Central Park</b><br/><br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1513.752343259468!2d-121.96407900000001!3d37.54485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDMyJzQxLjUiTiAxMjHCsDU3JzUwLjciVw!5e1!3m2!1sen!2sus!4v1427086328508" width="400" height="300" frameborder="0" style="border:0"></iframe>
</div>
<br/>
<div class="check"><br/>Hoping to see you there<br>(Parnavi, Misha, Deepika & Suresh) Anugu.<br><img src="phone_number.png" alt="Call us" height="60px" width="60px" valign="middle" style="vertical-align:middle" />9253893007, 4089167416</div>
</div>