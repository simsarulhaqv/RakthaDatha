function spawnnew(){
  var x = document.getElementById('uniqid').value;
  var y = document.getElementById('op1');
  if (x === "BDC"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"BDC\">\
    <input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter the Manager ID\"><br>\
    <input type=\"text\" name=\"choice3\" placeholder=\"Enter the Blood Donation Centre City\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "EMP"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"EMP\">\
    <input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter your designation\"><br>\
    When did you join the Blood Donation Centre ? <input type=\"date\" name=\"choice3\" placeholder=\"When did you join the Blood Donation Centre ?\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "DNR"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter your Mobile Number\"><br>\
    <input type=\"text\" name=\"choice3\" placeholder=\"Enter your Blood Group (Example : A+ / A- / B+ / B- / . . .)\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "MONORG"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"MONORG\">\
    <input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"email\" name=\"choice2\" placeholder=\"Enter your E-Mail ID\"><br>\
    <input type=\"text\" name=\"choice3\" placeholder=\"Enter your mobile number\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else{
    y.innerHTML = "<select id=\"uniqid\" name=\"uniqid\" onchange=\"spawnnew()\">\
      <option value=\"\">- Select One of the below -</option>\
      <option value=\"BDC\">Blood Donation Centre</option>\
      <option value=\"EMP\">Employee</option>\
      <option value=\"DNR\">Donor</option>\
      <option value=\"MONORG\">Monetary Organisation</option>\
    </select>";
  }
}

function admin_actions(){
  var x = document.getElementById('uniqid').value;
  var y = document.getElementById('op1');
  if (x === "addnewdnr"){
    y.innerHTML = "<form name=\"adminFrm\" action=\"addnewdonor.php\" method=\"POST\">\
    <input type=\"text\" name=\"fname\" id=\"fname\" placeholder=\"Enter first name\"><br>\
    <input type=\"text\" name=\"lname\" id=\"lname\" placeholder=\"Enter last name\"><br>\
    <input type=\"text\" name=\"city\" id=\"city\" placeholder=\"Enter city\"><br>\
    <input type=\"text\" name=\"mobno\" id=\"mobno\" placeholder=\"Enter mobile number\"><br>\
    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Enter E-Mail\"><br>\
    <input type=\"text\" name=\"btype\" id=\"btype\" placeholder=\"Enter Blood Type\"><br>\
    <div style=\"width:100px;display:inline;\">\
    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Enter Password\" style=\"width:100%\" onkeyup=\"strengthMeter()\">\
    <div id=\"meter\" style=\"background-color:white;width:5px;height:10px;\"></div><div id=\"strength\"></div>\
    </div><br><br><br>\
    <input type=\"Submit\" name=\"adddnr\" value=\"Add Donor\"><br>\
    </form>\
    ";
  }
  else if (x === "remdnr"){
    y.innerHTML = "<form name=\"adminFrm\" action=\"remdonor.php\" method=\"POST\">\
    <input type=\"text\" name=\"uname\" id=\"uname\" placeholder=\"Enter the Donor User ID\"><br>\
    <input type=\"text\" name=\"mobno\" id=\"mobno\" placeholder=\"Enter mobile number\"><br>\
    <input type=\"Submit\" name=\"adddnr\" value=\"Remove Donor\"><br>\
    </form>\
    ";
  }
  else if (x === "addbdc"){
    y.innerHTML = "<form name=\"adminFrm\" action=\"addbdc.php\" method=\"POST\">\
    <input type=\"text\" name=\"cname\" id=\"cname\" placeholder=\"Enter the name of the person managing this Blood Donation Centre\"><br>\
    <input type=\"text\" name=\"city\" id=\"city\" placeholder=\"Enter city\"><br>\
    <div style=\"width:100px;display:inline;\">\
    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Enter Password\" style=\"width:100%\" onkeyup=\"strengthMeter()\">\
    <div id=\"meter\" style=\"background-color:white;width:5px;height:10px;\"></div><div id=\"strength\"></div>\
    </div><br><br><br>\
    <input type=\"Submit\" name=\"adddnr\" value=\"Add Blood Donation Centre\"><br>\
    </form>\
    ";
  }
  else if (x === "rembdc"){
    y.innerHTML = "";
  }
  else if (x === "addmonorg"){
    y.innerHTML = "";
  }
  else if (x === "remmonorg"){
    y.innerHTML = "";
  }
  else if (x === "viewalldnr"){
    y.innerHTML = "<a href=\"viewalldnrs.php\">View All Donors</a>";
  }
  else{
    y.innerHTML = "";
  }
}

function unsubscribe(){
  var x = document.getElementById('uniqid').value;
  var y = document.getElementById('op1');
  if (x === "DNR"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"Enter your Login ID\"><br>\
    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Enter your secret Password\"><br>\
    <input type=\"submit\" value=\"Un Subscribe\" class=\"special\"><br>";
  }
  else if (x === "RCV"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"RCV\">\
    <input type=\"text\" name=\"bldgrp\" id=\"bldgrp\" placeholder=\"Enter your Blood Group\"><br>\
    <input type=\"text\" name=\"mobno\" id=\"mobno\" placeholder=\"Enter your Mobile Number\"><br>\
    <input type=\"submit\" value=\"Un Subscribe\" class=\"special\"><br>";
  }
  else if (x === "MONORG"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"MONORG\">\
    <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"Enter your Login ID\"><br>\
    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Enter your secret Password\"><br>\
    <input type=\"submit\" value=\"Un Subscribe\" class=\"special\"><br>";
  }
  else{
    y.innerHTML = "";
  }
}

/* http://red-team-design.com/cool-notification-messages-with-css3-jquery/ */

var myMessages = ['info','warning','error','success']; // define the messages types
function hideAllMessages()
{
		 var messagesHeights = new Array(); // this array will store height for each

		 for (i=0; i<myMessages.length; i++)
		 {
				  messagesHeights[i] = $('.' + myMessages[i]).outerHeight();
				  $('.' + myMessages[i]).css('top', -messagesHeights[i]); //move element outside viewport
		 }
}

function showMessage(type)
{
	$('.'+ type +'-trigger').click(function(){
		  hideAllMessages();
		  $('.'+type).animate({top:"0"}, 500);
	});
}

$(document).ready(function(){

		 // Initially, hide them all
		 hideAllMessages();

		 // Show message
		 for(var i=0;i<myMessages.length;i++)
		 {
			showMessage(myMessages[i]);
		 }

		 // When message is clicked, hide it
		 $('.message').click(function(){
				  $(this).animate({top: -$(this).outerHeight()}, 500);
		  });

});

/* http://red-team-design.com/cool-notification-messages-with-css3-jquery/ */

function remdonor_adminactions(username,mobilenumber){
  var xhttp = new XMLHttpRequest();
/*  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  }
*/
  xhttp.open("POST", "remdonor.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+username+"&mobno="+mobilenumber);
  location.reload();
}
