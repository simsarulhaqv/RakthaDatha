function strengthMeter(){


    var password = document.getElementById("password").value;
    var numEx = /\d/;
    var lcEx = new RegExp("[a-z]");
    var ucEx = new RegExp("[A-Z]");
    var symbols = ['/', '@', '#', '%', '&', '.', '!', '*', '+', '?', '|','(', ')', '[', ']', '{', '}', '\\'];
    var meterMult = 1;

    for(var k = 0; k < password.length; k++){
        if(numEx.test(password)){
            meterMult += 0.75;
            document.getElementById("meter").style.width = " " + (10*meterMult) + "px";
        }

        if(ucEx.test(password)){
            meterMult += 1;
            document.getElementById("meter").style.width = " " + (10*meterMult) + "px";
        }

        if(lcEx.test(password)){
            meterMult += 0.25;
            document.getElementById("meter").style.width = " " + (10*meterMult) + "px";
        }

        for(var i = 0; i < symbols.length; i++){
            if(password.indexOf(symbols[i]) >= 0){
                meterMult += 1;
                document.getElementById("meter").style.width = " " + (10*meterMult) + "px";
            }
            }
        if(meterMult >= 12){
          /*  document.getElementById("strength").innerHTML = "Strong"; */
          document.getElementById("meter").style.backgroundColor = "green";
            }
        else if(k >= 6){
          /*  document.getElementById("strength").innerHTML = "Medium"; */
          document.getElementById("meter").style.backgroundColor = "yellow";
        }
        else{
          /*  document.getElementById("strength").innerHTML = "Weak"; */
          document.getElementById("meter").style.backgroundColor = "red";
        }

    }

  }
