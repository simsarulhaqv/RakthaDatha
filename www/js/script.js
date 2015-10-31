function spawnnew(){
  var x = document.getElementById('uniqid').value;
  var y = document.getElementById('op1');
  if (x === "BDC"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"BDC\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice1\" name=\"choice1\" />\
	<label class=\"mdl-textfield__label\" for=\"choice1\">Enter your User Name</label>\
	</div><br>\
	<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice2\" name=\"choice2\" />\
	<label class=\"mdl-textfield__label\" for=\"choice2\">Enter the Manager ID</label>\
	</div><br>\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice3\" name=\"choice3\" />\
	<label class=\"mdl-textfield__label\" for=\"choice3\">Enter the Blood Donation Centre City</label>\
	</div><br>\
	<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"forgotPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button><br>";
  }
  else if (x === "EMP"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"EMP\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice1\" name=\"choice1\" />\
	<label class=\"mdl-textfield__label\" for=\"choice1\">Enter your User Name</label>\
	</div><br>\
  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
  <input class=\"mdl-textfield__input\" type=\"text\" id=\"choice2\" name=\"choice2\" />\
  <label class=\"mdl-textfield__label\" for=\"choice2\">Enter your designation</label>\
  </div><br>\
    When did you join the Blood Donation Centre ? <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"date\" id=\"choice3\" name=\"choice3\" />\
	</div><br>\
    <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"forgotPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button><br>";
  }
  else if (x === "DNR"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice1\" name=\"choice1\" />\
	<label class=\"mdl-textfield__label\" for=\"choice1\">Enter your User Name</label>\
	</div><br>\
  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
  <input class=\"mdl-textfield__input\" type=\"text\" id=\"choice2\" name=\"choice2\" />\
  <label class=\"mdl-textfield__label\" for=\"choice2\">Enter your mobile number</label>\
  </div><br>\
  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
<input class=\"mdl-textfield__input\" type=\"date\" id=\"choice3\" name=\"choice3\" />\
<label class=\"mdl-textfield__label\" for=\"choice3\">Enter your Blood Group (Example : A+ / A- / B+ / B- / . . .)</label>\
</div><br>\
  <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"forgotPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button><br>";
  }
  else if (x === "MONORG"){
    y.innerHTML = "<input type=\"hidden\" name=\"uniqid\" value=\"MONORG\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
	<input class=\"mdl-textfield__input\" type=\"text\" id=\"choice1\" name=\"choice1\" />\
	<label class=\"mdl-textfield__label\" for=\"choice1\">Enter your User Name</label>\
	</div><br>\
  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
  <input class=\"mdl-textfield__input\" type=\"email\" id=\"choice2\" name=\"choice2\" />\
  <label class=\"mdl-textfield__label\" for=\"choice2\">Enter your e mail address</label>\
  </div><br>\
  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
  <input class=\"mdl-textfield__input\" type=\"text\" id=\"choice3\" name=\"choice3\" />\
  <label class=\"mdl-textfield__label\" for=\"choice3\">Enter your mobile number</label>\
  </div><br>\
  <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"forgotPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button><br>";
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
/*
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
    y.innerHTML = "<a href=\"general_view.php\">View All Donors</a>";
  }
  else{
    y.innerHTML = "";
  }
}
*/
function unsubscribe(){
  var x = document.getElementById('uniqid').value;
  var y = document.getElementById('op1');
  if (x === "DNR"){
    y.innerHTML = "\
    <input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"text\" id=\"username\" name=\"username\" />\
      <label class=\"mdl-textfield__label\" for=\"username\">Enter your Login ID</label>\
    </div>\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"password\" id=\"password\" name=\"password\" />\
      <label class=\"mdl-textfield__label\" for=\"password\">Enter your secret Password</label>\
    </div>\
    <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" type=\"Submit\"><i class=\"material-icons\">X</i></button><br>";
  }
  else if (x === "RCV"){
    y.innerHTML = "\
    <input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"text\" id=\"bldgrp\" name=\"bldgrp\" />\
      <label class=\"mdl-textfield__label\" for=\"bldgrp\">Enter your Blood Group</label>\
    </div>\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"text\" id=\"mobno\" name=\"mobno\" />\
      <label class=\"mdl-textfield__label\" for=\"mobno\">Enter your Mobile Number</label>\
    </div>\
    <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" type=\"Submit\"><i class=\"material-icons\">X</i></button><br>";
  }
  else if (x === "MONORG"){
    y.innerHTML = "\
    <input type=\"hidden\" name=\"uniqid\" value=\"DNR\">\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"text\" id=\"username\" name=\"username\" />\
      <label class=\"mdl-textfield__label\" for=\"username\">Enter your Login ID</label>\
    </div>\
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">\
      <input class=\"mdl-textfield__input\" type=\"password\" id=\"password\" name=\"password\" />\
      <label class=\"mdl-textfield__label\" for=\"password\">Enter your secret Password</label>\
    </div>\
    <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" type=\"Submit\"><i class=\"material-icons\">X</i></button><br>";
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
  var a = confirm("really remove the donor with username "+username+" ?");
  if (a === true){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      /*document.getElementById("demo").innerHTML = xhttp.responseText;*/
      location.reload();
    }
  }
  xhttp.open("POST", "remdonor.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+username+"&mobno="+mobilenumber);
  }
}

function rememp_adminactions(empid,bdcid){
  var a = confirm("really remove the employee with username "+empid+" ?");
  if (a === true){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      /*document.getElementById("demo").innerHTML = xhttp.responseText;*/
      location.reload();
    }
  }
  xhttp.open("POST", "rembdcemp.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("empid="+empid+"&bdcid="+bdcid);
  }
}

function rembdc_adminactions(bdcid,bdcname){
  var a = confirm("really remove the bdc with username "+bdcid+" ?");
  if (a === true){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      /*document.getElementById("demo").innerHTML = xhttp.responseText;*/
      location.reload();
    }
  }
  xhttp.open("POST", "rembdc.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("bdcname="+bdcname+"&bdcid="+bdcid);
  }
}

function remmonorg_adminactions(orgid,cnum){
  var a = confirm("really remove the mon org with username "+orgid+" ?");
  if (a === true){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      /*document.getElementById("demo").innerHTML = xhttp.responseText;*/
      location.reload();
    }
  }
  xhttp.open("POST", "remmonorg.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("orgid="+orgid+"&cnum="+cnum);
  }
}

/*
  firefox placejolder value issue fix
*/

// Released under MIT license: http://www.opensource.org/licenses/mit-license.php
/*
$('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur().parents('form').submit(function() {
  $(this).find('[placeholder]').each(function() {
    var input = $(this);
    if (input.val() == input.attr('placeholder')) {
      input.val('');
    }
  })
});
*/
/*
  firefox placejolder value issue fix
*/
