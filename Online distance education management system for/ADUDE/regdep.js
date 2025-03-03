$(function(){
  $("#faculity_error_message").hide();
  $("#depid_error_message").hide();
  $("depname_error_message").hide();
 
  var error_faculity= false;
  var error_depid= false;
  var error_depname= false;
  $("#faculity").focusout(function(){
  check_faculity();
  });
 $("#depid").focusout(function(){
 check_depid();
 $("#depname").focusout(function(){
 check_depname();
      });
  //validation faculity
  function check_faculity()
{
  var u=$("#faculity").val();
  var len=$("#faculity").val().length;
  var pattern = /^[A-Z a-z]*$/;
  if(u=="")
  {
    error_faculity = true;
    $("#faculity_error_message").html("please fill the Facility");
    $("#faculity_error_message").show();
    $("#faculity").css("border-bottom","1px solid red");
    $("#faculity_error_message").css("color","red");
  }
  else if(len < 3 || len > 30)
  {
    error_faculity = true;
    $("#faculity_error_message").html("enter b/n 3-30 char");
    $("#faculity_error_message").show();
    $("#faculity").css("border-bottom","2px solid red");
    $("#faculity_error_message").css("color","red");
  }
  else
  if(pattern.test(u) == "")
{
error_faculity = true;
    $("#faculity_error_message").html("enter the valid char");
    $("#faculity_error_message").show();
    $("#faculity").css("border-bottom","2px solid red");
    $("#faculity_error_message").css("color","red");
}
  else
  {
    $("#faculity").css("border-bottom","1px solid green");
    $("#faculity_error_message").hide();
  }
}
// validation depid
function check_depid()
{
var u=$("#depid").val();
var len=$("#depid").val().length;
var pattern = /^[A-Z a-z]*$/;
if(u=="")
{
  error_depid = true;
  $("#depid_error_message").html("please fill the form");
  $("#depid_error_message").show();
  $("#depid").css("border-bottom","1px solid red");
  $("#depid_error_message").css("color","red");
}
else if(len < 3 || len > 30)
{
  error_depid=true;
  $("#depid_error_message").html("enter b/n 3-30 char");
  $("#depid_error_message").show();
  $("#depid").css("border-bottom","2px solid red");
  $("#depid_error_message").css("color","red");
}
else
if(pattern.test(u) == "")
{
error_depid=true;
  $("#depid_error_message").html("enter the valid char");
  $("#depid_error_message").show();
  $("#depid").css("border-bottom","2px solid red");
  $("#depid_error_message").css("color","red");
}
else
{
  $("#depid").css("border-bottom","1px solid green");
  $("#depid_error_message").hide();
}
}

// validation depname
function check_depname()
{
var u=$("#depname").val();
var len=$("#depname").val().length;
var pattern = /^[A-Z a-z]*$/;
if(u=="")
{
  error_depname = true;
  $("#depname_error_message").html("please fill the form");
  $("#depname_error_message").show();
  $("#depname").css("border-bottom","1px solid red");
  $("#depname_error_message").css("color","red");
}
else if(len < 2 || len > 30)
{
  error_depname=true;
  $("#depname_error_message").html("Enter between 2-30 character");
  $("#depname_error_message").show();
  $("#depname").css("border-bottom","2px solid red");
  $("#depname_error_message").css("color","red");
}
else
if(pattern.test(u) == "")
{
error_depname=true;
  $("#depname_error_message").html("enter the valid char");
  $("#depname_error_message").show();
  $("#depname").css("border-bottom","2px solid red");
  $("#depname_error_message").css("color","red");
}
else
{
  $("#depname").css("border-bottom","1px solid green");
  $("#depname
  
  
  
  _error_message").hide();
}
}

  $("#cform").submit(function(){
    var error_faculity= false;
    var error_depid= false;
    var error_depname= false;    
    check_faculity();
    check_depid();
    check_depname();
   
    if( error_faculity == false && error_depid == false && error_depname == false )
    {
    alert("Department is  Register  successfully");
      return true;
    }
    else{
      alert("please fill form correctly");
        return false;
    }
    });
    });
