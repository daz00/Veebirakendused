function checkPass()
{
    //Muutujad
    var pass1 = document.getElementById('parool_1');
    var pass2 = document.getElementById('parool_2');
	 //Kuhu message prinditakse
    var message = document.getElementById('confirm');
    //Erinevad värvid 
    var badColor = "#ff6666";
	
    //Võrdlemised ja sõnumivariandid
    if(pass1.value == pass2.value){
  	     pass2.style.backgroundColor = null;
		 message.innerHTML = ""
		 return true;
    }
	else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Paroolid on erinevad!"
		return false;
	    }
} 
function checkMail()
{
    //Muutujad
	var email1 = document.getElementById('email_1');
	var email2 = document.getElementById('email_2');
    //Kuhu message prinditakse
    var message = document.getElementById('confirm');
    //Erinevad värvid 
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Võrdlemised ja sõnumivariandid
	if(email1.value == email2.value){
		email1.style.backgroundColor = null;
		email2.style.backgroundColor = null;
		message.innerHTML = "";
		return true;
	}
	else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        email2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "E-mailid on erinevad!";
		return false;
	
    }
} 

function checkName()
{
    //Muutujad
	var name = document.getElementById('kasutaja_nimi').value;
    //Kuhu message prinditakse
    var message = document.getElementById('confirm');
    //Erinevad värvid 
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Võrdlemised ja sõnumivariandid
	if(name.length < 3){
		document.getElementById('kasutaja_nimi').style.backgroundColor = badColor;
		message.innerHTML = "Kasutajanimi on liiga lühike";
		return false;
	}
	else{
        document.getElementById('kasutaja_nimi').style.backgroundColor = null;
		message.innerHTML = "";
		return true;
	
    }
} 


function CheckUsername() 
{
    $.ajax({
        type: "POST",
        url: 'checkuser.php',
        data: { value: document.getElementById('kasutaja_nimi')},
        success: function() {
            return true;
        },
        error: function(){
            return false;
        }

});
}


function ValidateForm()   
{
	 
if (ValidatePass() == true && ValidateMail() == true && checkMail() == true && checkPass() ==true && checkName() == true && CheckUsername() == true){
	
	return true;
}

else{
	return false;}
}

function ValidatePass() {
var pass1 = document.getElementById('parool_1'); 
var lubatud=  /^[A-Za-z]\w{6,14}$/;  
var message = document.getElementById('confirm');
var badColor = "#ff6666";
	if(pass1.value.match(lubatud)){
		parool_1.style.backgroundColor = null;
		message.innerHTML = "";
		return true;
	}
	else {
	
			parool_1.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Parool peab olema 7-14 tähemärki ja sisaldama tähte. Täpitähed ei ole lubatud.";
			return false;
		
	}
}



function ValidateMail(){
	var email = document.getElementById('email_1');
	var message = document.getElementById('confirm');
	var badColor = "#ff6666";
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
		email_1.style.backgroundColor = null;
		message.innerHTML = "";
		return true;
	}
	else { email_1.style.backgroundColor = badColor;
	message.style.color = badColor;
	message.innerHTML = "E-mail on valel kujul!";
			return false;
}

}
