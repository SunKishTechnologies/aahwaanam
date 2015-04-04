$(document).ready(function() {
var dialogOpts = {
        title: "Your response",
        modal: true,
        autoOpen: false,
        height: 500,
        width: 500,
        open: function() {
        //display correct dialog content
        $("#example").load("respond.php?response="+$("#example").attr("response"));}
        };
$("#example").dialog(dialogOpts);    //end dialog
});
$('#yes').live('click', function() {
$("#example").attr("response","yes");
$("#example").dialog("open");
return false;
});
$('#no').live('click', function() {
$("#example").attr("response","no");
$("#example").dialog("open");
return false;
});
$('#maybe').live('click', function() {
$("#example").attr("response","maybe");
$("#example").dialog("open");
return false;
});
