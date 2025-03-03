 function validation(){
 var fname = document.getElementById('fname').value;
 var sname = document.getElementById('sname').value;
 var lname = document.getElementById('lname').value;
 var bdate = document.getElementById('bdate').value;
 var address = document.getElementById('address').value;
 var phone = document.getElementById('phone').value;
 var email = document.getElementById('email').value;
 var fncheck = /^[A-Za-z ]{3,20}$/;
  var sncheck = /^[A-Za-z ]{3,20}$/;
   var lncheck = /^[A-Za-z ]{3,20}$/;
    var bdcheck = /^[0-9-]{10,12}$/;
	 var addcheck = /^[A-Za-z ]{3,20}$/;
	  var phonecheck = /^[0-9]]{10}$/;
	  var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
	  if(fncheck.test(fname)){
	  document.getElementById('fnameerror').innerHTML = "";
	  }else{
	  document.getElementById('fnameerror').innerHTML = "** fname is Invalid";
	  return false;
	  }
	  	  if(sncheck.test(sname)){
	  document.getElementById('snameerror').innerHTML = "";
	  }else{
	  document.getElementById('snameerror').innerHTML = "** sname is Invalid";
	  return false;
	  }
	  	  if(lncheck.test(lname)){
	  document.getElementById('lnameerror').innerHTML = "";
	  }else{
	  document.getElementById('lnameerror').innerHTML = "** lname is Invalid";
	  return false;
	  }
	  	  	  if(bdcheck.test(bdate)){
	  document.getElementById('bdateerror').innerHTML = "";
	  }else{
	  document.getElementById('bdateerror').innerHTML = "** birth date is Invalid";
	  return false;
	  }
	  	  	  if(addcheck.test(address)){
	  document.getElementById('adderror').innerHTML = "";
	  }else{
	  document.getElementById('adderror').innerHTML = "** address is Invalid";
	  return false;
	  }
	  	  	  if(phonecheck.test(phone)){
	  document.getElementById('phonerror').innerHTML = "";
	  }else{
	  document.getElementById('phonerror').innerHTML = "** phone is Invalid";
	  return false;
	  }
	  	  	  	  if(emailcheck.test(email)){
	  document.getElementById('emailerror').innerHTML = "";
	  }else{
	  document.getElementById('emailerror').innerHTML = "** email is Invalid";
	  return false;
	  }
	  
	  
 }