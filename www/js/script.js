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
    y.innerHTML = "<input type=\"text\" name=\"fname\" id=\"fname\" placeholder=\"Enter first name\"><br>\
    <input type=\"text\" name=\"lname\" id=\"lname\" placeholder=\"Enter last name\"><br>\
    <input type=\"text\" name=\"city\" id=\"city\" placeholder=\"Enter city\"><br>\
    <input type=\"text\" name=\"mobno\" id=\"mobno\" placeholder=\"Enter mobile number\"><br>\
    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Enter E-Mail\"><br>\
    <input type=\"text\" name=\"btype\" id=\"btype\" placeholder=\"Enter Blood Type\"><br>\
    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Enter Password\"><br>\
    <input type=\"Submit\" name=\"adddnr\" value=\"Add Donor\"><br>\
    ";
  }
  else if (x === "remdnr"){

  }
  else if (x === "addbdc"){

  }
  else if (x === "rembdc"){

  }
  else if (x === "addmonorg"){

  }
  else if (x === "remmonorg"){

  }
  else if (x === "viewalldnr"){

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
