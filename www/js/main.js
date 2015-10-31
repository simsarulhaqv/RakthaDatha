
$(document).ready(function() {

	$("body").addClass("loaded");

	$(function () {
		$('a[rel="lightbox"]').fluidbox();
	})

});

function reg_donor(){

	var formData = new FormData(document.getElementById('frmdnr'));
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
      document.getElementById("dnrsignup").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "addnewdonor.php", true);
  xhttp.send(formData);

}

function reg_monorg(){

	var formData = new FormData(document.getElementById('frmmonorg'));
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
      document.getElementById("monorgsignup").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "addnewmonorg.php", true);
  xhttp.send(formData);

}
