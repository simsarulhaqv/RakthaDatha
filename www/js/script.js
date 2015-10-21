function spawnnew(){
  var x = document.getElementById('uniqid').value;
  if (x === "BDC"){
    var y = document.getElementById('op1');
    y.innerHTML = "<input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter the Manager ID\"><br>\
    <input type=\"text\" name=\"choice3\" placeholder=\"Enter the Blood Donation Centre City\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "EMP"){
    var y = document.getElementById('op1');
    y.innerHTML = "<input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter your designation\"><br>\
    When did you join the Blood Donation Centre ? <input type=\"date\" name=\"choice3\" placeholder=\"When did you join the Blood Donation Centre ?\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "DNR"){
    var y = document.getElementById('op1');
    y.innerHTML = "<input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter your Mobile Number\"><br>\
    <input type=\"text\" name=\"choice3\" placeholder=\"Enter your Blood Group (Example : A+ / A- / B+ / B- / . . .)\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else if (x === "MONORG"){
    var y = document.getElementById('op1');
    y.innerHTML = "<input type=\"text\" name=\"choice1\" placeholder=\"Enter your User Name\"><br>\
    <input type=\"text\" name=\"choice2\" placeholder=\"Enter your E-Mail ID\"><br>\
    <input type=\"email\" name=\"choice3\" placeholder=\"Enter your mobile number\"><br>\
    <input type=\"Submit\" name=\"forgotPwd\" value=\"Reset Password\"><br>";
  }
  else{
    var y = document.getElementById('op1');
    y.innerHTML = "<select id=\"uniqid\" name=\"uniqid\" onclick=\"spawnnew()\">\
      <option value=\"\">- Select One of the below -</option>\
      <option value=\"BDC\">Blood Donation Centre</option>\
      <option value=\"EMP\">Employee</option>\
      <option value=\"DNR\">Donor</option>\
      <option value=\"MONORG\">Monetary Organisation</option>\
    </select>";
  }
}
