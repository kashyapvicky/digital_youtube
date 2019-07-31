$(document).ready(function(){
	$("#register_button").click(function(){
	var username = $("#register_username").val();
	var email = $("#register_email").val();
	var thepassword = $("#register_password").val();
	var secondpassword = $("#register_repassword").val();
	var question = $("#register_question").val();
	var answer = $("#register_answer").val();
	var gender = $("#register_gender").val();
	var refer = $("#register_refer").val();
	$.ajax({
		type:'POST',
		url:'inc/register.php',
		data:{
		username:username,
		email:email,
		thepassword:thepassword,
		secondpassword:secondpassword,
		question:question,
		answer:answer,
		gender:gender,
		refer:refer},
		dataType:'json',
		beforeSend:function(){
			document.getElementById('register_loading').innerHTML="<img class='container_login_loading_image' src='img/loading.gif'>";
		},
		success:function(rep){
if (rep !== "nothing"){
	if (rep !== "nocountry"){
			if (rep !== "username"){
				if (rep !== "usernamelenght"){
				if (rep !== "email"){
					if (rep !== "emailreal"){
					if (rep !== "passwordshort"){
					if (rep !== "password"){
										if (rep !== "question"){
											if (rep !== "gender"){
												document.location.href="index.php";
											}if (rep == "gender"){
										document.getElementById('register_loading').innerHTML="";
										document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>You must choose a gender</div>";}	
										}if (rep == "question"){
										document.getElementById('register_loading').innerHTML="";
										document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>You must choose a security question</div>";}	
					}if (rep == "password"){
					document.getElementById('register_loading').innerHTML="";
					document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The password does'n much.</div>";}
					}if (rep == "passwordshort"){
					document.getElementById('register_loading').innerHTML="";
					document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The password must be 6 characters at least.</div>";}
					}if (rep == "emailreal"){
					document.getElementById('register_loading').innerHTML="";
					document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>E-mail is already exists.</div>";}
				}if (rep == "email"){
				document.getElementById('register_loading').innerHTML="";
				document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The e-mail is not valid.</div>";}
				}if (rep == "usernamelenght"){
				document.getElementById('register_loading').innerHTML="";
				document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The username must be more than one character.</div>";}
			}if (rep == "username"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The username is already axists.</div>";}
			}if (rep == "nocountry"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>Registration is not available for your countrie.</div>";}
			}if (rep == "nothing"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>Please fill in all fields.</div>";}		
		}
		});
	});
});